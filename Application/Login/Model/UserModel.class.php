<?php
namespace Login\Model;

use Think\Model;

class UserModel extends Model {
/**
 * 查询用户
 * @param  [type] $username [description]
 * @return [type]           [description]
 */
    public function findUser($username){
        $user = M("user");
        $UsData = $user->where("username = $username")->find();
        return $UsData;
    }
}