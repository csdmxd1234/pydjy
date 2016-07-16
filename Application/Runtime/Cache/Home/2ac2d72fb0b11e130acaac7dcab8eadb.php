<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
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
<link rel="stylesheet" href="/css/chocolat.css" type="text/css" />
<!-- js -->
<script src="/js/jquery-1.11.1.min.js"></script>

<!-- //js -->
<!-- fonts -->
<link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<!-- //fonts -->
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
		<div class="social-icons">
			<ul>
				<li><a class="facebook" href="#"></a></li>
				<li><a class="twitt" href="#"></a></li>
				<li><a class="link" href="#"></a></li>
				<li><a class="googl" href="#"></a></li>
				<li><a class="dribb" href="#"></a></li>
			</ul>
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
					<li class="hvr-bounce-to-bottom"><a href="<?php echo U('index/index');?>"><font face="微软雅黑">主页<span class="sr-only">(current)</span></font></a></li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo U('index/about');?>"><font face="微软雅黑">VR简述</font></a></li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo U('index/typography');?>"><font face="微软雅黑">产品评测</font></a></li>
					<li class="hvr-bounce-to-bottom active"><a href="<?php echo U('index/gallery');?>"><font face="微软雅黑">留言板</font></a></li>
					<li class="hvr-bounce-to-bottom"><a href="<?php echo U('index/contact');?>"><font face="微软雅黑">联系我们</font></a></li>
				</ul>
				<div class="search">
					<form>
						<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
						<input type="submit" value=" ">
					</form>
				</div>
			  <div class="clearfix"></div>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
</div>
<!-- //navigation -->

<!-- banner -->
<div class="banner page-head">
	<div class="container">
		<h3>留言板</h3>
	</div>
</div>
<!-- gallery -->
<!-- contact -->
<?php if(is_array($info)): foreach($info as $key=>$vo): ?><div class="container">
		<br>
		<li><a href="<?php echo U('index/gallery_show',array('id'=>$vo['id']));?>"><font face="微软雅黑"><?php echo ($vo["name"]); ?></font></a></li>
		<?php echo ($vo["create_time"]); ?><br>
		<?php echo ($vo["abstract"]); ?><br>
		<li><a href="<?php echo U('index/gallery_show',array('id'=>$vo['id']));?>"><font face="微软雅黑">查看全文</font></a></li>
	</div><?php endforeach; endif; ?>



<!-- //gallery -->
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
<div class="copy-right">
	<div class="container">
			<p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
	</div>
</div>
<!---->
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
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>