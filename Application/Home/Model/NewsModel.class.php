<?php
namespace Home\Model;
use Think\Model;
class NewsModel extends Model {
    /**
     * 显示新闻列表
     * @param  [type] $p [description]
     * @return [type]    [description]
     */
    public function findNewslist($p,$language){
        $news = M('news');
        $data=$news->where("language=$language")->order('id desc')->page($p.',5')->select();
        return $data;
    }
    /**
     * 显示新闻数量
     * @return [type] [description]
     */
    public function countNews($language){
        $news = M('news');
        $count = $news->where("language=$language")->count();
        return $count;
    }
    /**
     * 显示行业新闻列表
     * @param  [type] $p [description]
     * @return [type]    [description]
     */
    public function findindustryNewslist($p,$language,$classification){
        $news = M('news');
        $data=$news->where("classification=$classification and language=$language")->order('id desc')->page($p.',8')->select();
        //var_dump($language);
        return $data;
    }
    /**
     * 显示行业新闻数量
     * @return [type] [description]
     */
    public function countindustryNews($language,$classification){
        $news = M('news');
        $count = $news->where("classification=$classification and language=$language")->count();
        return $count;
    }

    /**
     * 根据Id查找新闻
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function findNews($id){
        $news = M('news');
        $data = $news->where("id=$id")->find();
        return $data;
    }

    /**
     * 首页新闻数据
     * @return [type] [description]
     */
    public function indexNews(){
        $news = M('News');
        $map['state'] = 1;
        $data = $news->where($map)->order('id desc')->limit(3)->select();
        return $data;
    }
}