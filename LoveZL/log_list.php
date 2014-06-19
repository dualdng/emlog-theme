<?php 
/**
 * 首页文章列表部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="primary">
<div id="content">
 <div class="intro"><?php echo $bloginfo; ?></div>
<?php doAction('index_loglist_top'); ?>

<?php 
if (!empty($logs)):
foreach($logs as $value): 
?>
 <article class="post hentry format-image">
  	<header class="entry-header">
	<h2 class="entry-title"><?php topflg($value['top']); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2>
		<div class="entry-meta">
      		<a href="#"><?php echo gmdate('Y-n-j G:i', $value['date']); ?></a>
      		<span class="sep"> | </span>	
      		<span class="cat-links"><?php blog_sort($value['logid']); ?> </span>
      		<span class="sep"> | </span>
        		<span class="cat-links"><?php blog_tag($value['logid']); ?></span>
      		<span class="sep"> | </span>
      		<div class="comments-link">
	        	<a href="<?php echo $value['log_url']; ?>"><?php echo $value['comnum']; ?>&nbspCommonts </a> <?php editflg($value['logid'],$value['author']); ?>
	        </div>
     	</div>
	<?php echo $value['log_description']; ?>
	</header>
	</article>
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
   $page_loglist = my_page_pre($lognum, $index_lognum, $page, $pageurl);
    echo $page_loglist;
   ?>
   <?php 
   $page_loglist = my_page_next($lognum, $index_lognum, $page, $pageurl);
    echo $page_loglist;
   ?>
<?php
 include View::getView('footer');
?>