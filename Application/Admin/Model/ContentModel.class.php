<?php
namespace Admin\Model;
use Think\Model;
class ContentModel extends Model {

	/**
	 * 根据id查询content
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findContent($id){
		$Content = M("Content");
		$data = $Content->where("id=$id")->find();
		return $data;
	}

	/**
	 * 根据id修改content
	 * @param  [type] $id   [description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function exitContent($id,$data){
		$Content = M("Content");
		$i = $Content->where("id = $id")->save($data);
		return $i;
	}
}