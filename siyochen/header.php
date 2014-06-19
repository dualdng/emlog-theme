<?php
/*
Template Name:siyochen
Description:简洁优雅
Version:beta1
Author:Tinty
Author Url:http://www.uuuuj.com
Sidebar Amount:0
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
<script src="<?php echo TEMPLATE_URL; ?>jquery-2.1.0.min.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>unslider.min.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>main.js"></script>
<script>$(function() {
    $('.sideshow').unslider({speed: 500,               //  The speed to animate each slide (in milliseconds)
	delay: 300000000000000,              //  The delay between slide animations (in milliseconds)
	complete: function() {},  //  A function that gets called after every slide animation
	keys: true,               //  Enable keyboard (left, right) arrow shortcuts
	dots: true,               //  Display dot navigation
	fluid: false              //  Support responsive design. May break non-responsive designs
});
});
</script>
<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<!--[if IE 6]>
<script src="<?php echo TEMPLATE_URL; ?>iefix.js" type="text/javascript"></script>
<![endif]-->
<?php doAction('index_head'); ?>
</head>
<body>
  <?php if(Option::get('topimg')): ?>
  <div id="banner"><a href="<?php echo BLOG_URL; ?>"><?php avatar(); ?></a></div>
  <?php endif;?>
<div id="header">
    <h1><a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a></h1>
    <h3><?php echo $bloginfo; ?></h3>
  </div>
<div id="wrap">
  <div id="nav"><?php blog_navi();?></div>
  <?php if("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == BLOG_URL):?>
<div class='sideshow'>
<ul>
<?php
$array=top_img();
$num=count($array);
for($i=0;$i<$num;$i++)
{
		echo '<li>';
		echo '<span class=\'top_img\'>'.$array[$i][0].'</span>';
		echo '<div class=\'top_else\'>';
		echo '<h1>'.$array[$i][2].'</h1>';
		echo '<a class=\'btn\' href=\''.BLOG_URL.'/?post='.$array[$i][3].'\'>Learn More -></a>';
		echo '</div>';
		echo '</li>';
}
?>
</ul>
<div id='sawtooth'>
<img src='<?php echo TEMPLATE_URL; ?>/images/sawtooth.png' />
</div>
</div>
<?php endif;?>

