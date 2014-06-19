<?php 
/**
 * 首页文章列表部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<!-- 判断是否为log_list首页，如果是则显示幻灯片-->
<?php if("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == BLOG_URL): ?>
<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="overlay"></div>

    <div class="slider-text">
    	<div id="slidecaption"></div>
    </div>   
	
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>
        
        <a id="nextsection" href="#animenu"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->
<?php else: ?>
<?php endif; ?>
<!-- animenu 浮动导航-->
<nav id="animenu">


    <input type="checkbox" id="button">
    <label for="button" onclick>Menu</label>

	<ul>
	<?php if("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == BLOG_URL): ?>
	<span><a id="goUp" href="#home-slider">Brague</a></span>
	<?php else: ?>
	<span><a id="goUp" href="<?php echo BLOG_URL; ?>">Brague</a></span>
<?php endif; ?>
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
<!-- 导航结束-->
<div id="content">
<div id="contentleft">
<?php doAction('index_loglist_top'); ?>

<?php 
if (!empty($logs)):
foreach($logs as $value): 
?>

<article class="article">
	<h2><?php topflg($value['top']); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2>
	<div class="article-tags">
      		<a href="#"><?php echo gmdate('Y-n-j G:i', $value['date']); ?></a>
      		<span class="sep">|</span>	
      		<span class="cat-links"><?php blog_sort($value['logid']); ?> </span>
      		<span class="sep">|</span>
        		<span class="cat-links"><?php blog_tag($value['logid']); ?></span>
      		<span class="sep">|</span>
      		<span>
	        	<a href="<?php echo $value['log_url']; ?>"><?php echo $value['comnum']; ?>&nbspCommonts </a> <?php editflg($value['logid'],$value['author']); ?>
	        </span>
			</div>
	<?php echo $value['log_description']; ?>
	<div style="clear:both;"></div>
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