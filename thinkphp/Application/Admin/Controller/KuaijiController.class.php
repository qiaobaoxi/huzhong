<?php
namespace Admin\Controller;
use Think\Controller;
class KuaijiController extends commonController{
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
    	$Kuaijifuwuchanpin=D("kuaijifuwuchanpin");
	    	 if(IS_POST){
	    	 	$data["ID"]=1;
		    	if(I("article1")==""&&I("article2")==""){
		    	     $this->error("文章内容不能全部为空");   
		    	}else{
		    	    if(I("article1")&&I("article2")){
		    	    	$data["article1"]=I("article1");
	    	            $data["article2"]=I("article2");
	    	            $Kuaijifuwuchanpin->save($data);
					    $this->success("文章修改成功",U("kuaijifuwuchanpin"));
		    	    }else if(I("article1")&&I("article2")==""){
		    	    	$data["article1"]=I("article1");
	    	            $Kuaijifuwuchanpin->save($data);
					    $this->success("文章1修改成功",U("kuaijifuwuchanpin"));
		    	    }else{
		    	    	$data["article2"]=I("article2");
	    	            $Kuaijifuwuchanpin->save($data);
					    $this->success("文章2修改成功",U("kuaijifuwuchanpin"));
		    	    }
		    	}
	    	}else{
	    		 $this->display();
	    	}
    }
     public function kuaijizhengfuruwei(){
    	$Kuaijizhengfuruwei=D("kuaijizhengfuruwei");
	    	 if(IS_POST){
	    	 	$data["ID"]=1;
		    	if(I("article1")==""&&I("article2")==""){
		    	     $this->error("文章内容不能全部为空");   
		    	}else{
		    	    if(I("article1")&&I("article2")){
		    	    	$data["article1"]=I("article1");
	    	            $data["article2"]=I("article2");
	    	            $Kuaijizhengfuruwei->save($data);
					    $this->success("文章修改成功",U("kuaijizhengfuruwei"));
		    	    }else if(I("article1")&&I("article2")==""){
		    	    	$data["article1"]=I("article1");
	    	            $Kuaijizhengfuruwei->save($data);
					    $this->success("文章1修改成功",U("kuaijizhengfuruwei"));
		    	    }else{
		    	    	$data["article2"]=I("article2");
	    	            $Kuaijizhengfuruwei->save($data);
					    $this->success("文章2修改成功",U("kuaijizhengfuruwei"));
		    	    }
		    	}
	    	}else{
	    		 $this->display();
	    	}
    }
    public function kuaijifuwutese(){
    	$Kuaijifuwutese=D("kuaijifuwutese");
	    	 if(IS_POST){
	    	 	$data["ID"]=1;
		    	if(I("article")==""){
		    	     $this->error("文章内容不能全部为空");   
		    	}else{
		    	    $data["article"]=I("article");
	    	         $Kuaijifuwutese->save($data);
					 $this->success("文章修改成功",U("kuaijifuwutese"));
		    	}
	    	}else{
	    		 $this->display();
	    	}
    }
    public function kuaijixiangmujieshao(){
    	  $kuaijixiangmujieshao=D("kuaijixiangmujieshao");
	    	 if(IS_POST){
	    	 	$data["ID"]=1;
	    	    $data["article"]=I("article");
		    	if($kuaijixiangmujieshao->create($data)){
		    		$upload = new \Think\Upload();// 实例化上传类
					$upload->maxSize   =     3145728 ;// 设置附件上传大小
					$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
					$upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
					$upload->savePath  =      ''; // 设置附件上传（子）目录
					// 上传文件 
					$info   =   $upload->upload();
					if(!$info) {// 上传错误提示错误信息
					    $kuaijixiangmujieshao->save($data);
					    $this->success("文章修改成功",U("kuaijixiangmujieshao"));
					}else{// 上传成功 获取上传文件信息
					    foreach($info as $file){
					        $data["img"]=$file['savepath'].$file['savename'];
					    }
					    $this->success("内容修改成功",U("kuaijixiangmujieshao"));
					}
		    	}else{
		    	    $this->error($kuaijixiangmujieshao->getError());
		    	 }
	    	}else{
	    		 $this->display();
	    	}
    }
    public function kuaijidianxinganli(){
    	$Kuaijidianxinganli=D("kuaijidianxinganli");
     	 if(IS_POST){
     	 	$data["leftContent"]=I("leftContent");
     	    $data["rightContent"]=I("rightContent");
     	    if($Kuaijidianxinganli->create($data)){
     	    	$Kuaijidianxinganli->add($data);
     	    	$this->success("内容添加成功",U("kuaijidianxinganli"));
     	    }else{
     	    	$this->error($Kuaijidianxinganli->getError());
     	    }
     	    
     	 }else{
			$count=$Kuaijidianxinganli->count();// 查询满足要求的总记录数
			$Page= new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show= $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $Kuaijidianxinganli->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this->display(); // 输出模板
    	}
    }
    public function kuaijidianxinganliEdit(){
    	$Kuaijidianxinganli=D("kuaijidianxinganli");
     	 if(IS_POST){
     	 	$data["ID"]=I("id");
     	 	$data["leftContent"]=I("leftContent");
     	    $data["rightContent"]=I("rightContent");
     	    if($Kuaijidianxinganli->create($data)){
     	    	$Kuaijidianxinganli->save($data);
     	    	$this->success("内容修改成功",U("kuaijidianxinganli"));
     	    }else{
     	    	$this->error($Kuaijidianxinganli->getError());
     	    }
     	 }else{
     	 	if($_GET["id"]){
     	 		$list=$Kuaijidianxinganli->where("id=".$_GET["id"])->select();
	     	   	$this->assign("list",$list);
	    	    $this->display();
     	 	}else{
	    	    $this->error("没有正常进入",U("login"));
     	 	}
    	}
    }
    public function kuaijidianxinganliAdd(){
    	$Kuaijidianxinganli=D("kuaijidianxinganli");
     	 if(IS_POST){
     	 	$data["leftContent"]=I("leftContent");
     	    $data["rightContent"]=I("rightContent");
     	    if($Kuaijidianxinganli->create($data)){
     	    	$Kuaijidianxinganli->add($data);
     	    	$this->success("内容添加成功",U("kuaijidianxinganli"));
     	    }else{
     	    	$this->error($Kuaijidianxinganli->getError());
     	    }
     	 }else{
    	    $this->display();
    	}
    }
     public function kuaijidianxinganliDel(){
    	$Kuaijidianxinganli=D("kuaijidianxinganli");
     	if($_GET["id"]){
     		$Kuaijidianxinganli->where("id=".$_GET["id"])->delete();
     	    $this->success("删除内容成功",U("kuaijidianxinganli"));
     	}else{
     		$this->error("删除内容失败",U("kuaijidianxinganli"));
     	}
    }
    public function zaojiadianxinganli(){
    	$Zaojiadianxinganli=D("zaojiadianxinganli");
     	 if(IS_POST){
     	 	$data["leftContent"]=I("leftContent");
     	    $data["rightContent"]=I("rightContent");
     	    if($Zaojiadianxinganli->create($data)){
     	    	$Zaojiadianxinganli->add($data);
     	    	$this->success("内容添加成功",U("zaojiadianxinganli"));
     	    }else{
     	    	$this->error($Zaojiadianxinganli->getError());
     	    }
     	    
     	 }else{
			$count=$Zaojiadianxinganli->count();// 查询满足要求的总记录数
			$Page= new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show= $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $Zaojiadianxinganli->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this->display(); // 输出模板
    	}
    }
    public function zaojiadianxinganliEdit(){
    	$Zaojiadianxinganli=D("zaojiadianxinganli");
     	 if(IS_POST){
     	 	$data["ID"]=I("id");
     	 	$data["leftContent"]=I("leftContent");
     	    $data["rightContent"]=I("rightContent");
     	    if($Zaojiadianxinganli->create($data)){
     	    	$Zaojiadianxinganli->save($data);
     	    	$this->success("内容修改成功",U("zaojiadianxinganli"));
     	    }else{
     	    	$this->error($Zaojiadianxinganli->getError());
     	    }
     	 }else{
     	 	if($_GET["id"]){
     	 		$list=$Zaojiadianxinganli->where("id=".$_GET["id"])->select();
	     	   	$this->assign("list",$list);
	    	    $this->display();
     	 	}else{
	    	    $this->error("没有正常进入",U("login"));
     	 	}
    	}
    }
    public function zaojiadianxinganliAdd(){
    	$Zaojiadianxinganli=D("zaojiadianxinganli");
     	 if(IS_POST){
     	 	$data["leftContent"]=I("leftContent");
     	    $data["rightContent"]=I("rightContent");
     	    if($Zaojiadianxinganli->create($data)){
     	    	$Zaojiadianxinganli->add($data);
     	    	$this->success("内容添加成功",U("zaojiadianxinganli"));
     	    }else{
     	    	$this->error($Zaojiadianxinganli->getError());
     	    }
     	 }else{
    	    $this->display();
    	}
    }
     public function zaojiadianxinganliDel(){
    	$Zaojiadianxinganli=D("zaojiadianxinganli");
     	if($_GET["id"]){
     		$Zaojiadianxinganli->where("id=".$_GET["id"])->delete();
     	    $this->success("删除内容成功",U("zaojiadianxinganli"));
     	}else{
     		$this->error("删除内容失败",U("zaojiadianxinganli"));
     	}
    }
    public function kuaijilianxiwomen(){
    	$this->display();
    }
    public function shuiwugongsijieshao(){
    	    $Shuiwu=D("shuiwu");
    	 if(IS_POST){
    	 	$data["ID"]=1;
    	    $data["article"]=I("article");
	    	if($Shuiwu->create($data)){
	    		$upload = new \Think\Upload();// 实例化上传类
				$upload->maxSize   =     3145728 ;// 设置附件上传大小
				$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
				$upload->savePath  =      ''; // 设置附件上传（子）目录
				// 上传文件 
				$info   =   $upload->upload();
				if(!$info) {// 上传错误提示错误信息
				    $Shuiwu->save($data);
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
	    	    $this->error($Shuiwu->getError());
	    	 }
    	}else{
    		 $this->display();
    	}
    }
    public function shuiwuxiangmujieshao(){
    	    $Shuiwuxiangmujieshao=D("shuiwuxiangmujieshao");
    	 if(IS_POST){
    	 	$data["ID"]=1;
    	    $data["article"]=I("article");
	    	if($Shuiwuxiangmujieshao->create($data)){
	    		$upload = new \Think\Upload();// 实例化上传类
				$upload->maxSize   =     3145728 ;// 设置附件上传大小
				$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
				$upload->savePath  =      ''; // 设置附件上传（子）目录
				// 上传文件 
				$info   =   $upload->upload();
				if(!$info) {// 上传错误提示错误信息
				    $Shuiwuxiangmujieshao->save($data);
				    $this->success("文章修改成功",U("shuiwuxiangmujieshao"));
				}else{// 上传成功 获取上传文件信息
					$num=1;
				    foreach($info as $file){
				        $data["img".$num]=$file['savepath'].$file['savename'];
				        $num++;
				    }
				    $this->success("内容修改成功",U("shuiwuxiangmujieshao"));
				}
	    	}else{
	    	    $this->error($Shuiwuxiangmujieshao->getError());
	    	 }
    	}else{
    		 $this->display();
    	}
    }
    public function zaojiadianxinganli1(){
    	$this->display();
    }
    public function zaojiadianxinganli2(){
    	$this->display();
    }
      public function zaojiafuwuchanpin(){
    	$Zaojiafuwuchanpin=D("zaojiafuwuchanpin");
	    	 if(IS_POST){
	    	 	$data["ID"]=1;
		    	if(I("article1")==""&&I("article2")==""&&I("article3")==""&&I("article4")==""){
		    	     $this->error("文章内容不能全部为空");   
		    	}else{
	    	            if(I("article1")){
	    	            	$data["article1"]=I("article1");
	    	            }
	    	            if(I("article2")){
	    	            	 $data["article2"]=I("article2");
	    	            }
	    	            if(I("article3")){
	    	            	$data["article3"]=I("article3");
	    	            }
	    	            if(I("article4")){
	    	            	$data["article4"]=I("article4");
	    	            }
	    	            $Zaojiafuwuchanpin->save($data);
					    $this->success("文章修改成功",U("zaojiafuwuchanpin"));
		    	}
	    	}else{
	    		 $this->display();
	    	}
    }
    public function zaojiagongsijieshao(){
    	    $Zaojia=D("zaojia");
	    	 if(IS_POST){
	    	 	$data["ID"]=1;
	    	    $data["article"]=I("article");
		    	if($Zaojia->create($data)){
		    		$upload = new \Think\Upload();// 实例化上传类
					$upload->maxSize   =     3145728 ;// 设置附件上传大小
					$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
					$upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
					$upload->savePath  =      ''; // 设置附件上传（子）目录
					// 上传文件 
					$info   =   $upload->upload();
					if(!$info) {// 上传错误提示错误信息
					    $Zaojia->save($data);
					    $this->success("文章修改成功",U("zaojiagongsijieshao"));
					}else{// 上传成功 获取上传文件信息
						$num=1;
					    foreach($info as $file){
					        $data["img".$num]=$file['savepath'].$file['savename'];
					        $num++;
					    }
					    $this->success("内容修改成功",U("zaojiagongsijieshao"));
					}
		    	}else{
		    	    $this->error($Zaojia->getError());
		    	 }
	    	}else{
	    		 $this->display();
	    	}
    }
     public function zixundianxinganli(){
    	$Zixundianxinganli=D("zixundianxinganli");
     	 if(IS_POST){
     	 	$data["leftContent"]=I("leftContent");
     	    $data["rightContent"]=I("rightContent");
     	    if($Zixundianxinganli->create($data)){
     	    	$Zixundianxinganli->add($data);
     	    	$this->success("内容添加成功",U("zixundianxinganli"));
     	    }else{
     	    	$this->error($Zixundianxinganli->getError());
     	    }
     	    
     	 }else{
			$count=$Zixundianxinganli->count();// 查询满足要求的总记录数
			$Page= new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show= $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $Zixundianxinganli->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this->display(); // 输出模板
    	}
    }
    public function zixundianxinganliEdit(){
    	$Zixundianxinganli=D("zixundianxinganli");
     	 if(IS_POST){
     	 	$data["ID"]=I("id");
     	 	$data["leftContent"]=I("leftContent");
     	    $data["rightContent"]=I("rightContent");
     	    if($Zixundianxinganli->create($data)){
     	    	$Zixundianxinganli->save($data);
     	    	$this->success("内容修改成功",U("kuaijidianxinganli"));
     	    }else{
     	    	$this->error($Zixundianxinganli->getError());
     	    }
     	 }else{
     	 	if($_GET["id"]){
     	 		$list=$Zixundianxinganli->where("id=".$_GET["id"])->select();
	     	   	$this->assign("list",$list);
	    	    $this->display();
     	 	}else{
	    	    $this->error("没有正常进入",U("login"));
     	 	}
    	}
    }
    public function zixundianxinganliAdd(){
    	$Zixundianxinganli=D("zixundianxinganli");
     	 if(IS_POST){
     	 	$data["leftContent"]=I("leftContent");
     	    $data["rightContent"]=I("rightContent");
     	    if($Zixundianxinganli->create($data)){
     	    	$Zixundianxinganli->add($data);
     	    	$this->success("内容添加成功",U("kuaijidianxinganli"));
     	    }else{
     	    	$this->error($Zixundianxinganli->getError());
     	    }
     	 }else{
    	    $this->display();
    	}
    }
     public function zixundianxinganliDel(){
    	$Zixundianxinganli=D("zixundianxinganli");
     	if($_GET["id"]){
     		$Zixundianxinganli->where("id=".$_GET["id"])->delete();
     	    $this->success("删除内容成功",U("zixundianxinganli"));
     	}else{
     		$this->error("删除内容失败",U("zixundianxinganli"));
     	}
    }
    public function zixunfuwuchanpin(){
    	$Zixunfuwuchanpin=D("zixunfuwuchanpin");
	    	 if(IS_POST){
	    	 	$data["ID"]=1;
		    	if(I("article1")==""&&I("article2")==""){
		    	     $this->error("文章内容不能全部为空");   
		    	}else{
		    	    if(I("article1")&&I("article2")){
		    	    	$data["article1"]=I("article1");
	    	            $data["article2"]=I("article2");
	    	            $Zixunfuwuchanpin->save($data);
					    $this->success("文章修改成功",U("kuaijizhengfuruwei"));
		    	    }else if(I("article1")&&I("article2")==""){
		    	    	$data["article1"]=I("article1");
	    	            $Zixunfuwuchanpin->save($data);
					    $this->success("文章1修改成功",U("kuaijizhengfuruwei"));
		    	    }else{
		    	    	$data["article2"]=I("article2");
	    	            $Zixunfuwuchanpin->save($data);
					    $this->success("文章2修改成功",U("kuaijizhengfuruwei"));
		    	    }
		    	}
	    	}else{
	    		 $this->display();
	    	}
    }
     public function zixungongsijieshao(){
    	 $Zixun=D("zixun");
    	 if(IS_POST){
    	 	$data["ID"]=1;
    	    $data["article"]=I("article");
	    	if($Zixun->create($data)){
	    		$upload = new \Think\Upload();// 实例化上传类
				$upload->maxSize   =     3145728 ;// 设置附件上传大小
				$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
				$upload->savePath  =      ''; // 设置附件上传（子）目录
				// 上传文件 
				$info   =   $upload->upload();
				if(!$info) {// 上传错误提示错误信息
				    $Zixun->save($data);
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
	    	    $this->error($Zixun->getError());
	    	 }
    	}else{
    		 $this->display();
    	}
    }
    public function zixunzuzhijiegou(){
    	$this->display();
    }
    public function loginOut(){
    	session(null);
    	$this->success("退出成功,跳转页面中",U("Login/index"));
    }


}