<?php
namespace Home\Model;
use Think\Model;
class InformationModel extends Model {
	/**
	 * 根据id查看信息
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findByid($id){
		$Information = M('Information');
		$data = $Information->where("id=$id")->find();
		return $data;
	}
}