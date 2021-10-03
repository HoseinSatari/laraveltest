<?php


Route::namespace('Hitler\Cms\Controllers')->middleware([\Hitler\Cms\Middleware\Admin::class])->group(function (){
    Route::get('admin/panel' , 'AdminPanelController@index');

});

