<?php


namespace app\index\controller;


use think\Controller;
use think\Request;
use think\Route;
use think\Validate;

class register extends Validate
{
    public function index($email,$passwd)
    {
        $rule = [
            'passwd' => 'require|max:18|min:6',
            'email' => 'email',
        ];
        $msg = [
            'passwd.require' => '密码不能为空',
            'passwd.max' => '密码必须在6-18位之间',
            'passwd.min' => '密码必须在6-18位之间',
            'email' => '邮箱格式错误'
        ];
        $data = [
            'email' => $email,
            'passwd' => $passwd
        ];

        $validate = new Validate($rule, $msg);
        $result   = $validate->check($data);
        if(!$result){
            dump($validate->getError());
        }
    }
}