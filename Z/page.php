<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<nav id="animenu">


    <input type="checkbox" id="button">
    <label for="button" onclick>Menu</label>

	<ul>
	<span><a id="goUp" href="<?php echo BLOG_URL; ?>">Brague</a></span>
		<li>
			<a href="<?php echo BLOG_URL; ?>?post=3">关于</a>
			<ul>
				<li><a href="<?php echo BLOG_URL; ?>?post=2">一块板</a></li>
			</ul>
		</li>
		<li>
			<a href="<?php echo BLOG_URL; ?>?post=10">电台</a>
			<ul>
				<li><a href="<?php echo BLOG_URL; ?>136.html">电影</a></li>
				<li><a href="<?php echo BLOG_URL; ?>album">美图</a></li>
			</ul>
		</li>
		<li>
			<a href="<?php echo BLOG_URL; ?>sort/tw">与生活有关</a>
			<ul>
				<li><a href="<?php echo BLOG_URL; ?>sort/beauty">模版</a></li>
				<li><a href="<?php echo BLOG_URL; ?>sort/movie">关于电影</a></li>
				<li><a href="<?php echo BLOG_URL; ?>sort/acg">ACG</a></li>
				<li><a href="<?php echo BLOG_URL; ?>sort/love">关于你</a></li>
				<li><a href="<?php echo BLOG_URL; ?>sort/android">安卓</a></li>
				<li><a href="<?php echo BLOG_URL; ?>sort/design">这不是生活</a></li>
			</ul>
		</li>
		<li>
			<a href="<?php echo BLOG_URL; ?>">首页</a>
			<ul>
				<li><a href="<?php echo BLOG_URL; ?>t">微语</a></li>
			</ul>
		</li>						
	</ul>
</nav>
<div id="content">
<div id="contentleft">
<article class="article">
	<h2><?php echo $log_title; ?></h2>
	<?php echo $log_content; ?>
	</article>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div><!--end #contentleft-->
<?php
 include View::getView('footer');
?>