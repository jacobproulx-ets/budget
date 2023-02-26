<?php

namespace App\Exceptions;

use  Illuminate\Validation\Validator;
use JetBrains\PhpStorm\Pure;

class InvalidPayloadException extends \Exception
{
    #[Pure]
    public function __construct(private Validator $validator, int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct("", $code, $previous);
    }

    /**
     * @return Validator
     */
    public function getValidator(): Validator
    {
        return $this->validator;
    }

}
