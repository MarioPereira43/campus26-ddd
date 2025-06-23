<?php

namespace App\Charging\Domain\Session\Query;

use App\Charging\Domain\Session\SessionId;

final readonly class Session
{
    public function __construct(
        public SessionId $id
    ) {}
}