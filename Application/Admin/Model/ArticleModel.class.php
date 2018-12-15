<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model {
	//根据分类查询信息
	public function classificationSelect($classification){
		$article = M("Article");
		$data = $article->where("classification = $classification")->select();
		return $data;
	}

	//根据id查询信息
	public function findbyId($id){
		$article = M("Article");
		$data = $article->where("id = $id")->find();
		return $data;
	}

	//根据id修改内容
	public function exitArticle($data){
		$id = $data[id];
		$article = M("Article");
		$i = $article->where("id = $id")->save($data);
		return $i;
	}

	//添加内容
	public function addNews($data){
		$article = M("Article");
		$i = $article->add($data);
		return $i;
	}

	//查询新闻
	public function selnews(){
		$article = M("Article");
		$data = $article->where("classification = 6 || classification = 7 || classification=17")->select();
		return $data;
	}

	public function delArticle($id){
		$article = M("Article");
		$i = $article->where("id=$id")->delete(); 
		return $i;
	}
}