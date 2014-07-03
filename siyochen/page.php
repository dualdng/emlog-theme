<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="t_content">
<div id="t_contentleft">
<div class='t_contentleft'>
	<h2><?php echo $log_title; ?></h2>
	<?php echo $log_content; ?>
</div>
	<div id='ajax_comments'></div>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div><!--end #contentleft-->
<?php
 include View::getView('footer');
?>
