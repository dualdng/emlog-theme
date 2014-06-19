<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="primary">
<div id="content">
  <div id="crumbs">
  	<a href="<?php echo BLOG_URL; ?>">首页</a> 
  	<span class="delimiter">/</span> 
  	<?php blog_sort($logid); ?> 
  	<span class="delimiter">/</span> 
  	<span class="current"><?php echo $log_title; ?></span>
  </div>
		
<article class="post hentry format-image">
  	<header class="entry-header">
	<h2 class="entry-title"><?php topflg($top); ?><?php echo $log_title; ?></h2>
	<div class="entry-meta">
      		<a href="#"><?php echo gmdate('Y-n-j G:i', $date); ?></a>
      		<span class="sep"> | </span>	
      		<span class="cat-links"><?php blog_sort($logid); ?> </span>
      		<span class="sep"> | </span>
        		<span class="cat-links"><?php blog_tag($logid); ?></span>
      		<span class="sep"> | </span>
      		<div class="comments-link">
	        	<a href="<?php echo $value['log_url']; ?>"><?php echo $comnum; ?>&nbspCommonts </a>  <?php editflg($logid,$author); ?>
	        </div>
     	</div>
	<?php echo $log_content; ?>
	<?php doAction('log_related', $logData); ?>
		</header>
	</article>
		
    <?php neighbor_log($neighborLog); ?>
	<?php neighbor($neighborLog); ?>

	<div style="clear:both;"></div>
		<?php blog_trackback($tb, $tb_url, $allow_tb); ?>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
		</div><!--end #contentleft-->
<?php
 include View::getView('footer');
?>