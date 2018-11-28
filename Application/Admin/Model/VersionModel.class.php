<?php
namespace Admin\Model;
use Think\Model;
class VersionModel extends Model {
	/**
	 * 添加型号
	 * @param [type] $data [description]
	 */
	public function addVersion($data){
		$Version = M('Version');
		$i = $Version->add($data);
		return $i;
	}

	/**
	 * 根据product_id查询型号
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findByidVersion($id){
		$Version = M('Version');
		$data = $Version->where("product_id = $id")->select();
		return $data;
	}
}