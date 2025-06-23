<?php

namespace App\Charging\Domain\Session\Query;

use IteratorAggregate;

final readonly class SessionPage implements \IteratorAggregate, \Countable
{
    /** @var Session[] */
    public array $sessions;

    public function __construct(
        public int $currentPage,
        public int $pageSize,
        public int $totalItems,
        Session ...$sessions
    ) {
        $this->sessions = $sessions;
    }

    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->sessions);
    }

    public function count(): int
    {
        return count($this->sessions);
    }
}
