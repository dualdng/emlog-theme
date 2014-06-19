<?php
/*
Template Name:Z
Description:关于你
Version:beta1
Author:Tinty Tin
Author Url:http://www.uuuuj.com
Sidebar Amount:0
ForEmlog:5.1.2
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width">
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="emlog" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<link href="<?php echo TEMPLATE_URL; ?>main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />
<!-- Main Style -->
<link href="<?php echo TEMPLATE_URL; ?>fonts.css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL; ?>fonts/marketdeco.css" rel="stylesheet">
<!-- Supersized -->
<link href="<?php echo TEMPLATE_URL; ?>supersized.css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL; ?>supersized.shutter.css" rel="stylesheet">

<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/supersized.3.2.7.min.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/main.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/plugins.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>phzoom/phzoom.js"></script>
<link href="<?php echo TEMPLATE_URL; ?>phzoom/phzoom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
jQuery(document).ready(function($){$("a[href$=jpg],a[href$=gif],a[href$=png],a[href$=jpeg],a[href$=bmp]").phzoom({});});
</script>
<script  type="text/javascript">
$(document).ready(function($) {
	$(function() {
		var navH = $("#animenu").offset().top;
		$(window).scroll(function() {
			var scroH = $(this).scrollTop();
			if (scroH >= navH) {
				$("#animenu").css({
					"position": "fixed",
					"top": "0px",
					"width":"100%",
				})
			} else if (scroH < navH) {
				$("#animenu").css({
					"position": "relative",
					"top":"0px",
                     "width":"100%",				
				})
			}
		})
	})
	
});
</script>
<?php doAction('index_head'); ?>
</head>
<body>
<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>

