<?php

namespace Recurly\Util;

use Recurly\Model\ModelInterface;

class DeserializeVisitor extends Visitor
{
    /**
     * @param \SimpleXMLElement $element
     * @param                   $type
     *
     * @return mixed
     */
    public function visitElement($element, $type)
    {
        // it is possible the element is not available
        if (!$element) {
            return null;
        } else {
            // get the value based on it's mapped type
            switch ($type) {
                case 'string':
                    return $this->visitString($element);
                    break;
                case 'integer':
                    return $this->visitInteger($element);
                    break;
                case 'boolean':
                    return $this->visitBoolean($element);
                    break;
                case 'datetime':
                    return $this->visitDateTime($element);
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
     * @param \SimpleXMLElement $element
     *
     * @return null|string
     */
    protected function visitString($element)
    {
        $value = (string)$element;
        foreach ($element->attributes() as $key => $val) {
            if ('nil' === $key && 'nil' === (string)$val) {
                $value = null;
                break;
            }
        }
        return $value;
    }

    /**
     * Gets an integer value
     *
     * @param \SimpleXMLElement $element
     *
     * @return null|int
     */
    protected function visitInteger($element)
    {
        return (int)$this->visitString($element);
    }

    /**
     * Gets a boolean value
     * Defaults to false, only true if value is "true"
     *
     * @param \SimpleXMLElement $element
     *
     * @return null|boolean
     */
    protected function visitBoolean($element)
    {
        $value = $this->visitString($element);
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
     *
     * @return null|\DateTime
     */
    protected function visitDateTime($element)
    {
        // get string value first
        $value = $this->visitString($element);
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
                foreach ($mapping as $variable => $opts) {
                    // Call the Model setter and set the value
                    call_user_func(
                        [
                            $model,
                            'set' . preg_replace('/(^|_)([a-z])/e', 'strtoupper("\\2")', $variable),
                        ],
                        $this->visitElement($element->$variable, $opts['type'])
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
} 