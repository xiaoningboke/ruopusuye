<?php
namespace Home\Model;
use Think\Model;
class VersionModel extends Model {
    /**
     * 显示产品分类
     * @return [type] [description]
     */
    public function findVer($id){
        $ver = M('version');
        $datas=$ver->where("product_id=$id")->select();
        return $datas;
    }
    /**
     * 查询不同型号的图片url
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function findVerimg($id){
        $ver = M('version');
        $imgurl=$ver->where("product_id=$id")->getField('imgurl',true);
        return $imgurl;
    }
    /**
     * 查询不同型号的价格
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function findVerprice($id){
        $ver = M('version');
        $price=$ver->where("product_id=$id")->getField('price',true);
        return $price;
    }
    /**
     * 查询不同型号的型号名称
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function findVerxing($id){
        $ver = M('version');
        $xinghao=$ver->where("product_id=$id")->getField('xinghao',true);
        return $xinghao;
    }
}