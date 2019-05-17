<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;	
use think\Request;
use app\admin\validate\AdminUserValidate;
use app\admin\model\AdminUserModel as AdminUserModel;
use think\Db;
use think\Loader;

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


      
      $name       = $request->param('name');
      $password   = md5($request->param('password'));
      // return $name;
  		// dump($request->param());
      $parm    =[
  					  'name'     => $name,
  					  'password' => $password					  
  					    ];
             // dump($parm);
  		// $validate   = new AdminUserValidate();
  		 // 验证器
            $validate = Loader::validate('AdminUserValidate');
            // return $validate;
            if(!$validate->check($parm)){
                return($validate->getError());
            }


    
  		// // var_dump($validate);exit;
  		// $user       = Db::table('bm_admins')->where($parm)->find();
  		// if($user){
  		// 	if($password==$user->password){
  		// 		$this->success('登录成功','index/index');
  		// 	}else{
  		// 		$this->error('密码错误');
  		// 	}
  			
  		// }else{
  		// 	$this->error('用户不存在');
  		// }
  		// var_dump($user);exit;

  	}




    public function out()
    {
    	session('admininfo',null);
    	session('system',null);
    	$this->success('注销成功',url('Login/index'));
    	

    }
}
