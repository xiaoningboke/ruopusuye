<?php
namespace Home\Controller;
use Think\Controller;

use Home\Model\ContentModel;
use Home\Model\FileModel;
use Home\Model\PartnerModel;
use Home\Model\LiuyanModel;
use Home\Model\ProductModel;
use Home\Model\NewsModel;
use Home\Model\FenleiModel;
use Home\Model\VersionModel;


class IndexController extends CommonController {
   public function index(){
        $Content = new ContentModel();
        $Product = new ProductModel();
        $file=new FileModel();
        $productdata = $Product->sel();
        $about = $Content->findByid(1);
        $data=$file->selBystate(6);
        $News = new NewsModel();
        $newsData = $News->indexNews();
        $this->assign('about',$about);
        $this->assign('productdata',$productdata);
        $this->assign('newsData',$newsData);
        $this->assign('data',$data);
        $this->display();
    }


    /**
       * 关于我们
     * @return [type] [description]
     */
    public function about(){
    	$Content = new ContentModel();
    	$File = new FileModel();
    	$Partner = new PartnerModel();
    	$fileDataJishu = $File->selBystate(1);    	
    	$fileDataZizhi = $File->selBystate(3);
    	$data['about'] = $Content->findByid(1);
    	$data['jishu'] = $Content->findByid(3);
    	$partnerData = $Partner->selPartner();
    	$this->assign('data',$data);
    	$this->assign('fileDataJishu',$fileDataJishu);
    	$this->assign('fileDataZizhi',$fileDataZizhi);
    	$this->assign('partnerData',$partnerData);
    	$this->display();
    }

    /**
     * 显示联系我们界面
     * @return [type] [description]
     */
    public function contact(){
    	$this->display();
    }

    /**
     * 添加留言信息
     */
    public function addLiuyan(){
    	$data = $_POST;
    	var_dump($data);
    	$email = $data['email'];
    	$con = '留言人:'.$data['username'].';<br/>留言电话：'.$data['userphone'].';<br/>留言邮箱：'.$data['useremail'].';<br/>留言内容：'.$data['usertext'];
    	$Liuyan = new LiuyanModel();
    	$i = $Liuyan->addLiuyan($data);
    	if($i>0){
    		SendMail($email,"若普塑业",$con);
    		var_dump($data);
    		$this->success('留言成功');
    	}else{
    		$this->error('留言失败，请直接拨打联系电话');
    	}
    }
    /**
     * 新闻列表显示
     * @return [type] [description]
     */
    public function news(){
        $news=new NewsModel();
        if($_GET['p']==NULL){
        $p=1;
    }else{
        $p=$_GET['p'];
    }
        $data=$news->findNewslist($p);
        $this->assign('data',$data);
        $count = $news->countNews();
        $Page = new \Think\Page($count,5);
        $show = $Page->show();
        $this->assign('page',$show);
        $this->display();
    }
    /**
     * 行业新闻显示
     * @return [type] [description]
     */
    public function industryNews(){
        $news=new NewsModel();
        if($_GET['p']==NULL){
        $p=1;
    }else{
        $p=$_GET['p'];
    }
        $data=$news->findindustryNewslist($p);
        $this->assign('data',$data);
        $count = $news->countindustryNews();
        $Page = new \Think\Page($count,8);
        $show = $Page->show();
        $this->assign('page',$show);
        $this->display();
    }
    /**
     * 公司动态显示
     * @return [type] [description]
     */
    public function companyNews(){
        $news=new NewsModel();
        if($_GET['p']==NULL){
        $p=1;
    }else{
        $p=$_GET['p'];
    }
        $data=$news->findcompanyNewslist($p);
        $this->assign('data',$data);
        $count = $news->countcompanyNews();
        $Page = new \Think\Page($count,8);
        $show = $Page->show();
        $this->assign('page',$show);
        $this->display();
    }
    /**
     * 根据Id查找新闻
     * @return [type] [description]
     */
    public function newspage(){
      $id = $_GET["id"];
      $news = new NewsModel();
      $data = $news->findNews($id);
      $this->assign('data',$data);
      $this->display();
    }
    /**
     * 产品展示页面
     * @return [type] [description]
     */
    public function product(){
        $fen=new FenleiModel();
        $pro=new ProductModel();
        if($_GET['p']==NULL){
        $p=1;
    }else{
        $p=$_GET['p'];
    }
        $keys=$_POST['keywords'];
        $fenlei_id = $_GET["fenlei_id"];
        $data=$fen->findclass();
        $datas=$pro->findProlist($p,$keys,$fenlei_id);
        $this->assign('data',$data);
        $this->assign('datas',$datas);
        $count = $pro->countPro($keys);
        $Page = new \Think\Page($count,9);
        $show = $Page->show();
        $this->assign('page',$show);
        $this->display();
    }
    /**
     * 根据id查看产品详情
     * @return [type] [description]
     */
    public function details(){
        $id = $_GET["id"];
        $pro=new ProductModel();
        $ver=new VersionModel();
        $data=$pro->findDetail($id);
        $price=$ver->findVerprice($id);
        $price = json_encode($price);
        $imgurl=$ver->findVerimg($id);
        $xinghao=$ver->findVerxing($id);
        $this->assign('data',$data);
        $this->assign('price',$price);
        $this->assign('imgurl',$imgurl);
        $this->assign('xinghao',$xinghao);
        $this->display();
    }


}