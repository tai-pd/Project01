<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function m_controller1()
    {
    	echo 'xin chao';
    }

    public function m_controler2($controller)
    {
    	echo 'xin chao 2 :' .$controller;
    	return redirect()->route('my_Route1', $controller);
    }
}
