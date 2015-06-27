<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>技术分享</title>
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
	$('#qwe').children('li:last').prev().removeClass();
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
        color: #E34F0F;
        background: #FFF;
        border-left: 1px solid #E34F0F;
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
	
	fieldset{
		
padding: 20px;
border: 3px solid #F7A582;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
-o-border-radius: 10px;


}
   

legend{
	fort-weight:bold;
	font-family:"微软雅黑" ;
	font-size:18px;
	color: #999;
	border-bottom:0px;
	width:100px;
	margin:0 0 0 0;	
}
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
            <li id = "daohanglanTechnology2"><a href="index.html" style="font-size:18px;">&nbsp;&nbsp;首页&nbsp;&nbsp;</a></li>
            <li id = "daohanglanTechnology2"><a href="__URL__/Index/team.html"><span class="glyphicon glyphicon-globe" ></span>&nbsp;工作室</a></li>
            <li id = "daohanglanTechnology2"><a href="__URL__/Index/people.html"><span class="glyphicon glyphicon-user" ></span>&nbsp;团队成员</a></li>
            <li id = "daohanglanTechnology2"><a href="__URL__/Index/product.html" ><span class="glyphicon glyphicon-wrench" ></span>&nbsp;产品展示</a></li>
            <li id = "daohanglanTechnology">
            	<a href="__URL__/Index/technology.html"style="color:#fff;"><span class="glyphicon glyphicon-gift" ></span>&nbsp;技术分享</a></li>
          </ul>

         

          <ul class="nav navbar-nav navbar-right">
      
            <li class="dropdown" id = "daohanglanTechnology2" >
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
<div id="introtechnology" style="width:100%;">
	<div class="container" style="margin-top:-20px;" >
		<div class="row">
         	<div class="col-xs-12" >
  				<p style="line-height:180px;font-family:微软雅黑;">技术分享</p>
  				<p style="margin-top:-60px;font-size:30px;">我们有严谨的理念，高超的技术，完美的产品。</p>
 		    </div>
        </div>
	</div>
</div>


<!--下面是主要内容部分-->
<div class="container">

<div class="row">

