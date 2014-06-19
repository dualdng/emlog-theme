<?php 
/*
* 阅读日志页面
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>

<section>
  <article>
    <div class="post-center">
      <h2><?php topflg($top); ?><?php echo $log_title; ?></h2>
        <span class="by">By <?php blog_author($author); ?> on <?php echo gmdate('Y-n-j G:i l'); ?></span>
      	<div class="post-date">
        <?php echo $comnum; ?> Comments | <?php echo $views; ?> Views
        <?php editflg($logid,$author); ?>
      </div>
      <div class="post-content">
      <?php 
$search = '/(<img.*?)border=(["\'])?.*?(?(2)\2|\s)([^>]+>)/is';
echo preg_replace($search,'$1$3',$log_content); 
?>       
        <p class="tag">
          <?php blog_sort($logid); ?>
          <?php blog_tag($logid); ?>
        </p>
        Link：<a title="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>"><?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?></a>
        <div class="nextlog">
          <?php neighbor_log($neighborLog); ?>
        </div>
        <?php doAction('log_related', $logData); ?>
      </div>
    </div>
  </article>
  <?php blog_comments($comments,$params); ?>
  <?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
</section>
<?php
 include View::getView('footer');
?>
