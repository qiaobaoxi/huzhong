<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index(){
		$Admin=D("admin");
		if(IS_POST){
			if($Admin->create($_POST)){
			   if($Admin->login()){
			   	  $this->success("登陆成功，跳转中...",U("Kuaiji/index"));
			   }else{
			   	 $this->error("你的用户名或者密码错误");
			   }
			}else{
				$this->error($Admin->getError());
			}
			return;  
		}
    	$this->display();
    }


}