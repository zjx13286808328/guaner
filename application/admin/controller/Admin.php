<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
use app\admin\model\AdminUserModel as AdminUserModel;
use app\admin\controller\Common;
use think\Db;


class Admin extends Common
{
    public function index()
    {
      // var_dump(session::get('admin'));exit;
      $adminmodel = new AdminUserModel();
      $admin = $adminmodel->adminuser;
      // var_dump($admin);exit;


      return $this->fetch('',[
          '_admin'  => $admin,  
      ]);
    }

    public function add(){

      return $this->fetch('add');
    }

    public function doadd(){
      $password = md5(input('password'));
      $repassword = md5(input('repassword'));
      if($password != $repassword){
          $this->error('密码不一致');
      }
      // echo 1;
      $data = [
            'email'    => input('email'),
            'name'     => input('name'),
            'password' => $password
      ];

      $newadmin = Db::name('bm_admins')->insert($data);
      

      
      if($newadmin){
        echo "<script>window.parent.location.reload() </script> ";
      }else{
        $this->error('添加失败');
      }


      // var_dump($name);exit;
    }


    //删除
    public function delete($id){
      echo $id;
    }


   

}
