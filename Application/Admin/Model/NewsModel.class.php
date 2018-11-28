<?php
namespace Admin\Model;
use Think\Model;
class NewsModel extends Model {

	/**
	 * 发布新闻
	 * @param  [type] $id   [description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function exitNews($data){
		$news = M("news");
		$i = $news->add($data);
		return $i;
	}
    /**
     * 显示新闻
     * @param  [type] $p        [description]
     * @param  [type] $keys     [description]
     * @param  [type] $language [description]
     * @return [type]           [description]
     */
	public function findNewslist($p,$keys,$language){
        $news = M('news');
        $data['title | abstracts'] =array('like','%'.$keys.'%');
        if ($language==null) {
            $data=$news->where($data)->order('id desc')->page($p.',9')->select();
        }else{
            $data=$news->where("language=$language")->order('id desc')->page($p.',9')->select();
        }
        return $data;
    }
    /**
     * 显示新闻数量
     * @param  [type] $keys     [description]
     * @param  [type] $language [description]
     * @return [type]           [description]
     */
    public function countNews($keys,$language){
        $news = M('news');
        $data['title | abstracts'] =array('like','%'.$keys.'%');
        if ($language==null) {
            $count = $news->where($data)->count();
        }else{
            $count = $news->where("language=$language")->count();
        }
        return $count;
    }
	/**
	 * 根据id查找新闻
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
    public function findNews($id){
        $news = M('news');
        $data = $news->where("id=$id")->find();
        return $data;
    }
    /**
     * 根据Id修改新闻内容
     * @param  [type] $id   [description]
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
	public function exitNewslist($id,$data,$language){
		$news = M("news");
		//var_dump($id);
		$i = $news->where("id=$id and language=$language")->save($data);
		return $i;
	}
	/**
	 * 删除新闻
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function del($id){
        $news=M('news');
        $s=$news->where("id=$id")->delete();
        return $s;

    }
}