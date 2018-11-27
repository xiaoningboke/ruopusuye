<?php
namespace Admin\Model;
use Think\Model;
class FenleiModel extends Model {
	/**
	 * 添加分类
	 * @param [type] $data [description]
	 */
	public function addFenlei($data){
		$Fenlei = M('Fenlei');
		$i = $Fenlei->add($data);
		return $i;
	}
	/**
	 * 查询所有的分类
	 * @return [type] [description]
	 */
	public function selFenlei(){
		$Fenlei = M('Fenlei');
		$data = $Fenlei->select();
		return $data;
	}
	/**
	 * 根据id查询分类
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		$Fenlei = M('Fenlei');
		$data = $Fenlei->where("id = $id")->find();
		return $data;
	}
	/**
	 * 根据id进行修改
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function exitfenlei($data){
		$id = $data['id'];
		$Fenlei = M('Fenlei');
		$i = $Fenlei->where("id = $id")->save($data);
		return $i;
	}
	/**
	 * 根据id删除分类
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delfenlei($id){
		$Fenlei = M('Fenlei');
		$i = $Fenlei->where("id=$id")->delete();
		return $i;
	}
}