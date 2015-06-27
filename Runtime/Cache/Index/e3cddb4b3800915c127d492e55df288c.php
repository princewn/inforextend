<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>实验室介绍</title>
<link href="/public/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="/public/infor/newCss/scy2/index.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/Public/infor/newCss/demo/css/demo.css">
<!--<script type="text/javascript" src="/Public/jquery-1.11.0.js"></script>
<script type="text/javascript" src="/Public/bootstrap/js/bootstrap.min.js"></script>-->
<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/jquery-1.11.0.js"></script>
<script  type="text/javascript"> 
 function onit(){
	var N = document.getElementById('s-1');
	N.setAttribute('class','active');
	<!--$('#qwe').children('li:last').prev().removeClass();-->
}
function returnTop(){var N = document.getElementById('s-1');
	N.setAttribute('class','active');$('#qwe').children('li:last').prev().removeClass();
	document.body.scrollTop = 0;
	}
</script>
<style type="text/css">	
	.p,body{font-family:微软雅黑;}
	ul.nav-tabs{
        width: 140px;
        margin-top: 20px;
	}
    ul.nav-tabs li{
        margin: 0;
    }
    ul.nav-tabs li:first-child{
        border: 0px;
    }
    ul.nav-tabs li a{
        margin: 0;
        padding: 8px 16px;
		color:#808080;
       
    }
	
    ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover, ul.nav-tabs li a:hover{
        color: #6B5094;
        background: #FFF;
        border-left: 1px solid #6B5094;
		border-bottom:1px solid #fff;
		border-right:1px solid #fff;
		border-top:1px solid #fff;
		
    }
    ul.nav-tabs li:first-child a{
        
    }
    ul.nav-tabs li:last-child a{
        
    }
    ul.nav-tabs.affix{
        top: 0px; /* Set the top position of pinned element */
    }
	.nav-tabs >li >a{border-radius:0px;}
	.navbar{border:0px;}
	.navbarsty{box-shadow:inset 0 0px 0px #B3B3B3, 0 0 0px #B3B3B3;
	border-bottom:0px;}
	
</style>
</head>


<body data-spy="scroll" data-target="#myScrollspy" onLoad="onit()">
<div id="main">
	<div id="header" >
    <nav class="navbar  navbarsty" role="navigation" style="background-color:#fff;">
      <div class="container" >
      
        <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand brandleft" href="#" target="_block"><img id="logo" src="/Public/infor/images/Index/logo.png" alt=""/></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id = "daohanglanTeam2"><a href="index.html" style="font-size:18px;">&nbsp;&nbsp;首页&nbsp;&nbsp;</a></li>
            <li id = "daohanglanTeam"><a href="__URL__/Index/team.html"style="color:#fff;"><span class="glyphicon glyphicon-globe" ></span>&nbsp;工作室</a></li>
            <li id = "daohanglanTeam2"><a href="__URL__/Index/people.html"><span class="glyphicon glyphicon-user" ></span>&nbsp;团队成员</a></li>
            <li id = "daohanglanTeam2"><a href="__URL__/Index/product.html" ><span class="glyphicon glyphicon-wrench" ></span>&nbsp;产品展示</a></li>
            <li id = "daohanglanTeam2">
            	<a href="__URL__/Index/technology.html"><span class="glyphicon glyphicon-gift" ></span>&nbsp;技术分享</a></li>
          </ul>

         

          <ul class="nav navbar-nav navbar-right">
      
            <li class="dropdown" id = "daohanglanTeam2" >
              <a class="btn dropdown-toggle dropdownsty" data-toggle="dropdown" href="#" style="border:none;border-radius:0px;">
                 语言
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-fire"></span> 中文</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-fire"></span> English</a></li>
              </ul>
            </li>
            <a class="navbar-brand brandright" href="#" target="_block" style="padding:10px;"><img id="logo" src="/Public/infor/images/Index/logo.png"  alt=""/></a>
          </ul>
        </div><!--/.nav-collapse -->
       
      </div>
</nav></div>
<div id="introteam" style="width:100%;">
	<div class="container" style="margin-top:-20px;" >
		<div class="row">
         	<div class="col-xs-12" >
  				<p style="line-height:180px;">实验室介绍</p>
  				<p style="margin-top:-60px;font-size:30px;">这里有高端的设备，新奇的思维，严谨的人员，还有完美的产品。</p>
 		    </div>
        </div>
	</div>
</div>


<!--下面是主要内容部分-->
<div class="container">

<div class="row">

<div class="col-xs-9">
	 <?php if(is_array($data)): foreach($data as $key=>$v): ?><h3 id="section-<?php echo ($v['id']); ?>" style="font-family:微软雅黑;"><?php echo ($v["name"]); ?></h3><br>
           
            <p style="line-height:30px;"><font size="3px" >&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;<?php echo ($v["history"]); ?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<?php echo ($v["now"]); ?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<?php echo ($v["future"]); ?><br></font></p>
                <br><hr><?php endforeach; endif; ?>
</div>
<div class="col-xs-3" id="myScrollspy">
	<ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="295" id="qwe"  style="border:0px;">
		<?php if(is_array($data)): foreach($data as $key=>$v): ?><li id="s-<?php echo ($v['id']); ?>" style="width:230px;"><a href="#section-<?php echo ($v['id']); ?>"  ><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
                <li id = 'ReturnTop' ><a href="javascript:returnTop();" style="font-family:微软雅黑;"  >返回顶部</a></li>
	</ul>
    
</div>
</div>
</div>
<hr/>
<div id="footer" style="color:#707070; font-size:small; line-height:10px;">
<footer class="bs-docs-footer" role="contentinfo">
  <div class="container">
    <p>地址：中国·大连经济技术开发区图强街321号　　大连理工大学软件学院　　邮编：116620</p>
    <p>&copy;版权所有：lab 　版本信息：网站版本1.0</p>
    <p>本项目源码受 <a href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a> 开源协议保护，文档受 <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a> 开源协议保护。</p>
  </div>
</footer>
</div>

</div>


</body>
</html>