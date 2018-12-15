<?php
namespace Home\Model;
use Think\Model;
class ArticleModel extends Model {
	//根据分类查询文章
	public function selclassification($classification){
		$article = M("Article");
		$data = $article->where("classification = $classification")->select();
		return $data;
	}
	//查询推荐的新闻
	public function tuijian($classification){
		$article = M("Article");
		$map['classification'] =array('like','%'.$classification.'%');
		$map['settop'] = 1;
		$data = $article->where($map)->order('id desc')->limit(4)->select();
		return $data;
	}
	public function findId($id){
		$article = M("Article");
		$data = $article->where("id = $id")->find();
		return $data;
	}
	//
	public function selnews($classification){
		$article = M("Article");
		$data = $article->where("classification=$classification")->order('id desc')->limit(10)->select();
		return $data;
	}
	//搜索
	public function sousuo($ss){
		$article = M("Article");
		$map['title | content'] =array('like','%'.$ss.'%');
		$data = $article->where($map)->select();
		return $data;
	}
}