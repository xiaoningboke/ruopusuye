<?php
namespace Home\Model;
use Think\Model;
class FileModel extends Model {
	/**
	 * 根基分类进行查询
	 * @param  [type] $state [description]
	 * @return [type]        [description]
	 */
	public function selBystate($state){
		$File = M('File');
		$data = $File->where("state=$state")->select();
		return $data;
	}
}