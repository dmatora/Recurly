<?php

namespace Recurly\Util;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\XmlDeserializationVisitor;

class HandlerSubscriber implements SubscribingHandlerInterface
{
    /**
     * {@inheritDoc}
     */
    public static function getSubscribingMethods()
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'string',
                'method' => 'checkForNullToo',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'DateTime',
                'method' => 'checkForNull',
            ],
        ];
    }

    // works
    public function checkForNull(XmlDeserializationVisitor $visitor, $data, array $type, DeserializationContext $context)
    {
        return null;
    }

    // does nothing
    public function checkForNullToo(XmlDeserializationVisitor $visitor, $data, array $type, DeserializationContext $context)
    {
        return null;
    }
}