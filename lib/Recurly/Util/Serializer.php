<?php

namespace Recurly\Util;

use Recurly\Model\ModelInterface;

class Serializer
{
    /**
     * @param string $xml
     * @param string $context
     *
     * @return mixed
     */
    public function deserialize($xml, $context)
    {
        // read the XML
        $element = simplexml_load_string($xml);
        $deserializeVisitor = new DeserializeVisitor();
        return $deserializeVisitor->visitElement($element, $context);
    }

    /**
     * Serializes a ModelInterface to an XML string
     *
     * @param ModelInterface $model
     *
     * @return string
     */
    public function serialize(ModelInterface $model)
    {
        $serializeVisitor = new SerializeVisitor();
        return $serializeVisitor->visitModel($model)->saveXML();
    }

} 