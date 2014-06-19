<?php 
/**
 * 首页文章列表部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<div id="contentleft">
<?php doAction('index_loglist_top'); ?>

<?php 
if (!empty($logs)):
foreach($logs as $value): 
?>
	<h2><?php topflg($value['top']); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2>
	<div class='date'><a href="<?php echo $value['log_url']; ?>"><?php echo gmdate('m/d', $value['date']); ?></a></div>
	<div id="count">
		<div class='views'><a href='<a href="<?php echo $value['log_url']; ?>'><?php echo $value['views']; ?></a></div>
		<div class='views-icon'><a href='<a href="<?php echo $value['log_url']; ?>'>围观</a></div>
		<div class='comments'><a href="<?php echo $value['log_url']; ?>#comments"><?php echo $value['comnum']; ?></a></div>
		<div class='views-icon2'><a href='<?php echo $value['log_url']; ?>#comments'>评论</a></div>
	</div>
	<?php echo $value['log_description']; ?>
	<div style="clear:both;"></div>
<?php 
endforeach;
else:
?>
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
<?php endif;?>

<div id="pagenavi">
	<?php echo $page_url;?>
</div>

</div>
<!-- end #contentleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>