<div class="col-xs-9">
	
    
    <h3 id ='section-1' style="font-family:微软雅黑;">ThinkPHP</h3></br>
 			<div class="row">

				<div class="col-xs-8">
            		<img src="/Public/infor/images/Index/ThinkPHP.jpg" style="width:500px;height:200px; margin:0 auto;"><br>
                 </div>
            <div class="col-xs-4">
            <form>
            <fieldset style="height:200px; ">
        		<legend>&nbsp;&nbsp;&nbsp;友情链接&nbsp;</legend>
                
                 <img src="/Public/infor/Uploads/1.jpg" style="width:40px;height:30px; margin:0 auto;">
                 <a href="http://www.thinkphp.cn/" target="_blank">ThinkPHP&nbsp;官方网站</a>
                 <br> <br>  
                 <img src="/Public/infor/Uploads/1.jpg" style="width:40px;height:30px; margin:0 auto;">
                 <a href="http://baike.baidu.com/link?url=rn8rRe1MoO6NGkAkQ02OzyeAwFS1kurw3PNo244iepFqhl1QKSG_ad88ilnMQKe0MhXJ5PpLxsHA1JAPOxYWZ_" target="_blank">ThinkPHP&nbsp;百度百科</a>
                 <br>
                
     		</fieldset></form></div></div>     
       <p style="line-height:30px;">
            <font size="3px" >
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ThinkPHP是为了简化企业级应用开发和敏捷WEB应用开发而诞生的。最早诞生于2006年初，2007年元旦正式更名为ThinkPHP，并且遵循Apache2开源协议发布。ThinkPHP从诞生以来一直秉承简洁实用的设计原则，在保持出色的性能和至简的代码的同时，也注重易用性。并且拥有众多原创功能和特性，在社区团队的积极参与下，在易用性、扩展性和性能方面不断优化和改进。<br>
            
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ThinkPHP是一个快速、兼容而且简单的轻量级国产PHP开发框架，诞生于2006年初，原名FCS，2007年元旦正式更名为ThinkPHP，遵循Apache2开源协议发布，从Struts结构移植过来并做了改进和完善，同时也借鉴了国外很多优秀的框架和模式，使用面向对象的开发结构和MVC模式，融合了Struts的思想和TagLib（标签库）、RoR的ORM映射和ActiveRecord模式。<br>
            
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ThinkPHP可以支持windows/Unix/Liunx等服务器环境，正式版需要PHP5.0以上版本支持，支持MySql、PgSQL、Sqlite以及PDO等多种数据库，ThinkPHP框架本身没有什么特别模块要求，具体的应用系统运行环境要求视开发所涉及的模块。<br>
            
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
作为一个整体开发解决方案，ThinkPHP能够解决应用开发中的大多数需要，因为其自身包含了底层架构、兼容处理、基类库、数据库访问层、模板引擎、缓存机制、插件机制、角色认证、表单处理等常用的组件，并且对于跨版本、跨平台和跨数据库移植都比较方便。并且每个组件都是精心设计和完善的，应用开发过程仅仅需要关注您的业务逻辑。<br>
            </font></p>
                <br><hr>
       <h3 id ='section-2' style="font-family:微软雅黑;">HTML</h3></br>
 			<div class="row">

				<div class="col-xs-8">
            		<img src="/Public/infor/images/Index/HTML.png" style="width:500px;height:200px; margin:0 auto;"><br>
                 </div>
            <div class="col-xs-4">
            <form>
            <fieldset style="height:200px; ">
        		<legend>&nbsp;&nbsp;&nbsp;友情链接&nbsp;</legend>
                
                 <img src="/Public/infor/Uploads/1.jpg" style="width:40px;height:30px; margin:0 auto;">
                 <a href="http://www.html5cn.org/" target="_blank">HTML&nbsp;官方网站</a>
                 <br> <br>  
                 <img src="/Public/infor/Uploads/1.jpg" style="width:40px;height:30px; margin:0 auto;">
                 <a href="http://baike.baidu.com/view/383720.htm?fromtitle=html&fromid=97049&type=syn" target="_blank">HTML&nbsp;百度百科</a>
                 <br>
                
     		</fieldset></form></div></div>     
       <p style="line-height:30px;">
            <font size="3px" >
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ThinkPHP是为了简化企业级应用开发和敏捷WEB应用开发而诞生的。最早诞生于2006年初，2007年元旦正式更名为ThinkPHP，并且遵循Apache2开源协议发布。ThinkPHP从诞生以来一直秉承简洁实用的设计原则，在保持出色的性能和至简的代码的同时，也注重易用性。并且拥有众多原创功能和特性，在社区团队的积极参与下，在易用性、扩展性和性能方面不断优化和改进。<br>
            
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ThinkPHP是一个快速、兼容而且简单的轻量级国产PHP开发框架，诞生于2006年初，原名FCS，2007年元旦正式更名为ThinkPHP，遵循Apache2开源协议发布，从Struts结构移植过来并做了改进和完善，同时也借鉴了国外很多优秀的框架和模式，使用面向对象的开发结构和MVC模式，融合了Struts的思想和TagLib（标签库）、RoR的ORM映射和ActiveRecord模式。<br>
            
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ThinkPHP可以支持windows/Unix/Liunx等服务器环境，正式版需要PHP5.0以上版本支持，支持MySql、PgSQL、Sqlite以及PDO等多种数据库，ThinkPHP框架本身没有什么特别模块要求，具体的应用系统运行环境要求视开发所涉及的模块。<br>
            
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
作为一个整体开发解决方案，ThinkPHP能够解决应用开发中的大多数需要，因为其自身包含了底层架构、兼容处理、基类库、数据库访问层、模板引擎、缓存机制、插件机制、角色认证、表单处理等常用的组件，并且对于跨版本、跨平台和跨数据库移植都比较方便。并且每个组件都是精心设计和完善的，应用开发过程仅仅需要关注您的业务逻辑。<br>
            </font></p>
                <br><hr>
             
    <h3 id ='section-3' style="font-family:微软雅黑;">JavaScript</h3></br>
 			<div class="row">

				<div class="col-xs-8">
            		<img src="/Public/infor/images/Index/JavaScript.png" style="width:500px;height:200px; margin:0 auto;"><br>
                 </div>
            <div class="col-xs-4">
            <form>
            <fieldset style="height:200px; ">
        		<legend>&nbsp;&nbsp;&nbsp;友情链接&nbsp;</legend>
                
                 <img src="/Public/infor/Uploads/1.jpg" style="width:40px;height:30px; margin:0 auto;">
                 <a href="http://www.javascriptsource.com/" target="_blank">JavaScript&nbsp;官方网站</a>
                 <br> <br>  
                 <img src="/Public/infor/Uploads/1.jpg" style="width:40px;height:30px; margin:0 auto;">
                 <a href="http://baike.baidu.com/link?url=kgZKddEdYfskMrpUX9h3G0NDAp0yaPjZemPxNcuAelLDwBx0OkcOGnYBmkkwjpmlr5N_5Oht5NQQDXqhLdJ04K" target="_blank">JavaScript&nbsp;百度百科</a>
                 <br>
                
     		</fieldset></form></div></div>     
       <p style="line-height:30px;">
            <font size="3px" >
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ThinkPHP是为了简化企业级应用开发和敏捷WEB应用开发而诞生的。最早诞生于2006年初，2007年元旦正式更名为ThinkPHP，并且遵循Apache2开源协议发布。ThinkPHP从诞生以来一直秉承简洁实用的设计原则，在保持出色的性能和至简的代码的同时，也注重易用性。并且拥有众多原创功能和特性，在社区团队的积极参与下，在易用性、扩展性和性能方面不断优化和改进。<br>
            
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ThinkPHP是一个快速、兼容而且简单的轻量级国产PHP开发框架，诞生于2006年初，原名FCS，2007年元旦正式更名为ThinkPHP，遵循Apache2开源协议发布，从Struts结构移植过来并做了改进和完善，同时也借鉴了国外很多优秀的框架和模式，使用面向对象的开发结构和MVC模式，融合了Struts的思想和TagLib（标签库）、RoR的ORM映射和ActiveRecord模式。<br>
            
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ThinkPHP可以支持windows/Unix/Liunx等服务器环境，正式版需要PHP5.0以上版本支持，支持MySql、PgSQL、Sqlite以及PDO等多种数据库，ThinkPHP框架本身没有什么特别模块要求，具体的应用系统运行环境要求视开发所涉及的模块。<br>
            
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
作为一个整体开发解决方案，ThinkPHP能够解决应用开发中的大多数需要，因为其自身包含了底层架构、兼容处理、基类库、数据库访问层、模板引擎、缓存机制、插件机制、角色认证、表单处理等常用的组件，并且对于跨版本、跨平台和跨数据库移植都比较方便。并且每个组件都是精心设计和完善的，应用开发过程仅仅需要关注您的业务逻辑。<br>
            </font></p>
                <br><hr>
      <h3 id ='section-4' style="font-family:微软雅黑;">Bootstrap</h3></br>
 			<div class="row">

				<div class="col-xs-8">
            		<img src="/Public/infor/images/Index/bootstrap.jpg" style="width:500px;height:200px; margin:0 auto;"><br>
                 </div>
            <div class="col-xs-4">
            <form>
            <fieldset style="height:200px; ">
        		<legend>&nbsp;&nbsp;&nbsp;友情链接&nbsp;</legend>
                
                 <img src="/Public/infor/Uploads/1.jpg" style="width:40px;height:30px; margin:0 auto;">
                 <a href="http://www.bootcss.com/" target="_blank">Bootstrap&nbsp;官方网站</a>
                 <br> <br>  
                 <img src="/Public/infor/Uploads/1.jpg" style="width:40px;height:30px; margin:0 auto;">
                 <a href="http://baike.baidu.com/link?url=vUdxRNIb05B18N1R5pa3xdrgiXFNVXf45VhxyK6z3XM6o95zVE6JYjabb24e3pMHt-JNh-yQgOwZM2XO87gvqoGuFuthoHkJxSIOP4rSmpC" target="_blank">Bootstrap&nbsp;百度百科</a>
                 <br>
                
     		</fieldset></form></div></div>     
       <p style="line-height:30px;">
            <font size="3px" >
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ThinkPHP是为了简化企业级应用开发和敏捷WEB应用开发而诞生的。最早诞生于2006年初，2007年元旦正式更名为ThinkPHP，并且遵循Apache2开源协议发布。ThinkPHP从诞生以来一直秉承简洁实用的设计原则，在保持出色的性能和至简的代码的同时，也注重易用性。并且拥有众多原创功能和特性，在社区团队的积极参与下，在易用性、扩展性和性能方面不断优化和改进。<br>
            
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ThinkPHP是一个快速、兼容而且简单的轻量级国产PHP开发框架，诞生于2006年初，原名FCS，2007年元旦正式更名为ThinkPHP，遵循Apache2开源协议发布，从Struts结构移植过来并做了改进和完善，同时也借鉴了国外很多优秀的框架和模式，使用面向对象的开发结构和MVC模式，融合了Struts的思想和TagLib（标签库）、RoR的ORM映射和ActiveRecord模式。<br>
            
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ThinkPHP可以支持windows/Unix/Liunx等服务器环境，正式版需要PHP5.0以上版本支持，支持MySql、PgSQL、Sqlite以及PDO等多种数据库，ThinkPHP框架本身没有什么特别模块要求，具体的应用系统运行环境要求视开发所涉及的模块。<br>
            
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
作为一个整体开发解决方案，ThinkPHP能够解决应用开发中的大多数需要，因为其自身包含了底层架构、兼容处理、基类库、数据库访问层、模板引擎、缓存机制、插件机制、角色认证、表单处理等常用的组件，并且对于跨版本、跨平台和跨数据库移植都比较方便。并且每个组件都是精心设计和完善的，应用开发过程仅仅需要关注您的业务逻辑。<br>
            </font></p>
                <br><hr>
              
    
</div>

<div class="col-xs-3" id="myScrollspy">
	<ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="295" id="qwe"  style="border:0px;">
		<?php if(is_array($data)): foreach($data as $key=>$v): ?><li id="s-<?php echo ($v['id']); ?>" ><a href="#section-<?php echo ($v['id']); ?>"  ><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
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