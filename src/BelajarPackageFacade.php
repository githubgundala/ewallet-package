<?php

namespace Agrp\BelajarPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Agrp\BelajarPackage\Skeleton\SkeletonClass
 */
class BelajarPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'belajar-package';
    }
}
