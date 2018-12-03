<?php
namespace Admin\Model;
use Think\Model;
class LiuyanModel extends Model {
/**
 * 显示留言
 * @param  [type] $p [description]
 * @return [type]    [description]
 */
    public function findliuyanlist($p){
        $liuyan = M('liuyan');
            $data=$liuyan->order('id desc')->page($p.',9')->select();
        return $data;
    }
/**
 * 显示留言数量
 * @return [type] [description]
 */
    public function countliuyan(){
        $liuyan = M('liuyan');
        $count = $liuyan->count();
        return $count;
    }
/**
 * 根据id查看留言详情
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
    public function findliuyan($id){
        $liuyan = M('liuyan');
        $data = $liuyan->where("id=$id")->find();
        return $data;
    }
/**
 * 删除留言
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
    public function del($id){
        $liuyan=M('liuyan');
        $s=$liuyan->where("id=$id")->delete();
        return $s;

    }
}