<?php 
/*
* 碎语部分
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<section>
 <article>
  <!--<?php if(ROLE == 'admin' || ROLE == 'writer'): ?>
  <div class="pagetitle"><a href="<?php echo BLOG_URL . 'admin/twitter.php' ?>">发布碎语</a></div>
  <?php endif; ?>-->
  <ul id="tw">
    <?php 
    foreach($tws as $val):
    $author = $user_cache[$val['author']]['name'];
    $avatar = empty($user_cache[$val['author']]['avatar']) ? 
                BLOG_URL . 'admin/views/images/avatar.jpg' : 
                BLOG_URL . $user_cache[$val['author']]['avatar'];
    $tid = (int)$val['id'];
	$img = empty($val['img']) ? "" : '<a title="查看图片" href="'.BLOG_URL.str_replace('thum-', '', $val['img']).'" target="_blank"><img style="border: 1px solid #EFEFEF;" src="'.BLOG_URL.$val['img'].'"/></a>';
    ?>
    <div id="messageBoard">
      <div class="messageBoardLeft">
        <div class="messageBoardAvatar"> <img src="<?php echo $avatar; ?>" width="50" height="50" /> </div>
        <b><?php echo $author; ?></b> </div>
      <div class="messageBoardRight">
        <div class="messageBoardRight-top"> <?php echo $val['date'];?> </div>
        <div class="messageBoardRight-center">
          <p> <?php echo $val['t'].'<br/>'.$img;?> </p>
          
          <!--碎语回复-->
          <div class="bttome">
            <p class="tw-post"><a href="javascript:loadr('<?php echo DYNAMIC_BLOGURL; ?>?action=getr&tid=<?php echo $tid;?>','<?php echo $tid;?>');">回复(<span id="rn_<?php echo $tid;?>"><?php echo $val['replynum'];?></span>)</a></p>
          </div>
          <ul id="r_<?php echo $tid;?>" class="r">
          </ul>
          <div class="huifu" id="rp_<?php echo $tid;?>">
            <textarea class="textareat" cols="30" id="rtext_<?php echo $tid; ?>"></textarea>
            <div class="tbutton">
              <div class="tinfo" style="display:<?php if(ROLE == 'admin' || ROLE == 'writer'){echo 'none';}?>"> 
			  <input type="text" class="text" id="rname_<?php echo $tid; ?>" value="" />Name
                <p style="display:<?php if($reply_code == 'n'){echo 'none';}?>"><input type="text" class="text" id="rcode_<?php echo $tid; ?>" value="" />验证码
                <?php echo $rcode; ?></p> </div>
              <input class="submit" type="button" onclick="reply('<?php echo DYNAMIC_BLOGURL; ?>index.php?action=reply',<?php echo $tid;?>);" value="回复" />
              <div id="error"><span id="rmsg_<?php echo $tid; ?>"></span></div>
            </div>
          </div>
          <!-- //end 碎语回复-->          
        </div>
        <div class="messageBoardRight-bottom"> </div>
      </div>
      <br />
    </div>
    <?php endforeach;?>
    <div id="tw-pagenavi">
     <?php echo $pageurl;?>
  </div>
  </ul>
 </article>
</section>

<?php
 include View::getView('footer');
?>