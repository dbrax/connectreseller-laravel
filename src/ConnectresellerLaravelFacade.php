<?php

namespace Epmnzava\ConnectresellerLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Epmnzava\ConnectresellerLaravel\Skeleton\SkeletonClass
 */
class ConnectresellerLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'connectreseller-laravel';
    }
}
