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

	/**
	 * 根据id查询产品
	 * @param [type] $id [description]
	 */
	public function ByidVersion($id){
		$Version = M('Version');
		$data = $Version->where("id = $id")->find();
		return $data;
	}

	/**
	 * 根据id进行修改
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function exitVersion($data){
		$Version = M('Version');
		$id = $data['id'];
		$i = $Version->where("id=$id")->save($data);
		return $i;
	}

	/**
	 * 根据id进行删除
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delVersion($id){
		$Version = M('Version');
		$i = $Version->where("id=$id")->delete();
		return $i;
	}
}