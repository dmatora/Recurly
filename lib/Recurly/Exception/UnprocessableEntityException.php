<?php

namespace Recurly\Exception;

class UnprocessableEntityException extends ClientException
{
    protected $errors;

    public function addError($error)
    {
        $this->errors[] = $error;
        return $this;
    }

    public function getErrors()
    {
        return $this->errors;
    }

} 