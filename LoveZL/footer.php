<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
</div><!--end #content-->
<footer id="colophon" role="contentinfo">
		<div id="supplementary" class="four">
			<div id="first" class="widget-area" role="complementary">
				<aside class="widget">
					<h5 class="widget-title">Search</h5>	
					<form method="get" id="searchform" action="">
						<input type="text" class="field" name="keyword" id="s" title="Search" placeholder="" />
						<input type="submit" class="submit" name="" id="searchsubmit" value="" />
					</form>
				</aside>
				
				<aside class="widget">
					<h5 class="widget-title">Recent Posts</h5>		
<?php widget_random_log($title) ?>
				</aside>
			</div><!-- #first .widget-area -->
	
			<div id="second" class="widget-area" role="complementary">
				<aside class="widget">
					<h5 class="widget-title">LOGIN IN</h5>
					<div id="twitter-wrapper">
						<div id="twitter"></div>
						<span class="username"><a href="<?php echo BLOG_URL; ?>admin">→ Login In</a></span>
					</div>
				</aside>
				<aside class="widget">
					<h5 class="widget-title">Archives</h5>
<?php widget_archive($title) ?>
				</aside>				
			</div><!-- #second .widget-area -->
	
			<div id="third" class="widget-area" role="complementary">
				<aside class="widget">
					<h5 class="widget-title">Tags</h5>
						<div class="tagcloud"><?php widget_tag($title) ?></a>
					</div>
				</aside>
								<aside class="widget">

			</div><!-- #third .widget-area -->
		
			<div id="fourth" class="widget-area" role="complementary">
				<aside class="widget">
					<h5 class="widget-title">Said</h5>			
					<div class="textwidget"><p><?php widget_twitter($title) ?></p>
					</div>
				</aside>
							<aside class="widget">
					<h5 class="widget-title">Friends</h5>
<?php widget_link($title) ?>
				</aside>	
			</div><!-- #third .widget-area -->
		</div><!-- #supplementary -->
		<div id="site-generator">
Powered by <a href="http://www.emlog.net" title="EMLOG 5.1.2">EMLOG</a>&nbsp|&nbspThemed by <a href="http://www.uuuuj.com" title="布酪格">布酪格</a>
		</div>
		<script>prettyPrint();</script> <!-- 代码高亮 -->

	</footer><!-- #colophon -->
	</div><!-- #wrapper -->
</div><!-- #page -->
</body>
</html>
