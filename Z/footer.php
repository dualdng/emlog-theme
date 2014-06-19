<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
</div><!--end #content-->
<div style="clear:both;"></div>
<div id="footerbar">
<div id="foot">
<div class="first">
<div class="search">
<div class="widget">SEARCH</div>			
	<form method="get" id="searchform" action="">
		<input type="text" class="field" name="keyword" id="s" title="Search" placeholder="search" />
		<input type="submit" class="submit" name="" id="searchsubmit" value="" />
	</form>
</div>

<div class="widget">RECENT POSTS</div>
<div class="newposts">
<?php echo widget_newlog($title) ?>
</div>
</div>
<div class="second">

<div class="widget">LOGIN</div>
<div class="login">
<a href="<?php echo BLOG_URL; ?>admin">——> Login In</a></div>

<div class="widget">ARCHIEVE</div>
<div class="archieve">
<?php widget_archive($title) ?>
</div>
</div>
<div class="third">
<div class="widget">TAGS</div>
<div class="tags">
<?php widget_tag($title) ?>
</div>
</div>
<div class="foth">

<div class="widget">SAID</div>
<div class="said">
<?php widget_twitter($title) ?>
</div>

<div class="widget">FRIENDS</DIV>
<div class="friend">
<?php widget_link($title) ?>
</div>
</div>
</div>
<div class="emlog">Powered by <a href="http://www.emlog.net" title="emlog 5.1.2">Emlog </a>| Themed by <a href="http://www.uuuuj.com" title="布酪格">Tinty</a></div>
	<?php doAction('index_footer'); ?>
</div><!--end #footerbar-->
</div><!--end #wrap-->
<script>prettyPrint();</script>

<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
</body>
</html>
