<?php

namespace App\Exceptions;

use Exception;

class AppException extends Exception
{
    protected $statusCode;
    
    public function __construct($message = 'Error', $statusCode = 500, $code = 500, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->statusCode = $statusCode;
    }

    public function getStatusCode() 
    {
        return $this->statusCode;
    }
}