<?php 
/*
* 侧边栏组件、页面模块
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<?php
//blog：导航
function blog_navi(){
        global $CACHE; 
        $navi_cache = $CACHE->readCache('navi');
        ?>
        <ul>
        <?php 
        foreach($navi_cache as $value):
                if($value['url'] == 'admin' && (ROLE == 'admin' || ROLE == 'writer')):
                        ?>
                        <li class="common"><a href="<?php echo BLOG_URL; ?>admin/write_log.php">写日志</a></li>
                        <li class="common"><a href="<?php echo BLOG_URL; ?>admin/">管理站点</a></li>
                        <li class="common"><a href="<?php echo BLOG_URL; ?>admin/?action=logout">退出</a></li>
                        <?php 
                        continue;
                endif;
                $newtab = $value['newtab'] == 'y' ? 'target="_blank"' : '';
                $value['url'] = $value['isdefault'] == 'y' ? BLOG_URL . $value['url'] : trim($value['url'], '/');
                $current_tab = (BLOG_URL . trim(Dispatcher::setPath(), '/') == $value['url']) ? 'current' : 'common';
                ?>
                <li class="<?php echo $current_tab;?>"><a href="<?php echo $value['url']; ?>" <?php echo $newtab;?>><?php echo $value['naviname']; ?></a></li>
        <?php endforeach; ?>
        </ul>
		<div class="go-top"><a href="#">TOP!</a></div>
<?php }?>
<?php
//widget：blogger
function widget_blogger($title){
	global $CACHE;
	$user_cache = $CACHE->readCache('user');
	$name = $user_cache[1]['mail'] != '' ? "<a href=\"mailto:".$user_cache[1]['mail']."\">".$user_cache[1]['name']."</a>" : $user_cache[1]['name'];?>

<li>
  <h3><span><?php echo $title; ?></span></h3>
  <ul id="bloggerinfo">
    <div id="bloggerinfoimg">
      <?php if (!empty($user_cache[1]['photo']['src'])): ?>
      <img src="<?php echo BLOG_URL.$user_cache[1]['photo']['src']; ?>" width="<?php echo $user_cache[1]['photo']['width']; ?>" height="<?php echo $user_cache[1]['photo']['height']; ?>" alt="blogger" />
      <?php endif;?>
    </div>
    <p><b><?php echo $name; ?></b> <?php echo $user_cache[1]['des']; ?></p>
  </ul>
</li>
<?php }?>
<?php
//widget：日历
function widget_calendar($title){ ?>
<li>
  <h3><span><?php echo $title; ?></span></h3>
  <div id="calendar"> </div>
  <script>sendinfo('<?php echo Calendar::url(); ?>','calendar');</script> 
</li>
<?php }?>
<?php
//widget：标签
function widget_tag($title){
	global $CACHE;
	$tag_cache = $CACHE->readCache('tags');?>
<li>
  <h3><span><?php echo $title; ?></span></h3>
  <ul id="blogtags">
    <?php foreach($tag_cache as $value): ?>
    <span style="font-size:<?php echo $value['fontsize']; ?>pt; line-height:30px;"> <a href="<?php echo Url::tag($value['tagurl']); ?>" title="<?php echo $value['usenum']; ?> 篇日志"><?php echo $value['tagname']; ?></a></span>
    <?php endforeach; ?>
  </ul>
</li>
<?php }?>
<?php
//widget：分类
function widget_sort($title){
	global $CACHE;
	$sort_cache = $CACHE->readCache('sort'); ?>
<li>
  <h3><span><?php echo $title; ?></span></h3>
  <ul id="blogsort">
    <?php foreach($sort_cache as $value): ?>
    <li> <a href="<?php echo Url::sort($value['sid']); ?>"><?php echo $value['sortname']; ?>(<?php echo $value['lognum'] ?>)</a> <a href="<?php echo BLOG_URL; ?>rss.php?sort=<?php echo $value['sid']; ?>"><img src="<?php echo TEMPLATE_URL; ?>images/rss.png" alt="订阅该分类"/></a> </li>
    <?php endforeach; ?>
  </ul>
</li>
<?php }?>
<?php
//widget：最新碎语
function widget_twitter($title){
	global $CACHE; 
	$newtws_cache = $CACHE->readCache('newtw');
	$istwitter = Option::get('istwitter');
	?>
<li>
  <h3><span><?php echo $title; ?></span></h3>
  <ul id="twitter">
    <?php foreach($newtws_cache as $value): ?>
    <li><?php echo $value['t']; ?>
      <p><?php echo smartDate($value['date']); ?> </p>
    </li>
    <?php endforeach; ?>
    <?php if ($istwitter == 'y') :?>
    <p><a href="<?php echo BLOG_URL . 't/'; ?>">更多&raquo;</a></p>
    <?php endif;?>
  </ul>
</li>
<?php }?>
<?php
//widget：最新评论
function widget_newcomm($title){
	global $CACHE; 
	$com_cache = $CACHE->readCache('comment');
	?>
<li>
  <h3><span><?php echo $title; ?></span></h3>
  <ul id="newcomment">
    <?php
	foreach($com_cache as $value):
	$url = Url::comment($value['gid'], $value['page'], $value['cid']);
	?>
    <li id="comment"><?php echo $value['name']; ?> <br />
      <a href="<?php echo $url; ?>"><?php echo $value['content']; ?></a></li>
    <?php endforeach; ?>
  </ul>
</li>
<?php }?>
<?php
//widget：最新日志
function widget_newlog($title){
	global $CACHE; 
	$newLogs_cache = $CACHE->readCache('newlog');
	?>
<li>
  <h3><span><?php echo $title; ?></span></h3>
  <ul id="newlog">
    <?php foreach($newLogs_cache as $value): ?>
    <li><a href="<?php echo Url::log($value['gid']); ?>"><?php echo $value['title']; ?></a></li>
    <?php endforeach; ?>
  </ul>
</li>
<?php }?>
<?php
//widget：随机日志
function widget_random_log($title){
	$index_randlognum = Option::get('index_randlognum');
	$Log_Model = new Log_Model();
	$randLogs = $Log_Model->getRandLog($index_randlognum);?>
<li>
  <h3><span><?php echo $title; ?></span></h3>
  <ul id="randlog">
    <?php foreach($randLogs as $value): ?>
    <li><a href="<?php echo Url::log($value['gid']); ?>"><?php echo $value['title']; ?></a></li>
    <?php endforeach; ?>
  </ul>
</li>
<?php }?>
<?php
//widget：搜索
function widget_search($title){ ?>
<li>
  <h3><span><?php echo $title; ?></span></h3>
  <ul id="logserch">
    <form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php">
      <input name="keyword" class="search" type="text" />
    </form>
  </ul>
</li>
<?php } ?>
<?php
//widget：归档
function widget_archive($title){
	global $CACHE; 
	$record_cache = $CACHE->readCache('record');
	?>
<li>
  <h3><span><?php echo $title; ?></span></h3>
  <ul id="record">
    <?php foreach($record_cache as $value): ?>
    <li><a href="<?php echo Url::record($value['date']); ?>"><?php echo $value['record']; ?>(<?php echo $value['lognum']; ?>)</a></li>
    <?php endforeach; ?>
  </ul>
</li>
<?php } ?>
<?php
//widget：自定义组件
function widget_custom_text($title, $content){ ?>
<li>
  <h3><span><?php echo $title; ?></span></h3>
  <ul>
    <?php echo $content; ?>
  </ul>
</li>
<?php } ?>
<?php
//widget：链接
function widget_link($title){
	global $CACHE; 
	$link_cache = $CACHE->readCache('link');
	?>
<li>
  <h3><span><?php echo $title; ?></span></h3>
  <ul id="link">
    <?php foreach($link_cache as $value): ?>
    <li><a href="<?php echo $value['url']; ?>" title="<?php echo $value['des']; ?>" target="_blank"><?php echo $value['link']; ?></a></li>
    <?php endforeach; ?>
  </ul>
</li>
<?php }?>
<?php
//blog：置顶
function topflg($istop){
	$topflg = $istop == 'y' ? "<img src=\"".TEMPLATE_URL."/images/import.gif\" title=\"置顶日志\" /> " : '';
	echo $topflg;
}
?>
<?php
//blog：编辑
function editflg($logid,$author){
	$editflg = ROLE == 'admin' || $author == UID ? '<a href="'.BLOG_URL.'admin/write_log.php?action=edit&gid='.$logid.'">编辑</a>' : '';
	echo $editflg;
}
?>
<?php
//blog：分类
function blog_sort($blogid){
	global $CACHE; 
	$log_cache_sort = $CACHE->readCache('logsort');
	?>
<?php if(!empty($log_cache_sort[$blogid])): ?>
Posted in <a href="<?php echo Url::sort($log_cache_sort[$blogid]['id']); ?>"><?php echo $log_cache_sort[$blogid]['name']; ?></a>
<?php endif;?>
<?php }?>
<?php
//blog：文件附件
function blog_att($blogid){
	global $CACHE;
	$log_cache_atts = $CACHE->readCache('logatts');
	$att = '';
	if(!empty($log_cache_atts[$blogid])){
		$att .= '<span class="file">附件下载：</span>';
		foreach($log_cache_atts[$blogid] as $val){
			$att .= '<br /><a href="'.BLOG_URL.$val['url'].'" target="_blank">'.$val['filename'].'</a> '.$val['size'];
		}
	}
	echo $att;
}
?>
<?php
//blog：日志标签
function blog_tag($blogid){
	global $CACHE;
	$log_cache_tags = $CACHE->readCache('logtags');
	if (!empty($log_cache_tags[$blogid])){
		$tag = '| Tags:';
		foreach ($log_cache_tags[$blogid] as $value){
			$tag .= "	<a href=\"".Url::tag($value['tagurl'])."\">".$value['tagname'].'</a>';
		}
		echo $tag;
	}
}
?>
<?php
//blog：日志作者
function blog_author($uid){
	global $CACHE;
	$user_cache = $CACHE->readCache('user');
	$author = $user_cache[$uid]['name'];
	$mail = $user_cache[$uid]['mail'];
	$des = $user_cache[$uid]['des'];
	$title = !empty($mail) || !empty($des) ? "title=\"$des $mail\"" : '';
	echo '<a href="'.Url::author($uid)."\" $title>$author</a>";
}
?>
<?php
//blog：相邻日志
function neighbor_log($neighborLog){
	extract($neighborLog);?>
<div class="neighbor_log">
  <?php if($prevLog):?>
  <span class="left">Prev：<a href="<?php echo Url::log($prevLog['gid']) ?>" title="上一篇《<?php echo $prevLog['title'];?>》"><?php echo $prevLog['title'];?></a></span>
  <?php else:?>
  <span class="left">Prev：噢~这是最新的文章了</span>
  <?php endif;?>
  <?php if($nextLog && $prevLog):?>
  <?php endif;?>
  <?php if($nextLog):?>
  <span class="right">Next：<a href="<?php echo Url::log($nextLog['gid']) ?>" title="下一篇《<?php echo $nextLog['title'];?>》"><?php echo $nextLog['title'];?></a></span>
  <?php else:?>
  <span class="right">Next：没错，这就是小站第一篇文章</span>
  <?php endif;?>
</div>
<?php }?>
<?php
//blog：引用通告
function blog_trackback($tb, $tb_url, $allow_tb){
    if($allow_tb == 'y' && Option::get('istrackback') == 'y'):?>
<div id="trackback_address">
  <p>引用地址:
    <input type="text" style="width:350px" class="input" value="<?php echo $tb_url; ?>">
    <a name="tb"></a></p>
</div>
<?php endif; ?>
<?php foreach($tb as $key=>$value):?>
<ul id="trackback">
  <li><a href="<?php echo $value['url'];?>" target="_blank"><?php echo $value['title'];?></a></li>
  <li>BLOG: <?php echo $value['blog_name'];?></li>
  <li><?php echo $value['date'];?></li>
</ul>
<?php endforeach; ?>
<?php }?>
<?php
//blog：博客评论列表
function blog_comments($comments,$params){
    extract($comments);?>
<div id="comments"> <a name="comments"></a>
  <?php if($commentStacks): ?>
  <div class="comment-header">
    <?php $ymx_comment_num = count($comments); echo $ymx_comment_num; ?>
    Comment(s) here:</div>
  <?php endif; ?>
  <div id="comment_list">
    <?php
	$isGravatar = Option::get('isgravatar');
	$comnum = count($comments);
    foreach($comments as $value){
    if($value['pid'] != 0){
	$comnum--;
	}
}
    $page = isset($params[5])?intval($params[5]):1;
	$i= $comnum - ($page - 1)*Option::get('comment_pnum');
	foreach($commentStacks as $cid):
    $comment = $comments[$cid];
	$comment['poster'] = $comment['url'] ? '<a href="'.$comment['url'].'" target="_blank">'.$comment['poster'].'</a>' : $comment['poster'];
	?>
    <div class="comment-box">
      <div class="comment" id="comment-<?php echo $comment['cid']; ?>"> <a name="<?php echo $comment['cid']; ?>"></a>
        <div class="comment-info">
          <?php if($isGravatar == 'y'): ?>
          <img src="<?php echo getGravatar($comment['mail']); ?>" width="36" height="36" class="avatar" />
          <?php endif; ?>
          <div class="vcard"> <span class="name"><?php echo $comment['poster']; ?></span>&nbsp;&nbsp;
            <?php if(function_exists('display_useragent')){display_useragent($comment['cid']);} ?>
            <span class="comment-time"> <?php echo $comment['date']; ?></span> <span class="louceng">#<?php echo $i; ?></span> <a rel="nofollow" class="comment-reply" href="#comment-<?php echo $comment['cid']; ?>" onclick="commentReply(<?php echo $comment['cid']; ?>,this)">Reply</a></div>
          <div class="commnet-content"><?php echo $comment['content']; ?></div>
        </div>
        <?php blog_comments_children($comments, $comment['children']); ?>
      </div>
    </div>
    <?php $i--;endforeach; ?>
  </div>
  <div id="pagenavi"> <?php echo $commentPageUrl;?> </div>
</div>
<?php }?>
<?php
//blog：博客子评论列表
function blog_comments_children($comments, $children){
	$isGravatar = Option::get('isgravatar');
	foreach($children as $child):
	$comment = $comments[$child];
	$comment['poster'] = $comment['url'] ? '<a href="'.$comment['url'].'" target="_blank">'.$comment['poster'].'</a>' : $comment['poster'];
	?>
<div class="comment comment-children" id="comment-<?php echo $comment['cid']; ?>"> <a name="<?php echo $comment['cid']; ?>"></a>
  <div class="comment-info">
    <?php if($isGravatar == 'y'): ?>
    <img src="<?php echo getGravatar($comment['mail']); ?>" width="36" height="36" class="avatar" />
    <?php endif; ?>
    <div class="vcard"> <span class="name"><?php echo $comment['poster']; ?></span>&nbsp;&nbsp;
      <?php if(function_exists('display_useragent')){display_useragent($comment['cid']);} ?>
      <a rel="nofollow" class="comment-reply" href="#comment-<?php echo $comment['cid']; ?>" onclick="commentReply(<?php echo $comment['cid']; ?>,this)">Reply</a> <span class="comment-time"> <?php echo $comment['date']; ?> </span> </div>
    <div class="commnet-content"><?php echo $comment['content']; ?></div>
  </div>
  <?php if($comment['level'] < 6): ?>
  <?php endif; ?>
  <?php blog_comments_children($comments, $comment['children']);?>
</div>
<?php endforeach; ?>
<?php }?>
<?php
//blog：发表评论表单
function blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark){
	if($allow_remark == 'y'): ?>
<div id="comment-place">
  <div class="comment-post" id="comment-post">
    <div class="comment-header"><a name="respond"></a><b>Write a comment:</b></div>
    <div class="cancel-reply" id="cancel-reply" style="display:none"><a href="javascript:void(0);" onclick="cancelReply()">CancelReply</a></div>
    <form method="post" name="commentform" action="<?php echo BLOG_URL; ?>index.php?action=addcom" id="commentform">
      <input type="hidden" name="gid" value="<?php echo $logid; ?>" />
      <?php if(ROLE == 'visitor'): ?>
      <?php if($ckname != ''): ?>
      <span>Welcome back ! Dear <?php echo $ckname; ?> !</span>&nbsp;&nbsp;
      <?php if($ckname != '') : ?>
      <span id="to_author_info"><a rel="nofollow" href="javascript:;">[ Modify ]</a></span>
      <?php endif; ?>
      <?php endif; ?>
      <div id="profile_input"<?php if($ckname != '') echo ' style="display:none;"'; ?>>
        <p>
          <input type="text" name="comname" class="input" value="<?php echo $ckname; ?>" tabindex="1"/>
          <label for="author"><small>Name(needed)</small></label>
        </p>
        <p>
          <input type="text" name="commail" class="input" value="<?php echo $ckmail; ?>" tabindex="2"/>
          <label for="email"><small>Email(needed but it will not be published)</small></label>
        </p>
        <p>
          <input type="text" name="comurl" class="input" value="<?php echo $ckurl; ?>" tabindex="3" />
          <label for="url"><small>Website(if you have one)</small></label>
        </p>
      </div>
      <?php
	else:
	$CACHE = Cache::getInstance();
	$user_cache = $CACHE->readCache('user');
?>
      <span>您当前已登录为: <?php echo $user_cache[UID]['name']; ?></span>
      <?php endif; ?>
      <p>
        <textarea name="comment" id="commenttext" class="textarea" cols="100" rows="7" tabindex="4" onkeydown="if(event.altKey &amp;&amp; window.event.keyCode == 83) {document.getElementById('submit').click();return false;};" >
</textarea>
      </p>
      <p><?php echo $verifyCode; ?>
      <div id="loading" style="display:none">提交中，请稍候……</div>
      </p>
      <input name="submit" type="submit" class="submit" tabindex="5" value="Comment)" />
      <input type="hidden" name="pid" id="comment-pid" value="0" size="22" tabindex="1"/>
    </form>
    <div id="error" style="color:red"></div>
  </div>
</div>
<?php endif; ?>
<?php }?>
<?php
//调用文章中第一张图片，没有就显示默认图片
function get_content_img($str)
{
preg_match_all("/\<img.*?src\=\"(.*?)\"[^>]*>/", $str, $match);

{
echo $match[0][0];
}
}
?>