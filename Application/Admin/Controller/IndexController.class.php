<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\InformationModel;
use Admin\Model\ContentModel;
use Admin\Model\FileModel;
use Admin\Model\PartnerModel;
use Admin\Model\FenleiModel;
use Admin\Model\NewsModel;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    /**
     * 基本配置控制器
     * @return [type] [description]
     */
    public function chInformation(){
        $language = $_GET['language'];
    	$Information = new InformationModel();
    	$data = $Information->findInformation($language);
        $data['language']=$language;
    	$this->assign('data',$data);
    	$this->display();
    }
    /**
     * 修改公司的信息
     * @return [type] [description]
     */
    public function exitInformation(){
        $language = $_POST['language'];
    	$Information = new InformationModel();
    	$i = $Information->exitInformation($_POST,$language);
    	if($i>0){
    		$this->success("更新成功");
    	}else{
    		$this->error("更新失败");
    	}
    }
    /**
     * 修改公司简介
     * @return [type] [description]
     */
    public function about(){
        $language = $_GET['language'];
        $data['language'] = $language;
        if($language == 0){
            $data = $this->findContent(1);
        }else if($language == 1){
            $data = $this->findContent(2);
        }
        $this->assign('data',$data);
    	$this->display();
    }

    /**
     * 查询Content
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function findContent($id){
        $Content = new ContentModel();
        $data = $Content->findContent($id);
        return $data;
    }

   /**
    * 修改content
    * @return [type] [description]
    */
    public function exitContent(){
        $id = $_POST['id'];
        $data['title'] = $_POST['title'];
        $img = $this->upload();
        if($img != "error"){
            $data['imgUrl'] = $img;
        }
        $data['content'] = $_POST['content'];
        $Content = new ContentModel();
        $i = $Content->exitContent($id,$data);
        if($i>0){
            $this->success("更新成功");
        }else{
            $this->error("更新失败");
        }
    }

    /**
     * 显示先进技术
     */
    public function Technology(){
        $language = $_GET['language'];
        if($language == 0){
            $coid = 3;
            $fiid = 1;
        }else if ($language == 1) {
            $coid = 4;
            $fiid = 2;
        }
        $Content = new ContentModel();
        $conData = $Content->findContent($coid);
        $File = new FileModel();
        $fileData = $File->findFileByState($fiid);
        $this->assign('language',$language);
        $this->assign('conData',$conData);
        $this->assign('fileData',$fileData);
        $this->display();
    }

    public function exitTechnology(){
        $id = $_POST[id];
        $data = $_POST;
        $Content = new ContentModel();
        $i = $Content->exitContent($id,$data);
         if($i>0){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    /**
     * 显示资质认证
     * @return [type] [description]
     */
    public function qualifications(){
        $File = new FileModel();
        $data = $File->findFileByState(3);
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 添加资质认证
     * @return [type] [description]
     */
    public function addqualifications(){
        $urlImg = $this->upload();
        $File = new FileModel();
        if($urlImg !='error'){
            $data['urlImg'] = $urlImg;
            $data['name'] = "资质认证";
            $data['state'] = "3";
            $i = $File->addFile($data);
            if($i>0){
            $this->success("添加成功");
            }else{
                $this->error("添加失败");
            }
        }
    }
    //显示合作伙伴页面
    public function partner(){
        $Partner = new PartnerModel();
        $data = $Partner->selPartner();
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 添加合作伙伴
     * @return [type] [description]
     */
    public function addpartner(){
        $imgurl = $this->upload();
        if($imgurl!='error'){
            $data = $_POST;
            $data['imgurl'] =$imgurl;
            $Partner = new PartnerModel();
            $i = $Partner->addPartner($data);
            if($i>0){
            $this->success("添加成功");
            }else{
                $this->error("添加失败");
            }
        }else{
                $this->error("添加失败");
        }
    }
    /**
     * 显示修改图片
     * @return [type] [description]
     */
    public function exitImg(){
        $id = $_GET['id'];
        $File = new FileModel();
        $fileData = $File->findFile($id);
        $this->assign('fileData',$fileData);
        $this->display();

    }
    public function exitpartner(){
        $id = $_GET['id'];
        $Partner = new PartnerModel();
        $data = $Partner->findById($id);
        $this->assign('data',$data);
        $this->display();
    }
    /**
     * 根据id修改合作伙伴
     * @return [type] [description]
     */
    public function exitByIdpartner(){
        $data = $_POST;
        $imgurl = $this->upload();
        if($imgurl!='error'){
            $data['imgurl'] = $imgurl;
        }
        $Partner = new PartnerModel();
        $i = $Partner->exitById($data);
         if($i>0){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }

    public function delpartner(){
        $id = $_GET['id'];
        $Partner = new PartnerModel();
        $i = $Partner->delpartner($id);
        if($i>0){
            $this->success("删除成功");
        }else{
            $this->error("删除失败");
        }
    }
    /**
     * 显示产品分类
     * @return [type] [description]
     */
    public function fenlei(){
        $Fenlei = new FenleiModel();
        $data = $Fenlei->selFenlei();
        $this->assign('data',$data);
        $this->display();
    }

    /**
     * 添加分类
     * @return [type] [description]
     */
    public function addfenlei(){
        $data = $_POST;
        $Fenlei = new FenleiModel();
        $i = $Fenlei->addfenlei($data);
        if($i>0){
            $this->success("添加成功");
        }else{
            $this->error("添加失败");
        }
    }
    /**
     * 显示修改界面
     * @return [type] [description]
     */
    public function exitfenlei(){
        $id = $_GET['id'];
        $Fenlei = new FenleiModel();
        $data = $Fenlei->findById($id);
        $this->assign('data',$data);
        $this->display();
    }
    /**
     * 接受修改信息
     * @return [type] [description]
     */
    public function exitByIdfenlei(){
        $data = $_POST;
        $Fenlei = new FenleiModel();
        $i = $Fenlei->exitfenlei($data);
        if($i>0){
            $this->success("修改成功",U('Admin/Index/fenlei'));
        }else{
            $this->error("修改失败",U('Admin/Index/fenlei'));
        }
    }

    /**
     * 根据id删除产品分类
     * @return [type] [description]
     */
    public function delfenlei(){
        $id = $_GET['id'];
        $Fenlei = new FenleiModel();
        $i = $Fenlei->delfenlei($id);
        if($i>0){
            $this->success("删除成功");
        }else{
            $this->error("删除失败");
        }
    }
    /**
     * 接受修改图片成功信息
     * @return [type] [description]
     */
    public function exitByIdImg(){
        $urlImg = $this->upload();
        if($urlImg == 'error'){
            $this->error("修改失败");
        }
        $data['id'] = $_POST['id'];
        $data['urlImg'] = $urlImg;
        $File = new FileModel();
        $i = $File->exitFile($data);
        if($i>0){
            $this->success("修改成功");
        }else{
            $this->error("修改失败");
        }
    }
    /**
     * 删除图片信息
     * @return [type] [description]
     */
    public function delImg(){
        $id = $_GET['id'];
        $File = new FileModel();
        $i = $File->delFile($id);
        if($i>0){
            $this->success("删除成功");
        }else{
            $this->error("删除失败");
        }
    }
    /**
     * 新闻发布
     * @return [type] [description]
     */
    public function exitNews(){
        $data['language'] = $_POST['language'];
        $data['title'] = $_POST['name'];
        $data['time']=strtotime($_POST[time]);
        $data['picture'] = $this->upload();
        $data['state'] = $_POST['state'];
        $data['classification'] = $_POST['classification'];
        $data['abstracts'] = $_POST['abstracts'];
        $data['content'] = $_POST['content'];
        $Content = new NewsModel();
        $i = $Content->exitNews($data);
        if($i>0){
            $this->success("成功");
        }else{
            $this->error("失败");
        }
    }
    /**
     * 新闻列表
     * @return [type] [description]
     */
    public function newslist(){
        $news = new NewsModel();
        if($_GET['p']==NULL){
        $p=1;
    }else{
        $p=$_GET['p'];
    }
        $keys=$_POST['keywords'];
        $language=$_GET['language'];
        //var_dump($language);exit;
        $data=$news->findNewslist($p,$keys,$language);
        $this->assign('data',$data);
        $count = $news->countNews($keys,$language);
        $Page = new \Think\Page($count,9);
        $show = $Page->show();
        $this->assign('page',$show);
        $this->display();
    }
    /**
     * 显示要修改的新闻内容
     * @return [type] [description]
     */
     public function newslistmod(){
      $id = $_GET["id"];
      $news = new NewsModel();
      $data = $news->findNews($id);
      $this->assign('data',$data);
      $this->display();
    }
    /**
     * 修改新闻内容
     * @return [type] [description]
     */
    public function exitNewslist(){
        $id = $_POST["id"];
        $language = $_POST['language'];
        $data['title'] = $_POST['name'];
        $data['time']=strtotime($_POST[time]);
        $data['picture'] = $this->upload();
        $data['state'] = $_POST['state'];
        $data['classification'] = $_POST['classification'];
        $data['abstracts'] = $_POST['abstracts'];
        $data['content'] = $_POST['content'];
        $data['language'] = $language;
        $news = new NewsModel();
        $i = $news->exitNewslist($id,$data,$language);
        if($i>0){
            $this->success("更新成功");
        }else{
            $this->error("更新失败");
        }
    }
    /**
     * 删除新闻
     * @return [type] [description]
     */
    public function dell(){
          $id= $_GET["id"];
          $news=new NewsModel();
       if($news->delete($id)){
          $s= $news->del($id);
          $this->success('删除成功！',U('Admin/index/newslist'));
      }else{
          $this->error('删除失败！',U('Admin/index/newslist'));
      }
        }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//文件上传操作
	public function upload(){
	    $upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728 ;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg', 'doc' ,'docx', 'xlsx');// 设置附件上传类型
	    $upload->rootPath  =     './Public/Uploads/'; // 设置附件上传根目录
	    $upload->savePath  =     ''; // 设置附件上传（子）目录
	    // 上传文件  $oldFN
	    $info   =   $upload->upload();
	    if(!$info) {// 上传错误提示错误信息
	        return "error";
	    }else{// 上传成功
	    	foreach($info as $file){
		        return $file['savepath'].$file['savename'];
		    }
	    }
	}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//富文本编辑器
	public function save_info(){  
   $ueditor_config = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "",     file_get_contents("./Public/Ueditor/php/config.json")), true);  
        $action = $_GET['action'];  
        switch ($action) {  
            case 'config':  
                $result = json_encode($ueditor_config);  
                break;  
                /* 上传图片 */  
            case 'uploadimage':  
                /* 上传涂鸦 */  
            case 'uploadscrawl':  
                /* 上传视频 */  
            case 'uploadvideo':  
                /* 上传文件 */  
            case 'uploadfile':  
                $upload = new \Think\Upload();  
                $upload->maxSize = 3145728;  
                $upload->rootPath = './Public/Uploads/';  
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');  
                $info = $upload->upload();  
                if (!$info) {  
                    $result = json_encode(array(  
                            'state' => $upload->getError(),  
                    ));  
                } else {  
                    $url = __ROOT__ . "/Public/Uploads/" . $info["upfile"]["savepath"] . $info["upfile"]['savename'];  
                    $result = json_encode(array(  
                            'url' => $url,  
                            'title' => htmlspecialchars($_POST['pictitle'], ENT_QUOTES),  
                            'original' => $info["upfile"]['name'],  
                            'state' => 'SUCCESS'  
                    ));  
                }  
                break;  
            default:  
                $result = json_encode(array(  
                'state' => '请求地址出错'  
                        ));  
                        break;  
        }  
        /* 输出结果 */  
        if (isset($_GET["callback"])) {  
            if (preg_match("/^[\w_]+$/", $_GET["callback"])) {  
                echo htmlspecialchars($_GET["callback"]) . '(' . $result . ')';  
            } else {  
                echo json_encode(array(  
                        'state' => 'callback参数不合法'  
                ));  
            }  
        } else {  
            echo $result;  
        }  
    } 
}