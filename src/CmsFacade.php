<?php

namespace Somespaceph\Cms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Somespaceph\Cms\Skeleton\SkeletonClass
 */
class CmsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cms';
    }
}
