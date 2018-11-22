<?php
namespace Admin\Model;
use Think\Model;
class InformationModel extends Model {
	/**
	 * 查询公司的信息
	 * @return [Array] [公司基本信息]
	 */
	public function findInformation($language){
		$information = M("Information");
		if($language==0){
			$data = $information->where('id=1')->find();
		}else{
			$data = $information->where('id=2')->find();
		}
		return $data;
	}
	/**
	 * 修改公司信息
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function exitInformation($data,$language){
		$information = M("Information");
		if($language == 0){
			$i = $information->where('id = 1')->save($data);
		}else{
			$i = $information->where('id = 2')->save($data);
		}
		return $i;
	}
}