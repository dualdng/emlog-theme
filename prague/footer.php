<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
</div><!--end #content-->
<div style="clear:both;"></div>
<div id="footerbar">
<p class='emlog'>Copyright © 2013 · All Rights Reserved</br><a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a>自豪地采用 <a href="http://www.emlog.net" title="emlog <?php echo Option::EMLOG_VERSION;?>">Emlog</a> · Designed by <a href="http://www.siyochen.com/">Siyochen</a> · Themed by <a href="http://www.uuuuj.com" title="布酪格">布酪格</a> · <a href="<?php echo BLOG_URL; ?>admin">Log In</a>
<div class='icon'><a href=''><img src='<?php echo TEMPLATE_URL; ?>images/tencent.png' /></a><a href=''><img src='<?php echo TEMPLATE_URL; ?>images/sina.png' /></a><a href=''><img src='<?php echo TEMPLATE_URL; ?>images/mail.png' /></a><a href='<?php echo BLOG_URL; ?>rss.php' title="RSS订阅"><img src='<?php echo TEMPLATE_URL; ?>images/rss.png' /></a><a href="#" target="_self" id="toTop" title="返回顶部" onclick="window.scrollTo(0,0);return false""><img src='<?php echo TEMPLATE_URL; ?>images/top.png' /></a></div>


	<?php doAction('index_footer'); ?>
</div><!--end #footerbar-->
</div><!--end #wrap-->
<script>prettyPrint();</script>
</body>
</html>