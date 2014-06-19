<?php
/*
Template Name:Dual
Description:Dual
Version:1.0
Author:Dualdng
Author Url:http://dualdng.com
Sidebar Amount:0
ForEmlog:5.0.0
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
if(function_exists('emLoadJQuery')) {
    emLoadJQuery();
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="Emlog" />
<meta name="author" content="Sogei" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>style.css"/>
<link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>phZoom/phzoom.css" />
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Oswald' />
<?php doAction('index_head'); ?>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="home">
<div id="top">
  <header>
    <div class="headercontent">
      <h1><a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a></h1>
      <h2><span><?php echo $bloginfo; ?></span></h2>
       <!--<form name="keyform" method="get" id="searchform" action="<?php echo BLOG_URL; ?>index.php">
        <input type="text" class="s" name="keyword" placeholder="Search" x-webkit-speech>
      </form>-->
    </div>
  </header>
</div>
<nav>
<?php blog_navi();?>
</nav>