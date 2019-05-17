<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
use think\Request;

class Common extends Controller
{
    public function index()
    {
    	//判断登录
        return view();
    }
}
