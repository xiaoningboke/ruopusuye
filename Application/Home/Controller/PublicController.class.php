<?php
namespace Home\Controller;
use Think\Controller;

class PublicController extends Controller{
    public function _initialize(){
         if (ismobile()) {
            //设置默认默认主题为 Mobile
            C('DEFAULT_V_LAYER','Mobile');
        }
        
        $Information = new InformationModel();
        $InformationData = $Information->selMessage();
        $article = new ArticleModel();
        $photo = new PhotoModel();
        $tuijiannews = $article->tuijian();
        $photodata = $photo->selPhoto();
        $this->assign('photodata',$photodata);
        $this->assign('tuijiannews',$tuijiannews);
        $this->assign('info',$InformationData);
    }	
}