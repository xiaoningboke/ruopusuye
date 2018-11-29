<?php
namespace Home\Controller;
use Think\Controller;

use Home\Model\ContentModel;
use Home\Model\FileModel;
use Home\Model\PartnerModel;

class IndexController extends Controller {
    public function index(){
		$this->display();
    }

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
}