<?php 
/*
* 首页日志列表部分
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>

<section>
  <article class="contentleft">
    <?php doAction('index_loglist_top'); ?>
    <?php foreach($logs as $value): ?>
    <div class="title"><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></div>
    <div class="post"><a href="<?php echo $value['log_url']; ?>">
      <?php get_content_img(preg_replace('/(<img.*?)border=(["\'])?.*?(?(2)\2|\s)([^>]+>)/is','$1$3',$value['content']));?>
      <div class="date">
        <h2><?php echo $value['log_description']; ?></h2>
        <time class="time" datetime="<?php echo gmdate('Y-n-j', $value['date']); ?>" pubdate><?php echo gmdate('M', $value['date']); ?> <?php echo gmdate('j', $value['date']); ?>th,<?php echo gmdate('Y', $value['date']); ?></time><div class="comments"><?php echo $value['comnum']; ?> Comments | <?php echo $value['views']; ?>views </div>
      </div>
      </a> </div>
                       <!-- <div class="bottom"></div> -->
    <?php endforeach; ?>
    <div id="pagenavi"> <?php echo $page_url;?> </div>
  </article>
</section>
<?php
 include View::getView('footer');
?>
