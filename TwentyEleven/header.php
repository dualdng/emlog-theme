<?php
/*
Template Name:TwentyEleven
Description:仿wp主题
Version:1.0
Author:胡桃小泽梅
Author Url:http://www.uuuuj.com
Sidebar Amount:1
ForEmlog:5.1.1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="emlog" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<link href="<?php echo TEMPLATE_URL; ?>main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>phzoom/phzoom.js"></script>
<link href="<?php echo TEMPLATE_URL; ?>phzoom/phzoom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
jQuery(document).ready(function($){$("a[href$=jpg],a[href$=gif],a[href$=png],a[href$=jpeg],a[href$=bmp]").phzoom({});});
</script>

<?php doAction('index_head'); ?>
</head>
<body>
<div id="wrap">
  <div id="header">
    <h1><a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a></h1>
    <h3><?php echo $bloginfo; ?></h3>
  </div>
	<!--<form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php">
      <input name="keyword" class="search" type="text" placeholder="搜索" />
    </form>-->
  <div id="banner"><a href="<?php echo BLOG_URL; ?>"><script language="JavaScript">
a = 8 //最大随机数（图片总数）
var pp = Math.random();
var foot = Math.round(pp * (a-1))+1;
function create() {
this.src = ''
this.alt = ''
}
b = new Array()
for(var i=1; i<=a; i++) { b[i] = new create() }
b[1].src    = "<?php echo TEMPLATE_URL; ?>images/top/1.jpg"
b[2].src    = "<?php echo TEMPLATE_URL; ?>images/top/2.jpg"
b[3].src    = "<?php echo TEMPLATE_URL; ?>images/top/3.jpg"
b[4].src    = "<?php echo TEMPLATE_URL; ?>images/top/4.jpg"
b[5].src    = "<?php echo TEMPLATE_URL; ?>images/top/5.jpg"
b[6].src    = "<?php echo TEMPLATE_URL; ?>images/top/6.jpg"
b[7].src    = "<?php echo TEMPLATE_URL; ?>images/top/7.jpg"
b[8].src    = "<?php echo TEMPLATE_URL; ?>images/top/8.jpg"
var pic = "";
pic += '<img src='+b[foot].src+' border="1"'+' alt='+b[foot].alt+'>';
document.write(pic)
</script></a></div>
  <div id="nav"><?php blog_navi();?></div>