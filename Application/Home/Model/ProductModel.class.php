<?php
namespace Home\Model;
use Think\Model;
class ProductModel extends Model {
    /**
     * 显示产品列表
     * @param  [type] $p [description]
     * @return [type]    [description]
     */
    public function findProlist($p,$keys,$fenlei_id){
        $pro = M('Product');
        $data['name'] =array('like','%'.$keys.'%');
        if ($fenlei_id==null) {
            $datas=$pro->where($data)->order('id desc')->page($p.',9')->select();
        }else{
            $datas=$pro->where("fenlei_id=$fenlei_id")->where($data)->order('id desc')->page($p.',9')->select();
        }
        return $datas;
    }
    /**
     * 显示产品数量
     * @return [type] [description]
     */
    public function countPro($keys,$fenlei_id){
        $pro = M('Product');
        $data['name'] =array('like','%'.$keys.'%');
        if ($fenlei_id==null) {
            $count = $pro->where($data)->count();
        }else{
            $count = $pro->where("fenlei_id=$fenlei_id")->where($data)->count();
        }
        return $count;
    }
    public function findDetail($id){
        $news = M('product');
        $data = $news->where("id=$id")->find();
        return $data;
    }

    /**
     * 查询所有产品
     * @return [type] [description]
     */
    public function sel(){
        $Product = M('Product');
        $data = $Product->select();
        return $data;
    }
}