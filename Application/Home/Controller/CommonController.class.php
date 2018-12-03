<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\InformationModel;
use Home\Model\FileModel;

class CommonController extends Controller{
	public function _initialize(){
        $Information = new InformationModel();
        $File = new FileModel();
        $cnfileData = $File->selBystate(4);
        $enfileData = $File->selBystate(5);
        $cninfo = $Information->findByid(1);
        $eninfo = $Information->findByid(2);
        $this->assign('cninfo',$cninfo);
        $this->assign('eninfo',$eninfo);
        $this->assign('cnfileData',$cnfileData);
        $this->assign('enfileData',$enfileData);
   }
}