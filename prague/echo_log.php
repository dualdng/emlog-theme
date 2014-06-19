<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<div id="contentleft">
	<h2><?php topflg($top); ?><?php echo $log_title; ?></h2>
<div class='date'><a href="<?php echo $value['log_url']; ?>"><?php echo gmdate('m/d', $date); ?></a></div>
	<div id="count">
		<div class='views'><a href='<?php echo $value['log_url']; ?>'><?php echo $views; ?></a></div>
		<div class='views-icon'><a href='<?php echo $value['log_url']; ?>'>围观</a></div>
		<div class='comments'><a href="<?php echo $value['log_url']; ?>#comments"><?php echo $comnum; ?></a></div>
		<div class='views-icon2'><a href='<?php echo $value['log_url']; ?>#comments'>评论</a></div>
	</div>
	<?php echo $log_content; ?>
	<div class='author'><?php blog_author($author); ?></div>
	<div class='tag-sort'>
		<div class='sort'><span><?php blog_sort($logid); ?></span></div>
		<div class='tag'><span><?php blog_tag($logid); ?></span></div>
		<div class='tb'><a href="<?php echo $value['log_url']; ?>#tb"><?php echo $tbcount; ?></a></div>
		<div class='views-log'><a href='<?php echo $value['log_url']; ?>'><?php echo $views; ?></a></div>
		<div class='comments-log'><a href="<?php echo $value['log_url']; ?>#comments"><?php echo $comnum; ?></a></div>
	</div>
	<div><a href="<?php echo Url::log($prevLog['gid']) ?>"><?php echo $prevLog['title']?></a></div>
	<div class="nextlog"><?php neighbor_log($neighborLog); ?></div>
	<?php blog_trackback($tb, $tb_url, $allow_tb); ?>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div><!--end #contentleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>