<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;	
use think\Request;
use app\admin\validate\AdminUserValidate;
use app\admin\model\AdminUserModel;
use think\Db;

class Login extends Controller
{	
	/*
	 *登录首页
	 */
    public function index()
    {	
    	
    	return $this -> fetch();
    }

    /*
     *	登录 
     */
  	public function dologin()
  	{
  		$request = request();

  		$name       = $request->param('username');
  		$password   = md5($request->param('password'));
  		$parm       =[
  					  'name'     => $name,
  					  'password' => $password					  
  					 ];
  		$res        = $validate->scene->('AdminUserValidate')->check($parm);
  		if(!$res){
  			$this->error($validate->getError());
  		}
  		// var_dump($validate);exit;
  		$user       = Db::table('bm_admins')->where($parm)->find();
  		if($user){
  			if($password==$user->password){
  				$this->success('登录成功','index/index');
  			}else{
  				$this->error('密码错误');
  			}
  			
  		}else{
  			$this->error('用户不存在');
  		}
  		// var_dump($user);exit;

  	}




    public function out()
    {
    	session('admininfo',null);
    	session('system',null);
    	$this->success('注销成功',url('Login/index'));
    	

    }
}
