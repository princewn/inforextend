<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap.css">
	<link href="/Public/infor/newCss/demo/css/docs.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="/Public/infor/newCss/demo/css/demo.css">
</head>
<body>
	<nav class="navbar  navbarsty" role="navigation">
		<div class="container">
             <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
           		<a class="navbar-brand brandleft" href="#" target="_block">									                	<img id="logo" src="/Public/infor/images/Index/logo.png" alt=""/>			                </a>
       		 </div>
        	 <div id="navbar" class="navbar-collapse collapse" style="padding-left:30px;padding-right:30px">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html">&nbsp;&nbsp;首页&nbsp;&nbsp;</a></li>
					<li><a href="__URL__/Index/team.html"><span class="glyphicon glyphicon-globe" ></span>&nbsp;工作室</a></li>
					<li><a href="__URL__/Index/people.html"><span class="glyphicon glyphicon-user" ></span>&nbsp;团队成员</a></li>
					<li><a href="__URL__/Index/product.html"><span class="glyphicon glyphicon-wrench" ></span>&nbsp;产品展示</a></li>
					<li><a href="__URL__/Index/technology.html"><span class="glyphicon glyphicon-gift" ></span>&nbsp;技术分享</a></li>
				</ul>
   			    <ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a class="btn dropdown-toggle dropdownsty" data-toggle="dropdown" href="#" style="border:none; font-family:微软雅黑;">
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
	</nav>
  
  
  
	<div id="myCarousel" class="carousel slide container " style="margin-top:-20px;">
	   <!-- 轮播（Carousel）指标 -->
	   <ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
	   </ol>   
	   <!-- 轮播（Carousel）项目 -->
		<div class="carousel-inner">
		  <div class="item active">
			 <img src="/Public/infor/images/Index/carousel1.jpg" alt="First slide">
		  </div>
		  <div class="item">
			 <img src="/Public/infor/images/Index/carousel2.jpg" alt="Second slide">
		  </div>
		  <div class="item">
			 <img src="/Public/infor/images/Index/carousel3.jpg" alt="Third slide">
		  </div>
		</div>
		<!-- 轮播（Carousel）导航 -->
		<a class="carousel-control left" href="#myCarousel" role=button"" 
		  data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control right" href="#myCarousel" role="button"
		  data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		  <span class="sr-only">Next</span>
		</a>
	</div> 

