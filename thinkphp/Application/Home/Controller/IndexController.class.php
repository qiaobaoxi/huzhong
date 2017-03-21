<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->display();
    }
    public function kuaijifuwuchanpin(){
    	$kuaijifuwuchanpin=D("kuaijifuwuchanpin");
    	$data=$kuaijifuwuchanpin->select();
    	$this->assign('list',$data);
    	$this->display();
    }
     public function kuaijifuwutese(){
    	$kuaijifuwutese=D("kuaijifuwutese");
    	$data=$kuaijifuwutese->select();
    	$this->assign('list',$data);
    	$this->display();
    }
    public function kuaijizhengfuruwei(){
    	$Kuaijizhengfuruwei=D("kuaijizhengfuruwei");
    	$data=$Kuaijizhengfuruwei->select();
    	$this->assign('list',$data);
    	$this->display();
    }
    public function kuaijigongsijieshao(){
    	$kuaiji=D("kuaiji");
    	$data=$kuaiji->select();
    	$this->assign('list',$data);
    	$this->display();
    }
    public function kuaijixiangmujieshao(){
    	$kuaijixiangmujieshao=D("kuaijixiangmujieshao");
    	$data=$kuaijixiangmujieshao->select();
    	$this->assign('list',$data);
    	$this->display();
    }
    public function kuaijidianxinganli(){
    	$kuaijidianxinganli=D("kuaijidianxinganli");
    	$count=$kuaijidianxinganli->count();// 查询满足要求的总记录数
		$Page= new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show= $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $kuaijidianxinganli->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
    }
    public function kuaijilianxiwomen(){
    	$this->display();
    }
    public function kuaijigongsizizhi(){
    	$this->display();
    }
    public function shuiwugongsijieshao(){
    	$Shuowu=D("shuiwu");
    	$data=$Shuowu->select();
    	$this->assign('list',$data);
    	$this->display();
    }
     public function shuiwuxiangmujieshao(){
    	$shuiwuxiangmujieshao=D("shuiwuxiangmujieshao");
    	$data=$shuiwuxiangmujieshao->select();
    	$this->assign('list',$data);
    	$this->display();
    }
    public function shuiwugongsizizhi(){
    	$this->display();
    }
    public function zaojiadianxinganli(){
    	$zaojiadianxinganli=D("zaojiadianxinganli");
    	$count=$zaojiadianxinganli->count();// 查询满足要求的总记录数
		$Page= new \Think\Page($count,14);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show= $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $zaojiadianxinganli->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
    }
    public function zaojiadianxinganli2(){
    	$this->display();
    }
      public function zaojiafuwuchanpin(){
    	$zaojiafuwuchanpin=D("zaojiafuwuchanpin");
    	$data=$zaojiafuwuchanpin->select();
    	$this->assign('list',$data);
    	$this->display();
    }
     public function zaojiagongsizizhi(){
    	$this->display();
    }
    public function zaojiagongsijieshao(){
    		$zaojia=D("zaojia");
	    	$data=$zaojia->select();
	    	$this->assign('list',$data);
	    	$this->display();
    }
     public function zixundianxinganli(){
    	$zixundianxinganli=D("zixundianxinganli");
    	$count=$zixundianxinganli->count();// 查询满足要求的总记录数
		$Page= new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show= $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $zixundianxinganli->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
    }
    public function zixungongsizizhi(){
    	$this->display();
    }
    public function zixunfuwuchanpin(){
    		$zixunfuwuchanpin=D("zixunfuwuchanpin");
    	$data=$zixunfuwuchanpin->select();
    	$this->assign('list',$data);
    	$this->display();
    }
     public function zixungongsijieshao(){
    		$Zixun=D("zixun");
    	$data=$Zixun->select();
    	$this->assign('list',$data);
    	$this->display();
    }
    public function zixunzuzhijiegou(){
    	$this->display();
    }

}