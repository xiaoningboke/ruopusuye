<?php
namespace Home\Model;
use Think\Model;
class FenleiModel extends Model {
    /**
     * 显示产品分类
     * @return [type] [description]
     */
    public function findclass(){
        $fen = M('fenlei');
        $data=$fen->select();
        return $data;
    }
}