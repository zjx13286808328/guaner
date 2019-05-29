<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
use app\admin\model\AdminUserModel as AdminUserModel;
use app\admin\controller\Common;


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

}
