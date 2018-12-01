<?php
namespace Home\Controller;
use Think\Controller;

use Home\Model\ContentModel;
use Home\Model\FileModel;
use Home\Model\PartnerModel;
use Home\Model\LiuyanModel;

class IndexController extends CommonController {
    public function index(){
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

    public function contact(){
    	$this->display();
    }

    public function addLiuyan(){
    	$data = $_POST;
    	$Liuyan = new LiuyanModel();
    	$i = $Liuyan->addLiuyan($data);
    	if($i>0){
    		$this->success('留言成功');
    	}else{
    		$this->error('留言失败，请直接拨打联系电话');
    	}
    }
}