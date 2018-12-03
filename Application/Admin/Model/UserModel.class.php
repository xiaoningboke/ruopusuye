<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
	/**
	 * 修改密码
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function exitpassword($data){
		$id = $data[id];
		$user = M("user");
		$i = $user->where("id=$id")->save($data);
		return $i;
	}
	/**
	 * 根据id查找密码
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findUser($id){
		$user = M("user");
		$password = $user->where("id=$id")->getField('password');
		return $password;
	}
}