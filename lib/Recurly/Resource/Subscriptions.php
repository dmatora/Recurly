<?php

namespace Recurly\Resource;

use Recurly\Model\NewSubscription;

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
     * @param NewSubscription $newSubscription
     *
     * @return \Recurly\Model\Subscription
     */
    public function create(NewSubscription $newSubscription)
    {
        return $this->apiPost(
            'subscriptions',
            $newSubscription,
            'Recurly\Model\Subscription'
        );
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