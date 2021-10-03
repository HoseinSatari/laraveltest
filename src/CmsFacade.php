<?php


namespace Hitler\Cms;


use Illuminate\Support\Facades\Facade;

class CmsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
       return 'cms';
    }
}
