<?php  


namespace app\admin\model;

use think\Model;
use think\Controller;
use think\Db;

class AdminUserModel extends Model{
	protected $table = 'bm_admins';

	function panduan($name)
    {
        return Db::name('bm_admins')->where('name',$name)->find();
    }

    function adminuser(){
    	return Db::query('select * from bm_admins');
    	// return Db::name('bm_admins')->select();
    }
}