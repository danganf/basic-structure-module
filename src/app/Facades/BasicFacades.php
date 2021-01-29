<?php
namespace SDKBlank\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class ThrowNewExceptionFacades
 * @package App\Facades
 */
class BasicFacades extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'SDKBlank\MyClass\BasicClass';
    }
}