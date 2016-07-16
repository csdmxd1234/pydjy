<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="/new/css/bootstrap.css">
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Field Life Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" />
	<!-- js -->
	<script src="/js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<!-- fonts -->
	<link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<!-- //fonts -->

</head>
<body>
<!-- header -->
<div class="header">
	<div class="container">
		<div class="logo">
			<a href="<?php echo U('index/index');?>">
				<span>VR</span>视界
			</a>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->
<!-- navigation -->
<div class="navigation">
	<div class="container">
		<nav class="navbar navbar-default">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="hvr-bounce-to-bottom active"><a href="<?php echo U('index/index');?>"><font face="微软雅黑">主页<span class="sr-only">(current)</span></font></a></li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo U('index/about');?>"><font face="微软雅黑">VR简述</font></a></li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo U('index/typography');?>"><font face="微软雅黑">产品评测</font></a></li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo U('index/gallery');?>"><font face="微软雅黑">留言板</font></a></li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo U('index/contact');?>"><font face="微软雅黑">联系我们</font></a></li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo U('admin/index');?>"><font face="微软雅黑">后台操作</font></a></li>
				</ul>

				<div class="clearfix"></div>
			</div><!-- /.navbar-collapse -->

			<div id="myCarousel" class="carousel slide">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active" style="background:#223240">
						<a href="typography.html" target="_blank"><img src="/new/img/slide1.png" alt="第一张"></a>
					</div>
					<div class="item" style="background:#F5E4DC;">
						<a href="typography.html" target="_blank"><img src="/new/img/slide2.png" alt="第二张"></a>
					</div>
					<div class="item" style="background:#DE2A2D;">
						<a href="typography.html" target="_blank"><img src="/new/img/slide3.png" alt="第三张"></a>
					</div>
					<!--        <div style="background:#eee;">
                                <img src="img/slide.png" alt="第三张">
                            </div> -->
				</div>
			</div>
		</nav>
	</div>
</div>
<!-- //navigation -->
<!-- //navigation -->


<!--FlexSlider-->

<script defer src="/js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(function(){
		SyntaxHighlighter.all();
	});
	$(window).load(function(){
		$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
				$('body').removeClass('loading');
			}
		});
	});
</script>
<!--End-slider-script-->
</div>
</div>
<!-- //banner -->
<!-- welcome -->
<div class="welcome">
	<div class="container">
		<div class="wel-header">

			<h3><font face="微软雅黑">论VR 我们更专业</font></h3>
			<p><font size=4>创意与热忱是我们的利器</font></p>
		</div>
		<div class="wel-grids">
			<div class="col-md-4 wel-grid  text-center">
				<div class="btm-clr">
					<figure class="icon">
						<span class="glyphicon glyphicon-grain" aria-hidden="true"></span>
					</figure>
					<h3><font face="微软雅黑">强大的科研实力</font></h3>
					<p> <font size=3>由斯坦福大学实验室提供技术支持。</font></p>
				</div>
			</div>
			<div class="col-md-4 wel-grid btm-gre text-center">
				<div class="btm-clr">
					<figure class="icon">
						<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
					</figure>
					<h3><font face="微软雅黑">雄厚的资金支持</font></h3>
					<p><font size=3>目前已获得B轮2000万融资。</font></p>
				</div>
			</div>
			<div class="col-md-4 wel-grid  text-center">
				<div class="btm-clr">
					<figure class="icon">
						<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
					</figure>
					<h3><font face="微软雅黑">默契的团队协作</font></h3>
					<p><font size=3> 工作氛围融洽，定期组织免费国际旅行。</font></p>
				</div>
			</div>
			<div class="col-md-4 wel-grid btm-gre text-center">
				<div class="btm-clr">
					<figure class="icon">
						<span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
					</figure>
					<h3><font face="微软雅黑">有利的市场环境</font></h3>
					<p> <font size=3>应当下火热的VR市场形势而生。</font></p>
				</div>
			</div>
			<div class="col-md-4 wel-grid  text-center">
				<div class="btm-clr">
					<figure class="icon">
						<span class="glyphicon glyphicon-tree-conifer" aria-hidden="true"></span>
					</figure>
					<h3><font face="微软雅黑">广阔的发展前景</font></h3>
					<p><font size=3> 公司规模及市值正在不断扩大。</font></p>
				</div>
			</div>
			<div class="col-md-4 wel-grid btm-gre text-center">
				<div class="btm-clr">
					<figure class="icon">
						<span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
					</figure>
					<h3><font face="微软雅黑">肮脏的PY交易</font></h3>
					<p> <font size=3>首席PY交易师曹爽提供技术支持。</font></p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //welcome -->
<!-- pests control -->

