<?php 
/*
* 自建页面模板
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>

<section>
  <article>
    <div class="post-center">
      <h2><?php echo $log_title; ?></h2>
      <div style=" padding:10px 0;"></div>
      <div class="post-content">
      <?php 
$search = '/(<img.*?)border=(["\'])?.*?(?(2)\2|\s)([^>]+>)/is';
echo preg_replace($search,'$1$3',$log_content); 
?>
      </div>
    </div>
  </article>
  <?php blog_comments($comments,$params); ?>
  <?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
</section>
<?php
 include View::getView('footer');
?>
