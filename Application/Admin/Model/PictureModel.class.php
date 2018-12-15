<?php
namespace Admin\Model;
use Think\Model;
class PictureModel extends Model {
	//添加图片数据
	function addPicture($data){
		$picture = M("Picture");
		$i = $picture->add($data);
		return $i;
	}

	//查询图片的数据数据
	public function findPic($fenlei){
		$picture = M("Picture");
		$data = $picture->where("fenlei = $fenlei")->select();
		return $data;
	}

	//根据id删除图片
	public function delpicture($id){
		$picture = M("Picture");
		$i = $picture->where("id = $id")->delete();
		return $i;
	}
}