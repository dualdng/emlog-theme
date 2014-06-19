<?php 
/**
 * 微语部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<nav id="animenu">


    <input type="checkbox" id="button">
    <label for="button" onclick>Menu</label>

	<ul>
	<span><a id="goUp" href="<?php echo BLOG_URL; ?>">Brague</a></span>
		<li>
			<a href="<?php echo BLOG_URL; ?>?post=3">关于</a>
			<ul>
				<li><a href="<?php echo BLOG_URL; ?>?post=2">一块板</a></li>
			</ul>
		</li>
		<li>
			<a href="<?php echo BLOG_URL; ?>?post=10">电台</a>
			<ul>
				<li><a href="<?php echo BLOG_URL; ?>136.html">电影</a></li>
				<li><a href="<?php echo BLOG_URL; ?>album">美图</a></li>
			</ul>
		</li>
		<li>
			<a href="<?php echo BLOG_URL; ?>sort/tw">与生活有关</a>
			<ul>
				<li><a href="<?php echo BLOG_URL; ?>sort/beauty">模版</a></li>
				<li><a href="<?php echo BLOG_URL; ?>sort/movie">关于电影</a></li>
				<li><a href="<?php echo BLOG_URL; ?>sort/acg">ACG</a></li>
				<li><a href="<?php echo BLOG_URL; ?>sort/love">关于你</a></li>
				<li><a href="<?php echo BLOG_URL; ?>sort/android">安卓</a></li>
				<li><a href="<?php echo BLOG_URL; ?>sort/design">这不是生活</a></li>
			</ul>
		</li>
		<li>
			<a href="<?php echo BLOG_URL; ?>">首页</a>
			<ul>
				<li><a href="<?php echo BLOG_URL; ?>t">微语</a></li>
			</ul>
		</li>						
	</ul>
</nav>
<div id="content">
<div id="contentleft">
<div id="tw">
    <?php if(ROLE == 'admin' || ROLE == 'writer'): ?>
    <div class="top"><a href="<?php echo BLOG_URL . 'admin/twitter.php' ?>">写微语</a></div>
    <?php endif; ?>
    <ul>
    <?php 
    foreach($tws as $val):
    $author = $user_cache[$val['author']]['name'];
    $avatar = empty($user_cache[$val['author']]['avatar']) ? 
                BLOG_URL . 'admin/views/images/avatar.jpg' : 
                BLOG_URL . $user_cache[$val['author']]['avatar'];
    $tid = (int)$val['id'];
    $img = empty($val['img']) ? "" : '<a title="查看图片" href="'.BLOG_URL.str_replace('thum-', '', $val['img']).'" target="_blank"><img style="border: 1px solid #EFEFEF;" src="'.BLOG_URL.$val['img'].'"/></a>';
    ?> 
    <div class="main_img"><img src="<?php echo $avatar; ?>" width="40px" height="40px" /></div>
    <div class="post1"><?php echo $author; ?>
    <div class="time"><?php echo $val['date'];?> </div><?php echo $val['t'].'<br/>'.$img;?></div>

    <div class="clear"></div>
    <div class="bttome">
        <p class="post"><a href="javascript:loadr('<?php echo DYNAMIC_BLOGURL; ?>?action=getr&tid=<?php echo $tid;?>','<?php echo $tid;?>');">Reply(<span id="rn_<?php echo $tid;?>"><?php echo $val['replynum'];?></span>)</a></p>

    </div>
	<div class="clear"></div>
   	<ul id="r_<?php echo $tid;?>" class="r"></ul>
    <?php if ($istreply == 'y'):?>
    <div class="huifu" id="rp_<?php echo $tid;?>">
	<textarea id="rtext_<?php echo $tid; ?>"></textarea>
    <div class="tbutton">
        <div class="tinfo" style="display:<?php if(ROLE == 'admin' || ROLE == 'writer'){echo 'none';}?>">
        <input type="text" id="rname_<?php echo $tid; ?>" value="" />昵称
        <span style="display:<?php if($reply_code == 'n'){echo 'none';}?>">验证码：<input type="text" id="rcode_<?php echo $tid; ?>" value="" /><?php echo $rcode; ?></span>        
        </div>
        <input id="submit" type="submit" onclick="reply('<?php echo DYNAMIC_BLOGURL; ?>index.php?action=reply',<?php echo $tid;?>);" value="Reply" /> 
        <div class="msg"><span id="rmsg_<?php echo $tid; ?>" style="color:#FF0000"></span></div>
    </div>
    </div>
    <?php endif;?>
    <?php endforeach;?>

</div><!--end #tw-->
<div id="pagenavi">
	<?php echo $pageurl;?>
</div>
</div><!--end #contentleft-->
<?php 
   $page_loglist = my_page_pre($twnum, Option::get('index_twnum'), $page, BLOG_URL.'t/?page=');
    echo $page_t;
   ?>
   <?php 
   $page_loglist = my_page_next($twnum, Option::get('index_twnum'), $page, BLOG_URL.'t/?page=');
    echo $page_t;
   ?>
<?php
 include View::getView('footer');
?>