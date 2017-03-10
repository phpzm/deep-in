<?php

namespace App\Error;

use Exception;

class RuntimeError extends Exception
{
    protected $status = 500;

    private $details = [];

    function __construct($details)
    {
        parent::__construct(get_class($this), 0, null);
        $this->details = $details;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getDetails()
    {
        return $this->details;
    }
}