<!-- //pests control -->
<!-- news -->
<div class="news">
	<div class="container">
		<div class="news-text">
			<h3><font face="微软雅黑">行业新闻</font></h3>





			<p><font size=4>最前沿的信息在这里</font></p>
		</div>
		<div class="news-grids">
			<div class="col-md-3 news-grid mask">
				<a href="http://news.sina.com.cn/c/2016-07-10/doc-ifxtwchx8412013.shtml"target="_blank"><h4><font face="微软雅黑">大连首届太空嘉年华启幕 “VR”成展会新时尚</font></h4></a>
				<span>JULY 10,2016</span>
				<a href="http://news.sina.com.cn/c/2016-07-10/doc-ifxtwchx8412013.shtml"target="_blank" class="mask"><img src="/images/img1.jpg" alt="image" class="img-responsive zoom-img"></a>
				<div class="news-info">

				</div>
			</div>

			<div class="col-md-3 news-grid mask">
				<a href="http://news.zol.com.cn/592/5927726.html" target="_blank"><h4><font face="微软雅黑">和微软、索尼相比，任天堂为何对VR“不感兴趣”？</font></h4></a>
				<span>JULY 10,2016</span>
				<a href="http://news.zol.com.cn/592/5927726.html" target="_blank" class="mask"><img src="/images/img2.jpg" alt="image" class="img-responsive zoom-img"></a>
				<div class="news-info">



				</div>
			</div>
			<div class="col-md-3 news-grid mask">
				<a href="http://digi.163.com/16/0710/01/BRIV9F6T00162OUT.html" target="_blank"><h4><font face="微软雅黑">VR游戏Adr1ft的PS4和Xbox One版本即将到来</font></h4></a>
				<span>JULY 10,2016</span>
				<a href="http://digi.163.com/16/0710/01/BRIV9F6T00162OUT.html" target="_blank" class="mask"><img src="/images/img3.jpg" alt="image" class="img-responsive zoom-img"></a>
				<div class="news-info">

				</div>
			</div>
			<div class="col-md-3 news-grid mask">
				<a href="http://www.gamersky.com/news/201607/777364.shtml" target="_blank"><h4><font face="微软雅黑">《水果忍者VR》登陆Steam：配置需求吓人</font></h4></a>
				<span>JULY 10,2016</span>
				<a href="http://www.gamersky.com/news/201607/777364.shtml" target="_blank" class="mask"><img src="/images/img4.jpg" alt="image" class="img-responsive zoom-img"></a>
				<div class="news-info">

				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //news -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer-grids">
			<div class="logo2">
				<a href="<?php echo U('index/index');?>"><span>VR</span>视界</a>
			</div>
			<div class="ftr-menu">
				<ul>
					<li><a href="<?php echo U('index/index');?>"><font face="微软雅黑">主页</font></a></li>
					<li><a href="<?php echo U('index/about');?>"><font face="微软雅黑">VR简述</font></a></li>
					<li><a href="<?php echo U('index/typography');?>"><font face="微软雅黑">产品评测</font></a></li>
					<li><a href="<?php echo U('index/gallery');?>"><font face="微软雅黑">留言板</font></a></li>
					<li><a href="<?php echo U('index/contact');?>"><font face="微软雅黑">联系我们</font></a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>

	</div>
</div>

<!-- //footer -->
<!-- smooth scrolling -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
		 var defaults = {
		 containerID: 'toTop', // fading element id
		 containerHoverID: 'toTopHover', // fading element hover id
		 scrollSpeed: 1200,
		 easingType: 'linear'
		 };
		 */
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/js/move-top.js"></script>
<script type="text/javascript" src="/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
<script src="/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script src="/new/js/jquery.min.js"></script>
<script src="/new/js/bootstrap.min.js"></script>
<script type="text/javascript">
	//轮播自动播放
	$('#myCarousel').carousel({
		//自动4秒播放
		interval : 4000,
	});

	// //设置垂直居中
	// $('.carousel-control').css('line-height', $('.carousel-inner img').height() + 'px');
	// $(window).resize(function () {
	//  var $height = $('.carousel-inner img').eq(0).height() ||
	//                $('.carousel-inner img').eq(1).height() ||
	//                $('.carousel-inner img').eq(2).height();
	//  $('.carousel-control').css('line-height', $height + 'px');
	// });

	//设置文字垂直居中，谷歌浏览器加载图片的顺序问题，导致高度无法获取
	$(window).load(function () {
		$('.text').eq(0).css('margin-top', ($('.auto').eq(0).height() - $('.text').eq(0).height()) / 2 + 'px');
	});


	$(window).resize(function () {
		$('.text').eq(0).css('margin-top', ($('.auto').eq(0).height() - $('.text').eq(0).height()) / 2 + 'px');
	});

	$(window).load(function () {
		$('.text').eq(1).css('margin-top', ($('.auto').eq(1).height() - $('.text').eq(1).height()) / 2 + 'px');
	});

	$(window).resize(function () {
		$('.text').eq(1).css('margin-top', ($('.auto').eq(1).height() - $('.text').eq(1).height()) / 2 + 'px');
	});

</script>

</body>
</html>