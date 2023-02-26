<?php

namespace DanPalmieri\CustomDomains\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\Skeleton
 */
class CustomDomains extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \DanPalmieri\CustomDomains\CustomDomains::class;
    }
}
