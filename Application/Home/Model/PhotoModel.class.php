<?php
namespace Home\Model;
use Think\Model;
class PhotoModel extends Model {
	public function selPhoto(){
		$photo = M("Photo");
		$data = $photo->select();
		return $data;
	}
}