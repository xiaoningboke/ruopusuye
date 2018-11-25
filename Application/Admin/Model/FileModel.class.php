<?php
namespace Admin\Model;
use Think\Model;
class FileModel extends Model {
	public function findFile($id){
		$File = M("File");
		$data = $File->where("id=$id")->find();
		return $data;
	}
}