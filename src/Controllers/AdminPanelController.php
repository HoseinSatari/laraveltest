<?php


namespace Hitler\Cms\Controllers;




use App\Http\Controllers\Controller;


class AdminPanelController extends Controller
{
    public function index()
    {
        return \Cms::listadmin();
        $name = "Hosein moret";
        return view('cms::index' , compact('name'));
    }
}
