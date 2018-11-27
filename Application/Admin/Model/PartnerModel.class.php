<?php
namespace Admin\Model;
use Think\Model;
class PartnerModel extends Model {
	/**
	 * 添加合作伙伴
	 * @param [type] $data [description]
	 */
	public function addPartner($data){
		$Partner = M('Partner');
		$i = $Partner->add($data);
		return $i;
	}

	/**
	 * 查询所有的合作伙伴
	 * @return [type] [description]
	 */
	public function selPartner(){
		$Partner = M('Partner');
		$data = $Partner->select();
		return $data;
	}

	/**
	 * 根据id查询
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		$Partner = M('Partner');
		$data = $Partner->where("id = $id")->find();
		return $data;
	}

	/**
	 * 根据id修改合作伙伴
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function exitById($data){
		$id = $data['id'];
		$Partner = M('Partner');
		$i = $Partner->where("id=$id")->save($data);
		return $i;
	}

	/**
	 * 根据id删除合作伙伴
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delpartner($id){
		$Partner = M('Partner');
		$i = $Partner->where("id = $id")->delete();
		return $i;
	}
}