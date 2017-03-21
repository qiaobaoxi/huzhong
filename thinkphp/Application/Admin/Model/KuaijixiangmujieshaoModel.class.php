<?php
namespace Admin\Model;
use Think\Model;
class KuaijixiangmujieshaoModel extends Model {
          protected $_validate = array(
		     array('article1','require','文章内容不能为空！',1,"regex",3), //默认情况下用正则进行验证
		   );

}