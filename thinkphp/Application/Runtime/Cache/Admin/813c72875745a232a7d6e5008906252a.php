<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="http://192.168.0.227:80/thinkphp/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="http://192.168.0.227:80/thinkphp/Application/Admin/Public/css/main.css"/>
    <script type="text/javascript" src="http://192.168.0.227:80/thinkphp/Application/Admin/Public/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员<?php echo $_SESSION["username"] ?></a></li>
                <li><a href="#">修改密码</a></li>
                <li><a href="/thinkphp/index.php/Admin/Kuaiji/loginOut">退出</a></li>
            </ul>
        </div>
    </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-content">
             <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#" class="dropDown"><i class="icon-font">&#xe003;</i>会计页面</a>
                    <ul class="sub-menu">
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/index"><i class="icon-font">&#xe008;</i>会计公司介绍</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/kuaijizhengfuruwei"><i class="icon-font">&#xe005;</i>会计政府入围</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/kuaijixiangmujieshao"><i class="icon-font">&#xe006;</i>会计项目介绍</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/kuaijigongsizizhi"><i class="icon-font">&#xe004;</i>会计公司资质</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/kuaijifuwuchanpin"><i class="icon-font">&#xe012;</i>会计服务产品</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/kuaijifuwutese"><i class="icon-font">&#xe052;</i>会计服务特色</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/kuaijidianxinganli"><i class="icon-font">&#xe033;</i>会计典型案例</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/kuaijilianxiwomen"><i class="icon-font">&#xe008;</i>会计联系我们</a></li>
                   </ul>
                </li>
                 <li>
                    <a href="#" class="dropDown"><i class="icon-font">&#xe003;</i>造价页面</a>
                    <ul class="sub-menu">
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/zaojiagongsijieshao"><i class="icon-font">&#xe005;</i>造价公司介绍</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/zaojiagongsizizhi"><i class="icon-font">&#xe006;</i>造价公司资质</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/zaojiafuwuchanpin"><i class="icon-font">&#xe004;</i>造价服务产品</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/zaojiadianxinganli"><i class="icon-font">&#xe012;</i>造价典型案例</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/zaojialianxiwomen"><i class="icon-font">&#xe052;</i>造价联系我们</a></li>
                   </ul>
                </li>
                 <li>
                    <a href="#" class="dropDown"><i class="icon-font">&#xe003;</i>税务页面</a>
                    <ul class="sub-menu">
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/shuiwugongsijieshao"><i class="icon-font">&#xe033;</i>税务公司介绍</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/shuiwuxiangmujieshao"><i class="icon-font">&#xe033;</i>税务项目介绍</a></li>
                   </ul>
                </li>
                 <li>
                    <a href="#" class="dropDown"><i class="icon-font">&#xe003;</i>咨询页面</a>
                    <ul class="sub-menu">
                    	<li><a href="/thinkphp/index.php/Admin/Kuaiji/zixungongsijieshao"><i class="icon-font">&#xe008;</i>咨询公司介绍</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/zixunxiangmujieshao"><i class="icon-font">&#xe008;</i>咨询项目介绍</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/zixungongsizizhi"><i class="icon-font">&#xe005;</i>咨询公司资质</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/zixunfuwuchanpin"><i class="icon-font">&#xe006;</i>咨询服务产品</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/zixundianxinganli"><i class="icon-font">&#xe004;</i>咨询典型案例</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Kuaiji/zixunlianxiwomen"><i class="icon-font">&#xe012;</i>咨询联系我们</a></li>
                   </ul>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
    	var AdropDown=document.getElementsByClassName("dropDown");
    	var AsubMenu=document.getElementsByClassName("sub-menu");
    	for (var i=0;i<AdropDown.length;i++ ) {
    		AdropDown[i].index=i;
    		AdropDown[i].onclick=function(){
    			for (var j=0;j<AsubMenu.length;j++) {
    				AsubMenu[j].style.height=0;
    			}
    			var aLi=AsubMenu[this.index].getElementsByTagName("li");
    			AsubMenu[this.index].style.height=aLi.length*aLi[0].offsetHeight+"px";
    		}
    	}
    </script>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><span>造价典型案例</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/thinkphp/index.php/Admin/Kuaiji/zaojiadianxinganliAdd"><i class="icon-font"></i>新增内容</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>案列列表</th>
                            <th>审核列表</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
	                        	<input type="hidden" name=""  value="$vo.ID" />
	                            <td><?php echo ($vo["id"]); ?></td>
	                            <td><?php echo ($vo["leftcontent"]); ?></td>
	                            <td><?php echo ($vo["rightcontent"]); ?></td>
	                            <td>
	                                <a class="link-update" href="/thinkphp/index.php/Admin/Kuaiji/zaojiadianxinganliEdit?id=<?php echo ($vo["id"]); ?>">修改</a>
	                                <a class="link-del" href="/thinkphp/index.php/Admin/Kuaiji/zaojiadianxinganliDel?id=<?php echo ($vo["id"]); ?>" onclick="return confirm('你确定要删除吗')" >删除</a>
	                            </td>
	                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"> <?php echo ($page); ?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>