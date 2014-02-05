<?php

namespace Recurly\Resource;

class Plans extends Resource
{

    /**
     * Gets all plans
     *
     * @return \Recurly\Model\Plan[]
     */
    public function getAll()
    {
        $suffix  = 'plans';
        $context = 'array<Recurly\Model\Plan>';

        return $this->apiGet($suffix, $context);
    }

    /**
     * Gets a specified plan
     *
     * @param string $planCode
     *
     * @return \Recurly\Model\Plan
     */
    public function get($planCode)
    {
        $suffix  = sprintf('plans/%s', $planCode);
        $context = 'Recurly\Model\Plan';

        return $this->apiGet($suffix, $context);
    }

} 