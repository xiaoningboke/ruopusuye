<?php
namespace Home\Model;
use Think\Model;

class PictureModel extends Model {

	//查询图片的数据数据
	public function findPic($fenlei){
		$picture = M("Picture");
		$data = $picture->where("fenlei = $fenlei")->select();
		return $data;
	}
	public function findPicfore($fenlei){
		$picture = M("Picture");
		$data = $picture->where("fenlei = $fenlei")->limit(4)->select();
		return $data;
	}
}