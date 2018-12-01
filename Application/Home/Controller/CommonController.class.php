<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\InformationModel;

class CommonController extends Controller{
	public function _initialize(){
        $Information = new InformationModel();
        $cninfo = $Information->findByid(1);
        $eninfo = $Information->findByid(2);
        $this->assign('cninfo',$cninfo);
        $this->assign('eninfo',$eninfo);
   }
}