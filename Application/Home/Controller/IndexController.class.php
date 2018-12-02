<?php
namespace Home\Controller;
use Think\Controller;

use Home\Model\ContentModel;
use Home\Model\FileModel;
use Home\Model\PartnerModel;
use Home\Model\LiuyanModel;
use Home\Model\ProductModel;
use Home\Model\NewsModel;

class IndexController extends CommonController {
    public function index(){
        $Content = new ContentModel();
        $Product = new ProductModel();
        $productdata = $Product->sel();
        $about = $Content->findByid(1);
        $News = new NewsModel();
        $newsData = $News->indexNews();
        $this->assign('about',$about);
        $this->assign('productdata',$productdata);
        $this->assign('newsData',$newsData);
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
}