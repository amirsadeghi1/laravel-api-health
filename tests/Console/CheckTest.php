<?php

namespace ProtoneMedia\ApiHealth\Tests\Console;

use Illuminate\Support\Facades\Artisan;
use Orchestra\Testbench\TestCase;
use ProtoneMedia\ApiHealth\Tests\TestCheckers\FailingChecker;
use ProtoneMedia\ApiHealth\Tests\TestCheckers\PassingChecker;
use Spatie\Snapshots\MatchesSnapshots;

class CheckTest extends TestCase
{
    use MatchesSnapshots;

    protected function getPackageProviders($app)
    {
        return [
            \ProtoneMedia\ApiHealth\ApiHealthServiceProvider::class,
        ];
    }

    /** @test */
    public function it_can_display_a_passing_checker()
    {
        Artisan::call('api-health:check', ['checkerClass' => PassingChecker::class]);

        $this->assertMatchesSnapshot(Artisan::output());
    }

    /** @test */
    public function it_can_display_a_failing_checker()
    {
        Artisan::call('api-health:check', ['checkerClass' => FailingChecker::class]);

        $this->assertMatchesSnapshot(Artisan::output());
    }
}
