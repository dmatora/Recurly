<?php

namespace Recurly\Resource;

class Subscriptions extends Resource
{

    /**
     * Gets all subscriptions
     *
     * @return \Recurly\Model\Subscription[]
     */
    public function getAll()
    {
        $suffix  = 'subscriptions';
        $context = 'array<Recurly\Model\Subscription>';

        return $this->apiGet($suffix, $context);
    }

    /**
     * Gets a specified subscription
     *
     * @param $id
     *
     * @return \Recurly\Model\Subscription
     */
    public function get($id)
    {
        $suffix  = sprintf('subscriptions/%s', $id);
        $context = 'Recurly\Model\Subscription';

        return $this->apiGet($suffix, $context);
    }
} 