<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model {
          protected $_validate = array(
				     array('username','require','用户名不能为空！',1,"regex",3), //默认情况下用正则进行验证
				     array('password','require','密码不能为空！',1,"regex",1), 
				   );
		   public function login(){
		   	$password=$this->password;
		   	$username=$this->username;
		   	$info=$this->where(array("username"=>$username))->find();
		   	    if($info){
		   	    	if($info["password"]==md5($password)){
		   	    		session("id",$info["id"]);
		   	    		session("username",$info["username"]);
		   	    		return true;
		   	    	}else{
		   	    		return false;
		   	    	}
		   	    }else{
		   	    	return false;
		   	    }
		   	
		   	
		   }

}