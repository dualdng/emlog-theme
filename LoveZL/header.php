<?php
/*
Template Name:LoveZL
Description:关于你。
Version:beta 1.1
Author:Dualdng
Author Url:http://www.uuuuj.com
Sidebar Amount:0
ForEmlog:5.1.2
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="emlog" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_URL; ?>style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_URL; ?>style/css/view.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_URL; ?>style/type/marketdeco.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_URL; ?>style/type/merriweather.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_URL; ?>style/css/queries.css" media="all" />
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />

<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
<![endif]-->
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>style/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>style/js/html5.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>style/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>style/js/selectnav.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>style/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>style/js/twitter.min.js"></script>
<!-- 代码高亮-->
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>phzoom/phzoom.js"></script>
<link href="<?php echo TEMPLATE_URL; ?>phzoom/phzoom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
jQuery(document).ready(function($){$("a[href$=jpg],a[href$=gif],a[href$=png],a[href$=jpeg],a[href$=bmp]").phzoom({});});
</script>

<?php doAction('index_head'); ?>
</head>

<body>
<div id="page" class="hfeed">
<div id="wrapper">
<header id="branding" role="banner">
  <h1 id="site-title"> 
  	<a href="<?php echo BLOG_URL; ?>" title="布酪格" rel="home">
    		<img src="<?php echo TEMPLATE_URL; ?>style/images/logo.png" alt="布酪格" />
    </a> 
  </h1>
  <div class="social">
    <div class="widget_search">
      <form method="get"  class="search-form" >
        <input type="submit" value="" class="search-submit-button" />
        <input type="text" value="search" onfocus="this.value=''" onblur="this.value='Search'" name="keyword" class="search-text-box" />
      </form> 
    </div>
    <ul>
      <li><a href="<?php echo BLOG_URL; ?>rss.php" target="_blank"><img src="<?php echo TEMPLATE_URL; ?>style/images/icon-rss.png" alt="RSS" /></a></li>
      <li><a href="#" target="_blank"><img src="<?php echo TEMPLATE_URL; ?>style/images/icon-dribbble.png" alt="Dribbble" /></a></li>
    </ul>
  </div>
  <nav id="access" class="access" role="navigation">
        <div id="menu" class="menu">
        	<ul id="tiny">
				<li><a href="<?php echo BLOG_URL; ?>">首页</a>
					<ul>
						<li><a href="http://www.uuuuj.com/t/">微语</a></li>
			        </ul>
				</li>
				<li><a href="http://www.uuuuj.com/album/">美图</a></li>
				<li><a href="#">分类</a>
					<ul>
			            <li><a href="http://www.uuuuj.com/sort/beauty">主题模版</a></li>
			            <li><a href="http://www.uuuuj.com/sort/tw">自娱自乐</a></li>
			            <li><a href="http://www.uuuuj.com/sort/movie">电影推荐</a></li>
						<li><a href="http://www.uuuuj.com/sort/acg">ACG</a></li>
						<li><a href="http://www.uuuuj.com/sort/love">静待缘分</a></li>
						<li><a href="http://www.uuuuj.com/sort/android">安卓相关</a></li>
						<li><a href="http://www.uuuuj.com/sort/design">与生活无关</a></li>					
			        </ul>
				</li>
				<li><a href="http://www.uuuuj.com/136.html">电影</a>
				<ul>
				<li><a href="http://www.uuuuj.com/?post=10">电台</a></li>
				</ul>
				</li>
				<li><a href="http://www.uuuuj.com/?post=3">关于</a>
				<ul>
				<li><a href="http://www.uuuuj.com/?post=2">一块板</a></li>
				</ul>
				</li>
			</ul>
		</div>
		<div class="triangle-l"></div>
		<div class="triangle-r"></div>
  </nav>
  <!-- #access --> 
  </header>
<!-- #branding -->