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

    //Request 

    public function getURL(Request $request)
    {
    	echo $request->url();
    	echo '<br>';
    	if($request->isMethod('get'))
    	{
    		echo 'phuong thuc Get<br>';
    	}
    	else
    	{
    		echo 'khong phai phuong thuc Get';
    	}

    	if($request->is('My*'))
    	{
    		echo 'my request';
    	}
    	else
    	{
    		echo 'no';
    	}
    }

    // form
    public function postForm(Request $request)
    {
    	echo 'postFormmmm';
    }
}
