<?php
namespace Home\Model;
use Think\Model;
class PartnerModel extends Model {

	/**
	 * 查询所有合作伙伴
	 * @return [type] [description]
	 */
	public function selPartner(){
		$Partner = M('Partner');
		$data = $Partner->select();
		return $data;
	}
}
