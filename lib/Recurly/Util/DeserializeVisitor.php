<?php

namespace Recurly\Util;

use Recurly\Model\ModelInterface;

class DeserializeVisitor extends Visitor
{
    /**
     * @param \SimpleXMLElement $element
     * @param string|array      $options
     *
     * @return mixed
     */
    public function visitElement($element, $options)
    {
        $type = is_array($options) ? $options['type'] : $options;

        // it is possible the element is not available
        if (!$element) {
            return null;
        } else {
            // get the value based on it's mapped type
            switch ($type) {
                case 'string':
                    return $this->visitString($element, $options);
                    break;
                case 'integer':
                    return $this->visitInteger($element, $options);
                    break;
                case 'boolean':
                    return $this->visitBoolean($element, $options);
                    break;
                case 'datetime':
                    return $this->visitDateTime($element, $options);
                    break;
                default: // catch other cases
                    if (class_exists($type)) {
                        // We mapped to an existing class
                        return $this->visitModel($type, $element);
                    } elseif ($this->isArrayType($type, $arrayType, $keepKey)) {
                        // We mapped to an array<type>
                        return $this->visitArray($arrayType, $element, $keepKey);
                    } else {
                        // A type we can't handle
                        return null;
                    }
            }
        }
    }

    /**
     * Builds a model based on it's mapping.
     * Does so recursively if needed
     *
     * @param string            $classPath
     * @param \SimpleXMLElement $element
     *
     * @throws \InvalidArgumentException
     *
     * @return mixed
     */
    protected function visitModel($classPath, $element)
    {
        // Check if we have a valid $classPath and Model (must extend Model)
        if (class_exists($classPath)) {
            $model = new $classPath;
            if ($model instanceof ModelInterface) {
                // get the mapping
                $mapping = $model->getMapping();

                // loop over the mapping
                // for every mapped field, get a value
                foreach ($mapping['attributes'] as $variable => $opts) {
                    // Call the Model setter and set the value
                    call_user_func(
                        [
                            $model,
                            'set' . preg_replace('/(^|_)([a-z])/e', 'strtoupper("\\2")', $variable),
                        ],
                        $this->visitElement($element->$variable, $opts)
                    );
                }
                return $model;
            } else {
                throw new \InvalidArgumentException(sprintf('"%s" does not implement Recurly\Model\ModelInterface', $classPath));
            }
        } else {
            throw new \InvalidArgumentException(sprintf('"%s" is not a class', $classPath));
        }
    }

    /**
     * @param \SimpleXMLElement $element
     * @param string|array      $options
     *
     * @return null|string
     */
    protected function visitString($element, $options)
    {
        if ('nil' === $this->getAttributeValue($element, 'nil')) {
            return null;
        }

        $fromAttr = is_array($options) && isset($options['fromAttribute'])
            ? $options['fromAttribute']
            : null;

        $value = null === $fromAttr
            ? (string)$element
            : $this->getAttributeValue($element, $fromAttr);

        $regex  = is_array($options) && isset($options['regex'])
            ? $options['regex']
            : null;

        if ($regex) {
            if (preg_match($regex, $value, $matches)) {
                $value = isset($matches[1])
                    ? $matches[1]
                    : $value;
            }
        }

        return $value;
    }

    /**
     * Gets an integer value
     *
     * @param \SimpleXMLElement $element
     * @param string|array      $options
     *
     * @return null|int
     */
    protected function visitInteger($element, $options)
    {
        return (int)$this->visitString($element, $options);
    }

    /**
     * Gets a boolean value
     * Defaults to false, only true if value is "true"
     *
     * @param \SimpleXMLElement $element
     * @param string|array      $options
     *
     * @return null|boolean
     */
    protected function visitBoolean($element, $options)
    {
        $value = $this->visitString($element, $options);
        if ('true' === $value) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Gets a DateTime value
     *
     * @param \SimpleXMLElement $element
     * @param string|array      $options
     *
     * @return null|\DateTime
     */
    protected function visitDateTime($element, $options)
    {
        // get string value first
        $value = $this->visitString($element, $options);
        // if not null, convert to DateTime object
        if (null !== $value) {
            $value = new \DateTime($value);
        }
        return $value;
    }

    /**
     * @param string            $type
     * @param \SimpleXMLElement $element
     * @param boolean           $keepKey
     *
     * @return array
     */
    protected function visitArray($type, $element, $keepKey = false)
    {
        $value = null;
        $i     = 0;
        foreach ($element->children() as $key => $child) {
            $k         = $keepKey ? $key : $i++;
            $value[$k] = 'string' === $type ? (string)$child : $this->visitElement($child, $type);
        }

        return $value;
    }

    private function getAttributeValue(\SimpleXMLElement $element, $attribute)
    {
        foreach ($element->attributes() as $key => $val) {
            if ($attribute === $key) {
                return (string)$val;
            }
        }

        return null;
    }
} 