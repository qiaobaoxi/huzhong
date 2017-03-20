<?php
namespace Admin\Controller;
use Think\Controller;
class KuaijiController extends Controller {
	public function login(){
		$Admin=D("admin");
		$Admin->select();
    	$this->display();
    }
    public function index(){
    	    $Kuaiji=D("kuaiji");
    	 if(IS_POST){
    	 	$data["ID"]=1;
    	    $data["article"]=I("article");
	    	if($Kuaiji->create($data)){
	    		$upload = new \Think\Upload();// 实例化上传类
				$upload->maxSize   =     3145728 ;// 设置附件上传大小
				$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
				$upload->savePath  =      ''; // 设置附件上传（子）目录
				// 上传文件 
				$info   =   $upload->upload();
				if(!$info) {// 上传错误提示错误信息
				    $Kuaiji->save($data);
				    $this->success("文章修改成功",U("index"));
				}else{// 上传成功 获取上传文件信息
					$num=1;
				    foreach($info as $file){
				        $data["img".$num]=$file['savepath'].$file['savename'];
				        $num++;
				    }
				    $this->success("内容修改成功",U("index"));
				}
	    	}else{
	    	    $this->error($Kuaiji->getError());
	    	 }
    	}else{
    		 $this->display();
    	}
    	
    }
    public function kuaijifuwuchanpin(){
    	$this->display();
    }
    public function kuaijifuwutese(){
    	$this->display();
    }
    public function kuaijigongsijieshao(){
    	$this->display();
    }
    public function kuaijixiangmujieshao(){
    	$this->display();
    }
    public function kuaijidianxinganli(){
    	$this->display();
    }
    public function kuaijilianxiwomen(){
    	$this->display();
    }
    public function shuiwugongsijieshao(){
    	$this->display();
    }
    public function zaojiadianxinganli1(){
    	$this->display();
    }
    public function zaojiadianxinganli2(){
    	$this->display();
    }
      public function zaojiafuwuchanpin(){
    	$this->display();
    }
    public function zaojiagongsijieshao(){
    	$this->display();
    }
     public function zixundianxinganli(){
    	$this->display();
    }
    public function zixunfuwuchanpin(){
    	$this->display();
    }
     public function zixungongsijieshao(){
    	$this->display();
    }
    public function zixunzuzhijiegou(){
    	$this->display();
    }

}