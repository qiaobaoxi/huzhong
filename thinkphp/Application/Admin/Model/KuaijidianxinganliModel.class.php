<?php
namespace Admin\Model;
use Think\Model;
class KuaijidianxinganliModel extends Model {
          protected $_validate = array(
		       array('leftContent','require','案例内容不能为空！',1,"regex",3), //默认情况下用正则进行验证
		       array('rightContent','require','审核内容不能为空！',1,"regex",3), //默认情况下用正则进行验证
		   );

}