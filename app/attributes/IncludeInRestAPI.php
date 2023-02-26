<?php

namespace App\attributes;

use Attribute;

#[Attribute]
class IncludeInRestAPI
{

    public function __construct(public ?string $methodName = null)
    {
    }
}
