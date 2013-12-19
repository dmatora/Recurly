<?php

namespace Recurly\Util;

use Recurly\Model\ModelInterface;

class SerializeVisitor extends Visitor
{
    /** @var \DOMDocument */
    protected $dom;

    public function __construct()
    {
        $this->dom = new \DOMDocument('1.0');
        $this->dom->formatOutput = true;
    }

    /**
     * @param ModelInterface $model
     *
     * @return \DOMDocument
     */
    public function visitModel(ModelInterface $model)
    {
        // get a DOM Document with a lowercase, non-namespaced classname as root
        $class = strtolower(join('', array_slice(explode('\\', get_class($model)), -1)));
        $root = $this->dom->createElement($class);
        $this->dom->appendChild($root);

        $mapping = $model->getMapping();
        foreach ($mapping as $variable => $options) {
            $value = call_user_func(
                [
                    $model,
                    'get' . preg_replace('/(^|_)([a-z])/e', 'strtoupper("\\2")', $variable),
                ]
            );
            $this->setChild($root, $value, $variable, $options);
        }

        return $this->dom;
    }

    /**
     * Sets a child on the given DOMDocument
     * Returns true if a child was set, false if not
     *
     * @param \DOMElement $xml
     * @param mixed       $value
     * @param string      $variable
     * @param array       $options
     *
     * @return boolean
     */
    protected function setChild(\DOMElement $xml, $value, $variable, $options)
    {
        if (null === $value) {
            return false;
        }
        switch ($options['type']) {
            case 'string':
            case 'integer':
                $element = $this->dom->createElement($variable, $value);
                break;
            case 'boolean':
                $element = $this->dom->createElement($variable, $this->visitBoolean($value));
                break;
            case 'datetime':
                $element = $this->dom->createElement($variable, $this->visitDatetime($value));
                break;
            default:
                if (class_exists($options['type'])) {
                    // We mapped to an existing class
                    $element = $this->dom->createElement($variable, $this->visitModel($value));
                } elseif ($this->isArrayType($options['type'], $arrayType, $keepKey)) {
                    // We mapped to an array<type>
                    $element = $this->dom->createElement($variable);
                    foreach ($value as $key => $val) {
                        $key = $keepKey ? $key : $options['key'];
                        $this->setChild($element, $val, $key, ['type' => $arrayType]);
                    }
                } else {
                    // A type we can't handle
                    return false;
                }
        }

        $xml->appendChild($element);
        return true;
    }


    /**
     * @param boolean $value
     *
     * @return string
     */
    protected function visitBoolean($value)
    {
        return $value
            ? 'true'
            : 'false';
    }

    /**
     * @param \DateTime $datetime
     *
     * @return string|null
     */
    protected function visitDatetime(\DateTime $datetime)
    {
        return $datetime->format('Y-m-d\TH:i:s\Z');
    }

} 