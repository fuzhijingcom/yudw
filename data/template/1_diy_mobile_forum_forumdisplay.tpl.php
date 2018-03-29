<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('forumdisplay');
0
|| checktplrefresh('./template/default/mobile/forum/forumdisplay.htm', './template/default/mobile/common/header.htm', 1522244683, 'diy', './data/template/1_diy_mobile_forum_forumdisplay.tpl.php', './template/default', 'mobile/forum/forumdisplay')
|| checktplrefresh('./template/default/mobile/forum/forumdisplay.htm', './template/default/mobile/common/footer.htm', 1522244683, 'diy', './data/template/1_diy_mobile_forum_forumdisplay.tpl.php', './template/default', 'mobile/forum/forumdisplay')
;?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8"/>
<meta http-equiv="Cache-control" content="<?php if($_G['setting']['mobile']['mobilecachetime'] > 0) { ?><?php echo $_G['setting']['mobile']['mobilecachetime'];?><?php } else { ?>no-cache<?php } ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.3;  minimum-scale=1.0; maximum-scale=2.0"/>
<meta name="MobileOptimized" content="240"/>
<meta name="Iphone-content" content="320"/>
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } ?>,<?php echo $_G['setting']['bbname'];?>" />
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> 手机版 - Powered by Discuz!</title>
<style type="text/css">
* { margin: 0; padding: 0; word-wrap: break-word; }
ul li, .xl li { list-style: none; }
.xw0 { font-weight: 400; }
.xw1 { font-weight: 700; }
.xg1, .xg1 a { color: #999 !important; }
.xg1 .xi2 { color: #999 !important; }
.xg2 { color: #666; }
.xi1, .onerror { color: #F60; }
.xi2, .xi2 a, .xi3 a { color: #369 ; }
.mtn { margin-top: 5px !important; }
.mbn { margin-bottom: 5px !important; }
.mtm { margin-top: 10px !important; }
.ptn { padding-top: 5px !important; }
.pbn { padding-bottom: 5px !important; }
.pd2 { padding: 2px !important; }
.pd5 { padding: 5px !important; }
.nopd { padding: 0px !important;}
.bt{ border-top: 1px #F2F2F2 solid !important; }
.bbn{ border-bottom: 1px #efefef solid !important; }
.ban { border: 1px #F2F2F2 solid !important;}
.xs0 { font-size : 8pt;}

a, .lkcss{ color: #004299; text-decoration: none;}
a img{ text-decoration: none; border: 0px none;}
EM { font-style: normal; }
img{border: 0;}

.odd { background: #FFF; }
.even { background: #fbfbff;}

.txt, .txt_s, .px { padding: 5px 0px; border: 1px solid #C3C3C3; background: #FFF url(./static/image/mobile/input_bg.gif) repeat-x 0 0px; width: 100%; }
.txt_s { width: 30px; }


body {background: #FFF; background-image:none; line-height: 130%; font-size: 10pt; font-style: normal; font-family: Arial,Helvetica,sans-serif; }

.hd { padding: 3px; border-bottom: 3px solid #2B7ACD; }
.hd a{ color: #2B7ACD; text-decoration: none; }
.wp { padding: 2px;}

.f_c { margin-top: 5px; padding: 5px; border: 1px #C2D5E3 solid; }
.f_c p{ line-height: 24px;}
/* common border */
.box { margin-top:3px; background: #fbfbff; padding: 3px 0; line-height:18px;}
.box h2 {}
.box .on { font-weight: 700; }
.box_ex { margin-top:0px; border-top: 0px none;}
.box_ex2{ margin-top:0px; border-top:0px none; border-left: 0px none; border-right: 0px none; }

.bm .bm_h { padding: 2px; background: #2A6EB4; border-bottom:1px #02254b solid; color: #FFF; line-height: 20px; font-size: 10pt;  }
.bm .bm_h a, .bm .bm_h .lkcss { color: #FFF; text-decoration: none;}
.bm .bm_c { padding: 3px 2px; border-bottom:1px solid #F2F2F2;  }
.bm .bm_c p{ margin-bottom: 5px; }
.bm .bm_c_bg { background: #f3f3ff; }
.bm .bm_c em { color: #999;}
.bm .bm_inf { background: #FBFBFF; padding: 5px 0;}
.bm_c .bm_user {  padding: 1px 0 1px 0px; line-height: 14px;}
.warning { margin-top: 4px; padding: 3px; border: 1px #CDCDCD solid; color:#666; }
.warning a{ color: #F26C4F;}

.pg { padding: 4px 0;}
.pg strong{ padding:2px 6px; }
.pg a{ padding: 2px 6px; }
.pipe { margin: 0 1px; font-size:12px; font-weight: 300; color: #c4c4c4; }

/* footer */
.ft{ margin:2px 0 2px 2px; padding: 1px; }

.fl { margin-top: 5px; }
.tl { margin-top: 5px;}
.tl a{ text-decoration: none;}
.tl .bm .bm_c img{ vertical-align: middle;}
.moder { margin-top: 2px; padding: 2px; border: 0px none; background: #FFF;}
.flif { border: none; background: none; color: #666;}
.ttp a{ margin: 0 2px;}

/* viewthread */
.vt { margin-top: 5px;}
.vt .bm .bm_h a { display: inline; width: auto;}
.vt .bm .bm_inf{ color: #444; }
.vt .bm .bm_c { padding: 1px; border-top: 1px #e9e9ff solid; border-bottom: 1px #e9e9ff solid; background: #fbfbff; color: #666;  }
.vt .pbody { margin-top: 1px; margin-bottom: 4px;}
.vt .pbody h2{ font-weight: 300;}
.vt .pbody .mes { padding: 1px;}
.vt .bm .bm_c .attach_h { margin-top: 4px;}
.vt .bm .bm_c .attach .vm{ width: 14px; vertical-align: middle;}
.attach img { width: 16px; vertical-align: middle; }
.vt .postmessage{ padding: 3px 0;}
.inbox { padding: 3px 0;}
.viewimg { padding: 2px;}
.viewsort img { vertical-align:top; }

/* newpost */
.sort { padding: 2px; border: 1px #efefef solid; background: #FFF; }
.quote { padding: 5px; font-style: italic; }

/* profile */
.profile_bm_c { padding: 0px !important;}
.profile_table td{ padding:0 3px; border-top: 1px #efefef solid;}
.profile_table th { border-top: 2px #efefef solid;}
.jammer { font-size: 10px; color:#FFF;}
</style>
</head>
<body>
<?php if($_G['setting']['domain']['app']['mobile']) { ?><?php $nav = 'http://'.$_G['setting']['domain']['app']['mobile'];?><?php } else { ?><?php $nav = "forum.php";?><?php } ?>
<div class="hd"><a href="<?php echo $nav;?>" title="<?php if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?>手机版"><?php if($_G['setting']['mobile']['mobilesimpletype'] == 1) { if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> 手机版<?php } else { ?><img src="./static/image/mobile/logo.gif" /><?php } ?></a></div>
<div class="wp">
<div class="pd2">
<?php if($_G['uid']) { ?><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile"><?php echo $_G['member']['username'];?></a><span class="pipe">|</span><a href="home.php?mod=space&amp;do=pm" <?php if($_G['member']['newpm']) { ?>class="xi1"<?php } ?>><?php if($_G['member']['newpm']) { ?>新短消息<?php } else { ?>消息<?php } ?></a><span class="pipe">|</span><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=favorite&amp;view=me&amp;type=forum">收藏</a><span class="pipe">|</span><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=thread&amp;view=me">我的帖子</a><span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>" title="退出">退出</a><?php } elseif($_G['connectguest']) { ?><?php echo $_G['member']['username'];?><span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>" title="退出">退出</a><?php } else { ?><a href="member.php?mod=logging&amp;action=login" title="登录">登录</a><?php if($_G['setting']['regstatus']) { ?><span class="pipe">|</span><a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" title="<?php echo $_G['setting']['reglinkname'];?>"><?php echo $_G['setting']['reglinkname'];?></a><?php } if($_G['setting']['connect']['allow'] && !$_G['setting']['bbclosed']) { ?><span class="pipe">|</span><a href="<?php echo $_G['connect']['login_url'];?>&statfrom=login_simple">ʹ��QQ�ʺŵ�¼</a><?php } } ?>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['global_header_mobile'])) echo $_G['setting']['pluginhooks']['global_header_mobile'];?><?php if($_G['forum']['type'] == 'forum') { ?>
<div class="box"><a href="forum.php" title="<?php echo $_G['setting']['navs']['2']['navname'];?>"><?php echo $_G['setting']['navs']['2']['navname'];?></a> <em> &gt; </em> <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['forum']['fid'];?>"><?php echo $_G['forum']['name'];?></a></div>
<?php } else { ?>
<div class="box"><a href="forum.php" title="<?php echo $_G['setting']['navs']['2']['navname'];?>"><?php echo $_G['setting']['navs']['2']['navname'];?></a> <em> &gt; </em> <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum_up['fid'];?>"><?php echo $forum_up['name'];?></a> <em> &gt; </em> <?php echo $_G['forum']['name'];?></div>
<?php } ?>

<div class="box flif">
<?php if(!$subforumonly) { ?>
    	今日<?php echo $_G['forum']['todayposts'];?><span class="pipe">|</span>主题<?php echo $_G['forum']['threads'];?></span><?php } if($_G['uid']) { ?><span class="pipe">|</span><a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=forum&amp;id=<?php echo $_G['fid'];?>" title="收藏本版" >收藏本版</a><?php } ?>
</div>


<div class="tz pbn">
<?php if(!$_G['forum']['allowspecialonly']) { ?><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>" title="发帖" >发帖</a><span class="pipe">|</span><?php } if($_G['group']['allowpostpoll']) { ?><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=1">发投票</a><span class="pipe">|</span><?php } if($_G['group']['allowpostreward']) { ?><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=3">发悬赏</a><span class="pipe">|</span><?php } if($_G['group']['allowpostdebate']) { ?><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=5">发辩论</a><span class="pipe">|</span><?php } if($_G['setting']['threadplugins']) { if(is_array($_G['forum']['threadplugin'])) foreach($_G['forum']['threadplugin'] as $tpid) { if(array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])) { ?>
<a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;specialextra=<?php echo $tpid;?>"><?php echo $_G['setting']['threadplugins'][$tpid]['name'];?></a><span class="pipe">|</span>
<?php } } } ?>
</div>

<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_top_mobile'])) echo $_G['setting']['pluginhooks']['forumdisplay_top_mobile'];?>
<!--//forumdisplay_list template start-->
<?php if(!$subforumonly) { ?>
<?php echo $multipage;?>
    <div class="tl">
    	<div class="bm">
        	<div class="bm_h"><?php echo $_G['forum']['name'];?> <?php if($_GET['orderby'] != 'dateline') { ?><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=author&amp;orderby=dateline">[新帖排序]</a><?php } else { ?><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>">[默认排序]</a><?php } ?></div>
            <?php if($_G['forum_threadcount']) { if(is_array($_G['forum_threadlist'])) foreach($_G['forum_threadlist'] as $key => $thread) { ?>                	<?php if($thread['displayorder'] > 0 && !$displayorder_thread) { ?>
                <?php $displayorder_thread = 1;?>                    <?php } ?>
                	<div class="bm_c<?php if($thread['displayorder'] == 0 && $displayorder_thread == 1) { ?> bt<?php unset($displayorder_thread);?><?php } ?>">
                    <?php if(!$thread['forumstick'] && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { ?>
                        <?php if($thread['related_group'] == 0 && $thread['closed'] > 1) { ?>
                            <?php $thread[tid]=$thread[closed];?>                        <?php } ?>
                        <?php if($groupnames[$thread['tid']]) { ?>
                            [<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $groupnames[$thread['tid']]['fid'];?>" target="_blank">群</a>]
                        <?php } ?>
                    <?php } if($thread['moved']) { ?><?php $thread[tid]=$thread[closed];?><?php } ?>
                    <?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_thread_mobile'][$key])) echo $_G['setting']['pluginhooks']['forumdisplay_thread_mobile'][$key];?>
                    <a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>" <?php echo $thread['highlight'];?> >
                    <?php if($_G['setting']['mobile']['mobilesimpletype'] == 0) { ?>
                        <?php if($thread['folder'] == 'lock') { ?>
                            <img src="<?php echo IMGDIR;?>/folder_lock.gif" />
                        <?php } elseif($thread['special'] == 1) { ?>
                            <img src="<?php echo IMGDIR;?>/pollsmall.gif" alt="投票" />
                        <?php } elseif($thread['special'] == 2) { ?>
                            <img src="<?php echo IMGDIR;?>/tradesmall.gif" alt="商品" />
                        <?php } elseif($thread['special'] == 3) { ?>
                            <img src="<?php echo IMGDIR;?>/rewardsmall.gif" alt="悬赏" />
                        <?php } elseif($thread['special'] == 4) { ?>
                            <img src="<?php echo IMGDIR;?>/activitysmall.gif" alt="活动" />
                        <?php } elseif($thread['special'] == 5) { ?>
                            <img src="<?php echo IMGDIR;?>/debatesmall.gif" alt="辩论" />
                        <?php } elseif(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
                            <img src="<?php echo IMGDIR;?>/pin_<?php echo $thread['displayorder'];?>.gif" alt="<?php echo $_G['setting']['threadsticky'][3-$thread['displayorder']];?>" style="width:18px;"/>
                        <?php } ?>
                    <?php } else { ?>
                    	<?php if(in_array($thread['displayorder'], array(1, 2, 3, 4))) { ?>
                        	[顶]
                        <?php } ?>
                    <?php } ?>
                   	<?php echo $thread['subject'];?></a>
                    <?php if($_G['setting']['mobile']['mobilesimpletype'] == 0) { ?>
                        <?php if($thread['displayorder'] == 0) { ?>
                                <?php if($thread['recommendicon'] && $filter != 'recommend') { ?>
                                    <img src="<?php echo IMGDIR;?>/recommend_<?php echo $thread['recommendicon'];?>.gif" align="absmiddle" alt="recommend" title="荐 <?php echo $thread['recommends'];?>" />
                                <?php } ?>
                                <?php if($thread['digest'] > 0 && $filter != 'digest') { ?>
                                    <img src="<?php echo IMGDIR;?>/digest_<?php echo $thread['digest'];?>.gif" align="absmiddle" alt="digest" title="精 <?php echo $thread['digest'];?>" />
                                <?php } ?>
                        <?php } ?>
                    <?php } elseif($_G['setting']['mobile']['mobilesimpletype'] == 1) { ?>
                    	<?php if($thread['displayorder'] == 0) { ?>
                                <?php if($thread['recommendicon'] && $filter != 'recommend') { ?>
                                    [荐]
                                <?php } ?>

                                <?php if($thread['digest'] > 0 && $filter != 'digest') { ?>
                                    [精]
                                <?php } ?>
                        <?php } ?>
                    <?php } ?>
                    <?php if(!$_G['setting']['mobile']['mobilesimpletype']) { ?>
                        <br />
                        <span class="xg1">
                        <?php if($thread['authorid'] && $thread['author']) { ?>
                            <a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>"><?php echo $thread['author'];?></a>
                        <?php } else { ?>
                            <?php if($_G['forum']['ismoderator']) { ?>
                                <a href="home.php?mod=space&amp;uid=<?php echo $thread['authorid'];?>" >匿名</a>
                            <?php } else { ?>
                                <?php echo $_G['setting']['anonymoustext'];?>
                            <?php } ?>
                        <?php } ?>
                        <?php echo $thread['dateline'];?>
                        <?php if($thread['replies'] > 0) { ?>回<?php echo $thread['replies'];?><?php } ?>
                        </span>
                    <?php } ?>
                    </div>
                <?php } ?>
            <?php } else { ?>
            <div class="bm_c">本版块或指定的范围内尚无主题</div>
            <?php } ?>
        </div>
    </div>
    <?php echo $multipage;?>
<?php } if(!$_G['setting']['mobile']['mobilesimpletype']) { ?>
    <?php if(($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || $_G['forum']['threadsorts']) { ?>
        <?php if($_G['forum']['threadtypes']) { ?>
            <div class="box ttp">
            <span class="xg2">主题分类 </span>
            <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?><?php if($_GET['archiveid']) { ?>&amp;archiveid=<?php echo $_GET['archiveid'];?><?php } ?>" class="<?php if($_GET['filter'] != 'typeid') { ?>xw1<?php } ?>">全部</a>
            <?php if(is_array($_G['forum']['threadtypes']['types'])) foreach($_G['forum']['threadtypes']['types'] as $id => $name) { ?>                 <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=typeid&amp;typeid=<?php echo $id;?><?php echo $forumdisplayadd['typeid'];?>" <?php if($_GET['filter'] == 'typeid' && $_GET['typeid'] == $id) { ?> class="xw1"<?php } ?>><?php echo $name;?></a>
            <?php } ?>
            </div>
        <?php } ?>

        <?php if($_G['forum']['threadsorts']) { ?>
            <div class="box tst">
            <span class="xg2">分类信息 </span>
            <?php if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $id => $name) { ?>                <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=sortid&amp;sortid=<?php echo $id;?><?php echo $forumdisplayadd['sortid'];?>" class="<?php if($_GET['sortid'] == $id) { ?>xw1<?php } ?>"><?php echo $name;?></a>
            <?php } ?>
            </div>
        <?php } ?>
    <?php } } ?>
<!--//forumdisplay_list template end-->
<?php if(!empty($_G['setting']['pluginhooks']['forumdisplay_bottom_mobile'])) echo $_G['setting']['pluginhooks']['forumdisplay_bottom_mobile'];?>

<?php if($subexists && $_G['page'] == 1) { ?>
<div class="fl">
    <div class="bm">
        <div class="bm_h">子版块</div>
        <?php if(is_array($sublist)) foreach($sublist as $sub) { ?>        <div class="bm_c arrow_r">
        	<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $sub['fid'];?>" class="block_a"><?php echo $sub['name'];?></a>
        </div>
        <?php } ?>
    </div>
</div>
<?php } ?></div>
<?php if(!empty($_G['setting']['pluginhooks']['global_footer_mobile'])) echo $_G['setting']['pluginhooks']['global_footer_mobile'];?>
<div class="ft">
<p><a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a></p>
<p>Powered by <strong><a href="http://www.discuz.net" target="_blank">Discuz!</a></strong> <em><?php echo $_G['setting']['version'];?></em></p>
    <p><a href="<?php echo $nav;?>">首页</a><span class="pipe">|</span><?php if($_G['setting']['mobile']['mobilesimpletype']) { ?><a href="<?php echo $_G['setting']['mobile']['simpletypeurl']['0'];?>" class="xw0" title="!mobiletype!">标准版</a><?php } else { ?>标准版<?php } ?><span class="pipe">|</span><?php if(!$_G['setting']['mobile']['mobilesimpletype']) { ?><a href="<?php echo $_G['setting']['mobile']['simpletypeurl']['1'];?>" class="xw0" title="精简版">精简版</a><?php } else { ?>精简版<?php } ?><span class="pipe">|</span><a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>" class="xw0" title="电脑版">电脑版</a></p>
</div>
</body>
</html><?php updatesession();?><?php if(defined('IN_MOBILE')) { ?><?php output();?><?php } else { ?><?php output_preview();?><?php } ?>
