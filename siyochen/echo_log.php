<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="log_content">
<div id="log_contentleft">
<div id='log_title'><h2><?php topflg($top); ?><?php echo $log_title; ?></h2></div>
	<p class="date">Published on:<?php echo gmdate('F j Y', $date); ?>&nbspby&nbsp<?php blog_author($author); ?>  <?php editflg($logid,$author); ?><span>分类:<?php blog_sort($logid); ?></span></p>
	<div class='log_content'>
	<?php echo $log_content; ?>
	</div>
	<?php doAction('log_related', $logData); ?>
	<div class="nextlog"><?php neighbor_log($neighborLog); ?></div>
	<div id='ajax_comments'></div>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div><!--end #contentleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>
