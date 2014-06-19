<?php 
/**
 * 阅读文章页面
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
	<h2><?php topflg($top); ?><?php echo $log_title; ?></h2>
	<div class="article-tags">
      		<a href="#"><?php echo gmdate('Y-n-j G:i', $date); ?></a>
      		<span class="sep"> | </span>	
      		<span class="cat-links"><?php blog_sort($logid); ?> </span>
      		<span class="sep"> | </span>
        		<span class="cat-links"><?php blog_tag($logid); ?></span>
      		<span class="sep"> | </span>
      		<span class="comments-link">
	        	<a href="<?php echo $value['log_url']; ?>"><?php echo $comnum; ?>&nbspCommonts </a>  <?php editflg($logid,$author); ?>
	        </span>
     	</div>
	<?php echo $log_content; ?>
	<?php doAction('log_related', $logData); ?>
			</article>
	    <?php neighbor_log($neighborLog); ?>
	<?php neighbor($neighborLog); ?>

	<?php blog_trackback($tb, $tb_url, $allow_tb); ?>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div><!--end #contentleft-->

<?php
 include View::getView('footer');
?>