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

        return view();
    }

   	public function sad()
   	{
   		return $this->fetch('');
   	}
}
