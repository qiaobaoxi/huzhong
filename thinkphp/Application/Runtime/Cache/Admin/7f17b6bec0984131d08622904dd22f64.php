<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="http://localhost:80/thinkphp/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost:80/thinkphp/Application/Admin/Public/css/main.css"/>
    <script type="text/javascript" src="http://localhost:80/thinkphp/Application/Admin/Public/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
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
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="/thinkphp/index.php/Admin/Index/index"><i class="icon-font">&#xe008;</i>会计公司介绍</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/kuaijizhengfuruwei"><i class="icon-font">&#xe005;</i>会计政府入围</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/kuaijixiangmujieshao"><i class="icon-font">&#xe006;</i>会计项目介绍</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/kuaijigongsizizhi"><i class="icon-font">&#xe004;</i>会计公司资质</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/kuaijifuwuchanpin"><i class="icon-font">&#xe012;</i>会计服务产品</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/kuaijifuwutese"><i class="icon-font">&#xe052;</i>会计服务特色</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/kuaijidianxinganli"><i class="icon-font">&#xe033;</i>会计典型案例</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/kuaijilianxiwomen"><i class="icon-font">&#xe008;</i>会计联系我们</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/zaojiagongsijieshao"><i class="icon-font">&#xe005;</i>造价公司介绍</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/zaojiagongsizizhi"><i class="icon-font">&#xe006;</i>造价公司资质</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/zaojiafuwuchanpin"><i class="icon-font">&#xe004;</i>造价服务产品</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/zaojiadianxinganli"><i class="icon-font">&#xe012;</i>造价典型案例</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/zaojialianxiwomen"><i class="icon-font">&#xe052;</i>造价联系我们</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/shuiwugongsijieshao"><i class="icon-font">&#xe033;</i>税务公司介绍</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/zixunxiangmujieshao"><i class="icon-font">&#xe008;</i>咨询项目介绍</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/zixungongsizizhi"><i class="icon-font">&#xe005;</i>咨询公司资质</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/zixunfuwuchanpin"><i class="icon-font">&#xe006;</i>咨询服务产品</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/zixundianxinganli"><i class="icon-font">&#xe004;</i>咨询典型案例</a></li>
                        <li><a href="/thinkphp/index.php/Admin/Index/zixunlianxiwomen"><i class="icon-font">&#xe012;</i>咨询联系我们</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><span>咨询典型案例</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/jscss/admin/design/add" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>分类：</th>
                            <td>
                                <select name="colId" id="catid" class="required">
                                    <option value="">请选择</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                        </tr>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>作者：</th>
                                <td><input class="common-text" name="author" size="50" value="admin" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>缩略图：</th>
                                <td><input name="smallimg" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th>内容：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>