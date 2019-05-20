<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
use think\Request;

class Common extends Controller
{
    public function _initialize(){
		if(!session('admin')){
			//没有session，提示用户登录
			$this->error('请先登录后操作',url('Login/index'));
		}
	}
}
