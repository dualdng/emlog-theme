<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
</div><!--end #content-->
<div style="clear:both;"></div>
<div id="footerbar">
	自豪地采用 <a href="http://www.emlog.net" title="emlog <?php echo Option::EMLOG_VERSION;?>">Emlog</a><p class='theme'>Themed by <a href="http://www.uuuuj.com">Tinty</a></p>
	<a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a> <?php echo $footer_info; ?>
	<?php doAction('index_footer'); ?>
</div><!--end #footerbar-->
</div><!--end #wrap-->
<script>prettyPrint();</script>
</body>
</html>
