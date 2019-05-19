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
        return view();
    }

   	public function sad()
   	{
   		return $this->fetch('');
   	}
}