<div class="bs-docs-featurette">
	<div class="container" style=""><!--width:1270px;导致占用宽度-->
    	<hr class="half-rule" style="width:400px">
		    <div class="row">
				<div class="col-md-4" style="padding:0" align="center">
					<img src="/Public/infor/images/Index/1.jpg" alt="Sass and Less support" class="img-responsive">
					<h3>预处理脚本</h3>
					<p style="padding-left:5px; padding-right:5px">虽然可以直接使用 Bootstrap 提供的 CSS 样式表，不要忘记 Bootstrap 的源码是基于最流行的 CSS 预处理脚本 - <a href="../css/#less">Less</a> 和 <a href="../css/#sass">Sass</a> 开发的。你可以采用预编译的 CSS 文件快速开发，也可以从源码定制自己需要的样式.。</p>
				</div>
				<div class="col-md-4" style="padding:0" align="center">
					<img src="/Public/infor/images/Index/2.jpg" alt="Responsive across devices" class="img-responsive">
					<h3>一个框架、多种设备</h3>
					<p style="padding-left:5px; padding-right:5px">你的网站和应用能在 Bootstrap 的帮助下通过同一份代码快速、有效适配手机、平板、PC 设备，这一切都是 CSS 媒体查询（Media Query）的功劳。</p>
				</div>
				<div class="col-md-4" style="padding:0" align="center">
					<img src="/Public/infor/images/Index/8.jpg" alt="Components" class="img-responsive" style="height:225px;">
					<h3>特性齐全</h3>
					<p style="padding-left:5px; padding-right:5px">Bootstrap 提供了全面、美观的文档。你能在这里找到关于 HTML 元素、HTML 和 CSS 组件、jQuery 插件方面的所有详细文档。</p>
				</div>
    		</div>
		    <hr class="half-rule" style="width:400px">
		</div>
	</div>
	<div class="container newcontent">
		<div class="row newcontentBox">
			<div class="col-md-4" style="padding:0">
				<div class="col-md-6 newimgBox" style="padding:0">
					<img src="/Public/infor/images/Index/demoContent1.jpg" Boxalt="" />
				</div>
				<div class="col-md-6 newtextBox" style="margin-top:0px;margin-left:5px;height:175px;width:40%;">
					<p id="text">
				  数字消费者迅速成为当今消费者群体的主流，并催生了一个巨大的数字消费市场。和传统消费者相比，数字消费者对数字生活方式有着更高的期待，其消费行为更加复杂，这些变化也成为行业变革的强大驱动力。在数字消费时代，深刻洞察消费者是每个企业生存和发展面对的机遇，也是巨大挑战。
					</p>
				</div>
				<div style="margin-left:5px;">
					<a href="http://www.accenture.com/SiteCollectionDocuments/Local_China/PDF/Accenture-Insight-Chinese-Consumer-Digital-Life.pdf"style="margin-left:5px;"  class="btn newpdfBtn" target='_block' >PDF下载
					</a>
				</div>
		   </div>
			<div class="col-md-4" style="padding:0"">
			  <div class="col-md-6 newimgBox" style="padding:0">
				<img src="/Public/infor/images/Index/demoContent2.jpg" Boxalt="" />
			  </div>
			  <div class="col-md-6 newtextBox" style="margin-top:0px;margin-left:5px;height:175px;width:40%;">
				<p id="text1">
				  中国的金融业市场环境正在迅速变化。利率市场化等各项改革进程带来巨大挑战，直接融资市场发展等因素导致的金融脱媒也极大地影响银行的盈利模式。同时，以互联网企业为首的其他行业的企业也开始加入竞争者的行列，在支付、信贷、保险等领域展开跨界竞争，争相镀“金”，给整个金融行业带来巨大冲击。
				</p>
			  </div>
			  <div>
				  <a href="http://www.accenture.com/SiteCollectionDocuments/PDF/China/accenture-insight-chinese-consumer-insight-finance.pdf" style="margin-left:5px;" class="btn newpdfBtn" target='_block' >PDF下载
				  </a>
			  </div>
			</div> 
			  <div class="col-md-4" style="padding:0">
			  <div class="col-md-6 newimgBox" style="padding:0">
				<img src="/Public/infor/images/Index/demoContent3.jpg" Boxalt="" />
			  </div>
			  <div class="col-md-6 newtextBox" style="margin-top:0px;margin-left:5px;height:175px;width:40%;">
				<p id="text2">
				 在中国这样复杂和快速变动的市场中，一个企业的成功取决于客户洞察的质量和精细度，以及利用这些洞察来成就卓越绩效的能力。正如这项研究所揭示的，当定义、识别、到达、赢得他们高价值的“唯我市场”时，那些最了解他们客户的企业将会获得明显的竞争优势。
				</p>
			  </div>
			  <div style="margin-left:5px;">
				  <a href="http://www.accenture.com/SiteCollectionDocuments/Local_China/PDF/Accenture-Chinese-Consumer-Retail.pdf" class="btn newpdfBtn" style="margin-left:5px;" target='_block' >PDF下载
				  </a>
			  </div>
			</div>    
		   </div>
		</div>
	</div>
	<!--
	<footer class="myfooterStyle" style="padding:15px 0 15px 0">
		<div class="container" >
			<p>Copyright &copy; 2014 -Accenture-
			  <span>Powered by <a href="http://getbootstrap.com">Bootstrap</a></span>
			  <a href="#" id="back">返回顶部</a>
			</p>
		</div>
	</footer>-->
	<hr/>
	<div class="myfooterStyle" style="padding:15px 0 15px 0" id="footer" style="color:#707070; font-size:small; line-height:10px;">
		<footer class="bs-docs-footer" role="contentinfo">
			<div class="container"  style="margin-top:-30px;">
				<p>地址：中国·大连经济技术开发区图强街321号　　大连理工大学软件学院　　邮编：116620</p>
				<a href="#" id="back" style="margin-top:-20px;">返回顶部</a>
				<p>&copy;版权所有：lab 　版本信息：网站版本1.0</p>
				<p>本项目源码受 <a href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a> 开源协议保护，文档受 <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a> 开源协议保护。</p>
			</div>
		</footer>
	</div>
<script type="text/javascript" src="/Public/jquery-1.11.0.js"></script>
<script type="text/javascript" src="/Public/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="/Public/infor/newCss/demo/js/demo.js"></script>
	<a href="__URL__/../Addhtml/Index/">
		<div style="position:fixd;top:0px;">自定制</div>
		<img src="../../../../wlzx5/pics/flaticonmaker.png" style="position:fixed; top:0px; width:40px; height:40px;"/>
	</a>
</body>
</html>