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
	<div id="count">
	<a href="<?php echo $value['log_url']; ?>#comments"><img src="<?php echo TEMPLATE_URL; ?>images/comment-bubble.png" /></a>
		<a href="<?php echo $value['log_url']; ?>#comments"><p class="comments"><?php echo $value['comnum']; ?></p></a>
	</div>
	<p class="date">由<?php blog_author($value['author']); ?>&nbsp发表于&nbsp<a href="<?php echo $value['log_url']; ?>"><?php echo gmdate('Y-n-j G:i', $value['date']); ?></a></p>
	<?php echo $value['log_description']; ?>
	<p class="tag"><?php blog_tag($value['logid']); ?>|<?php blog_sort($value['logid']); ?></p>
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

</div><!-- end #contentleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>