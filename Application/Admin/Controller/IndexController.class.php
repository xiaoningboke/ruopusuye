<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\InformationModel;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    /**
     * 基本配置控制器
     * @return [type] [description]
     */
    public function information(){
    	$Information = new InformationModel();
    	$data = $Information->findInformation();
    	$this->assign('data',$data);
    	$this->display();
    }
    /**
     * 修改公司的信息
     * @return [type] [description]
     */
    public function exitInformation(){
    	$Information = new InformationModel();
    	$i = $Information->exitInformation($_POST);
    	if($i>0){
    		$this->success("更新成功");
    	}else{
    		$this->error("更新失败");
    	}
    }
    public function about(){
    	$this->display();
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
	        return $upload->getError();
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