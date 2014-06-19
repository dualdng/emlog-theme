<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="log">
<div id="logleft">
<div class='time'>发表于<a href='<?php echo ($log_url); ?>'><?php echo gmdate('Y-n-j G:i', ($date)); ?></a></div>
<div class="nextlog"><?php neighbor_log($neighborLog); ?></div>
	<h2><?php topflg($top); ?><?php echo $log_title; ?></h2>
	<?php echo $log_content; ?>
	<?php doAction('log_related', $logData); ?>
	<p class="date">本文由<?php blog_author($author); ?> 发表在<?php blog_sort($logid); ?> &nbsp<?php blog_tag($logid); ?> 
	 <?php editflg($logid,$author); ?>
	</p>
	<?php blog_trackback($tb, $tb_url, $allow_tb); ?>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div><!--end #contentleft-->
<?php
 include View::getView('footer');
?>