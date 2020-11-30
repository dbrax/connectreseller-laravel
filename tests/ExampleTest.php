<?php

namespace Epmnzava\ConnectresellerLaravel\Tests;

use Orchestra\Testbench\TestCase;
use Epmnzava\ConnectresellerLaravel\ConnectresellerLaravelServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ConnectresellerLaravelServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
