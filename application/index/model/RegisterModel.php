<?php


namespace app\index\model;


use think\Controller;
use think\Db;
use think\db\exception\DataNotFoundException;
use think\db\exception\ModelNotFoundException;
use think\exception\DbException;
use think\Model;
use think\Validate;

class RegisterModel extends Model
{
    var $email;
    var $passwd;
    var $checkpasswd;



    public function connectDB()
    {
        try {
            $result = Db::table('user')->where('email', $this->email)->select();
        } catch (DataNotFoundException $e) {
        } catch (ModelNotFoundException $e) {
        } catch (DbException $e) {
        }
//        $item = $result[0];
        if ($result) {
            var_dump("该邮箱已被注册");
        } else {
            $data = ['email' => $this->email, 'passwd' => md5($this->passwd)];
            $insert = Db::table('user')->insert($data);
            if ($insert === 1) {
                var_dump("注册成功");
            } else {
                var_dump("注册失败");
            }
        }
    }

}