<?php
namespace Admin\Model;
use Think\Model;
class PhotoModel extends Model {
	public function selPhoto(){
		$photo = M("Photo");
		$data = $photo->select();
		return $data;
	}
	//根据id查看
	public function findId($id){
		$photo = M("Photo");
		$data = $photo->where("id=$id")->find();
		return $data;
	}

	public function exitPhoto($data){
		$id = $data[id];
		$photo = M("Photo");
		$i = $photo->where("id = $id")->save($data);
		return $i;
	}
}