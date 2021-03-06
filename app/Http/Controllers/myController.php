<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Redirect;
use Illuminate\Http\Response;

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
    	if(is_null($request->input('MatKhau'))){
    		echo $request->HoTen;
    		echo $request->input('MatKhau');
    	}   		
    	else redirect::to('https://dbaddiction.fandom.com/wiki/Dragon_Blaze_Wikia');
    }

    // Cookie
    public function setCookies()
    {
    	$Response = new Response();
    	$Response->withCookie('myCookieeee', 'pham duc tai', '0.5');
    	echo 'set Response';
    	return $Response;
    }

    public function getCookies(Request $request)
    {
    	echo 'my Response : ';
    	return $request->cookie('myCookieeee');
    }

    // upload file

    public function uploadFile(Request $request)
    {
    	if($request->hasFile('myFile'))
    	{
    		$file = $request->file('myFile');
    		// kiem tra dinh dang file upload
    		if($file->getClientOriginalExtension()=='jpg' || $file->getClientOriginalExtension()=='png')
    		{
    			$fileName = $file->getClientOriginalName('MyFile');
    			$file->move('img', $fileName);
    			echo '<br>da luu file';
    		}
    		else echo '<br>file ko phu hop';
    	}
    	else echo '<br>ko co file';
    }

    // json

    public function getJson()
    {
    	$array = ['khoahoc'=>['laguage'=>['laravel','php'],'experience'=>['research','ReadnUnderstand_source']]];
    	return response()->json($array);
    }

    // view

    public function myView()
    {
    	return view('myView');
    }

    public function Time($time)
    {
    	return view('myView', ['myTime'=>$time]);
    }

    // blade
    public function blade($tmp)
    {
    	if($tmp == 'laravel')
    	{
    		return view('pages.page1');
    	}
    	elseif($tmp == 'php')
    	{
    		return view('pages.page2');
    	}

    }
}
