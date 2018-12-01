<?php
namespace Home\Model;
use Think\Model;
class LiuyanModel extends Model {

	/**
	 * 添加留言
	 * @param [type] $data [description]
	 */
	public function addLiuyan($data){
		$Liuyan = M('Liuyan');
		$i = $Liuyan->add($data);
		return $i;
	}
}