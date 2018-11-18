<?php
namespace Admin\Model;
use Think\Model;
class InformationModel extends Model {
	/**
	 * 查询公司的信息
	 * @return [Array] [公司基本信息]
	 */
	public function findInformation(){
		$information = M("Information");
		$data = $information->where('id=1')->find();
		return $data;
	}
	/**
	 * 修改公司信息
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function exitInformation($data){
		$information = M("Information");
		$i = $information->where('id = 1')->save($data);
		return $i;
	}
}