<?php


namespace Hitler\Cms;


use Hitler\Cms\Model\Admin;

class Cms
{
    public function listadmin()
    {
        return Admin::all();
    }
}
