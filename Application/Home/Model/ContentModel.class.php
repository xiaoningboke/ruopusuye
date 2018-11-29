<?php
namespace Home\Model;
use Think\Model;
class ContentModel extends Model {
	/**
	 * 根据id查看信息
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findByid($id){
		$Content = M('Content');
		$data = $Content->where("id=$id")->find();
		return $data;
	}
}