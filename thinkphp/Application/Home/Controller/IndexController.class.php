<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->display();
    }
    public function kuaijifuwuchanpin(){
    	$this->display();
    }
    public function kuaijigongsijieshao(){
    	$kuaiji=D("kuaiji");
    	$data=$kuaiji->select();
    	$this->assign('list',$data);
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