<?php

namespace ProtoneMedia\ApiHealth\Tests\TestCheckers;

use Pbmedia\ApiHealth\Checkers\AbstractChecker;

class PassingChecker extends AbstractChecker
{
    public function run()
    {
        return;
    }

    public function isDue(): bool
    {
        return true;
    }

    public static function create()
    {
        return new static;
    }
};
