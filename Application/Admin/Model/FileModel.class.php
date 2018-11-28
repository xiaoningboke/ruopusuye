<?php
namespace Admin\Model;
use Think\Model;
class FileModel extends Model {
	/**
	 * 根据id查看信息
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findFile($id){
		$File = M("File");
		$data = $File->where("id=$id")->find();
		return $data;
	}
	/**
	 * 根据state查询所有文件
	 * @param  [type] $state [description]
	 * @return [type]        [description]
	 */
	public function findFileByState($state){
		$map['state'] = $state;
		$File = M("File");
		$data = $File->where($map)->select();
		return $data; 
	}
	/**
	 * 根据id进行修改
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function exitFile($data){
		$File = M("File");
		$id = $data['id'];
		$i = $File->where("id = $id")->save($data);
		return $i;
	}
	/**
	 * 添加信息
	 * @param [type] $data [description]
	 */
	public function addFile($data){
		$File = M("File");
		$i = $File->add($data);
		return $i;
	}
	/**
	 * 根据id删除分类
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delFile($id){
		$File = M("File");
		$i = $File->where("id = $id")->delete();
		return $i;
	}

	/**
	 * 查询所有分类
	 * @return [type] [description]
	 */
	public function selFenlei(){
		$Fenlei = M('Fenlei');
		$data = $Fenlei->select();
		return $data;
	}
}