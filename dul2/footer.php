﻿<?php 
/*
* 底部信息
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>

<div class="both"></div>
<p>&nbsp;<a href="admin/">Login in</a></p>
<footer>
<!--<span>© 2012</span> <a href="<?php echo BLOG_URL; ?>" title="<?php echo $blogname; ?>版权所有"><?php echo $blogname; ?></a>--><!--<a href="http://dualdng.com/m" title="进入手机版">手机版</a>--><!--<?php echo $footer_info; ?><a href="http://www.miibeian.gov.cn" target="_blank"  rel="nofollow"><?php echo $icp; ?></a>--><p><a href="<?php echo BLOG_URL; ?>rss.php" title="RSS订阅">Subscribe RSS Feed</a></p><p><a href="http://www.uuuuj.com"title="Themed by Tinty!">Themed by Dualdng</a></p><p><a href="http://www.emlog.net"title="Powered by Emlog <?php echo Option::EMLOG_VERSION;?>">Proudly powered by Emlog</a></p><!--<script src="http://s84.cnzz.com/stat.php?id=4630159&web_id=4630159&show=pic" language="JavaScript"></script>
  <a href="http://www.miibeian.gov.cn" target="_blank"  rel="nofollow"><?php echo $icp; ?></a>
  <?php echo $footer_info; ?> -->
  
</footer>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js"></script> 
<script src="<?php echo TEMPLATE_URL; ?>js/z3.js"></script> 
<script src="<?php echo TEMPLATE_URL; ?>phZoom/phzoom.js"></script> 
<script src="<?php echo TEMPLATE_URL; ?>js/top.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>js/lazyload.js"></script> 
<script>jQuery(document).ready(function($){if(navigator.platform=="iPad")return;jQuery("img").lazyload({effect:"fadeIn",placeholder:"<?php echo TEMPLATE_URL; ?>images/grey.gif"})});</script>
<?php doAction('index_footer'); ?>
</body>
</html>
