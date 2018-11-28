<?php
namespace Admin\Model;
use Think\Model;
class ProductModel extends Model {
	/**
	 * 添加产品
	 * @param [type] $data [description]
	 */
	public function addProduct($data){
		$Product = M('Product');
		$i = $Product->add($data);
		return $i;
	}

	/**
	 * 查询所有产品
	 * @return [type] [description]
	 */
	public function selProduct(){
		$Product = M('Product');
		$data = $Product->join('rp_fenlei  on rp_fenlei.id = rp_product.fenlei_id')->field('rp_fenlei.name,rp_product.id,rp_product.name as pname, rp_product.enname,rp_product.content,rp_product.encontent')->select();
		return $data;
	}

	/**
	 * 根据id插叙详细信息
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		$Product = M('Product');
		$data = $Product->where("id = $id")->find();
		return $data;
	}

	/**
	 * 根据id进行修改
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function exitproduct($data){
		$id = $data['id'];
		$Product = M('Product');
		$i = $Product->where("id=$id")->save($data);
		return $i;
	}

	/**
	 * 根据id删除产品
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delProduct($id){
		$Product =  M('Product');
		$i = $Product->where("id=$id")->delete();
		return $i;
	}
}