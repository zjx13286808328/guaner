<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
use think\Request;
use app\admin\controller\Common;

class Index extends Common
{
    public function index()
    {
    	// var_dump(session('admin'));exit;
    	$admin = session::get('admin');
    	// var_dump($admin);exit;
    	
        return $this->fetch('index',['admin'=>$admin]);
    }

   	public function sad()
   	{
   		return $this->fetch('');
   	}
}
