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
     * @param $uuid
     *
     * @return \Recurly\Model\Subscription
     */
    public function get($uuid)
    {
        $suffix  = sprintf('subscriptions/%s', $uuid);
        $context = 'Recurly\Model\Subscription';

        return $this->apiGet($suffix, $context);
    }


    /**
     * Cancels a specified subscription
     *
     * @param $uuid
     *
     * @return \Recurly\Model\Subscription
     */
    public function cancel($uuid)
    {
        $suffix  = sprintf('subscriptions/%s/cancel', $uuid);
        $context = 'Recurly\Model\Subscription';

        return $this->apiPut($suffix, $context);

    }
} 