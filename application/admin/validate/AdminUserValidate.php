<?php


namespace app\admin\validate;


use think\Validate;

class AdminUserValidate extends Validate
{
	 /**
     * 定义验证规则
     * 格式：'字段名'    =>    ['规则1','规则2'...]
     *
     * @var array
     */
     protected $rule = [
     		'name'  =>  'require|min:3|max:25',
     		'password'  =>  'require|length:6,20', 
     ];


     /**
     * 定义错误信息
     * 格式：'字段名.规则名'    =>    '错误信息'
     *
     * @var array
     */
     protected $message = [
     		'name.require'  =>  '名称不能为空',
     		'name.min'       =>  '名称最少3个字符',
     		'name.max'       =>  '名称最多25个字符',
     		'password.require'  =>  '密码不能为空',
     		'password.length'    =>  '密码长度在6到20位'
     ];



}












