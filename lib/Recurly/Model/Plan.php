<?php

namespace Recurly\Model;

class Plan implements ModelInterface
{
    /** @var string */
    protected $plan_code;
    /** @var string */
    protected $name;

    /**
     * Returns a mapping
     *
     * @return array
     */
    public function getMapping()
    {
        return [
            'attributes' => [
                'plan_code' => [
                    'type' => 'string',
                ],
                'name' => [
                    'type' => 'string',
                ],
            ],
        ];
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $plan_code
     *
     * @return $this
     */
    public function setPlanCode($plan_code)
    {
        $this->plan_code = $plan_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlanCode()
    {
        return $this->plan_code;
    }


}