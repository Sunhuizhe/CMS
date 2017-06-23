<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>河北中学</title>
<link href="<?php echo CSS_PATH;?>/hbschool/news.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<div id="mybody">
    	<div id="top">
        	<div class="menu">
            	<ul>
                	<li>网站首页</li>
                	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=80f97618013ac3c0d9a8793e2373912e&action=category&catid=0&num=11&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'11',));}?>
                		<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                			<?php if($v['catid']==20) { ?>
                				<li><a href="<?php echo $v['url'];?>" class="specil"><?php echo $v['catname'];?></a></li>
                			<?php } else { ?>
                				<li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
                			<?php } ?>
                		<?php $n++;}unset($n); ?>
                	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <!--<li><a href="#">学校概况</a></li>
                    <li><a href="#">规章制度</a></li>
                    <li><a href="#">德育网</a></li>
                    <li><a href="#">教研网</a></li>
                    <li><a href="#">名师风采</a></li>
                    <li><a href="#">高考专栏</a></li>
                    <li><a href="#">图书馆</a></li>
                    <li><a href="#">校友会</a></li>
                    <li><a href="#">河中论坛</a></li>
                    <li><a href="#">查询系统</a></li>
                    <li><a href="#" class="specil">东校区</a></li>                    -->
                </ul>
            </div>           
        </div>
      <div id="dh">
            	<h1><a href="index.html">河北中学首页</a> - <a href="#">学校概况</a> - 所获荣誉</h1>
            	<div id="search">
            <input name="search" type="text" class="search_text" /><input name="searchbut" type="button" class="search_but" value=" " />
            </div>
          </div>
        <div id="left">
        	<div id="leftmenu">
            	<h1><!--学校概况--><?php echo $catname;?></h1>
                <ul>
                	<!--<a href="#">领导简介</a>
                    <a href="#">学校简介</a>
                    <a href="#">光荣历史</a>
                    <a href="#" class="dq">所获荣誉</a>
                    <a href="#">图说河中</a>-->
                    <?php
                		$firstcatid=explode(',',$arrchildid);
                		$firstcatid=$firstcatid[0];
                		?>
                	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=02a19e92570f50867fdf12bb1bcaf7df&action=category&catid=%24catid&order=listorder+ASC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'order'=>'listorder ASC','limit'=>'5',));}?>
                		<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                		<?php if($v['catid']==$firstcatid) { ?>
                			<a href="<?php echo $v['url'];?>" class="dq"><?php echo $v['catname'];?></a>
                			<?php $curname=$v['catname'];
                				?>
                		<?php } else { ?>
                			<a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a>
                			
                		<?php } ?>
                			
                		<?php $n++;}unset($n); ?>
                	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
              </ul>
            </div>
          <div id="pic">
          <h1></h1>
           	<div id="colee" >
<div id="colee1">
<!--<p> <img src="<?php echo IMG_PATH;?>/hbschool/pic.gif" width="200" height="150" />2010-2011年度先进单位</p>
<p> <img src="<?php echo IMG_PATH;?>/hbschool/pic.gif" width="200" height="150" />2010-2011年度先进单位</p>
<p> <img src="<?php echo IMG_PATH;?>/hbschool/pic.gif" width="200" height="150" />2010-2011年度先进单位</p>
<p> <img src="<?php echo IMG_PATH;?>/hbschool/pic.gif" width="200" height="150" />2010-2011年度先进单位</p>
<p> <img src="<?php echo IMG_PATH;?>/hbschool/pic.gif" width="200" height="150" />2010-2011年度先进单位</p>
<p> <img src="<?php echo IMG_PATH;?>/hbschool/pic.gif" width="200" height="150" />2010-2011年度先进单位</p>-->
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=28d657c2bdda0c0e89b8280f0cfe3bcd&action=position&posid=2&num=%276%27+order%3D%27listorder+DESC%27\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','limit'=>'20',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
							<p> <img src="<?php echo $v['thumb'];?>" width="200" height="150" /><!--2010-2011年度先进单位--><?php echo $v['title'];?></p>
						<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<div id="colee2"></div>
</div>
             
            </div>
        </div>
        
        <div id="right">
        	<h1><!--所获荣誉--><?php echo $catname;?></h1>
            <ul>
            	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9d7d1e9684f0b990059856d02124b428&action=lists&catid=%24catid&order=inputtime+ASC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'inputtime ASC','limit'=>'20',));}?>
            		<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            			<li><a href="<?php echo $v['url'];?>"><!--[组图]我校被授予2010-2011年度省级文明单位--><?php echo $v['title'];?></a>	<span class="newsdate">2013-05-10</span></li>
            		<?php $n++;}unset($n); ?>
            	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            	<!--<li><a href="#">[组图]我校被授予2010-2011年度省级文明单位</a>	<span class="newsdate">2013-05-10</span></li>
	<li><a href="#">[组图]我校被评为“石家庄市2010-2011年度文明单位”</a>	<span class="newsdate">2013-05-10</span></li>	
	<li><a href="#">[图文]我校被授予“2012年高中教学先进单位”“2012年高中增值奖”等荣誉称号</a>	<span class="newsdate">2013-05-10</span></li>
	<li><a href="#">[组图]我校被授予“河北省体育传统项目学校”荣誉称号</a>	<span class="newsdate">2013-05-10</span>	</li>
	<li>[组图]我校被授予“影子教师”培训基地<span class="newsdate">2013-05-10</span></li>		
	<li>[组图]我校荣获“2010-2012年石家庄市创先争优先进基层党组织荣誉称号<span class="newsdate">2013-05-10</span></li>
	<li>[组图]我校荣获石家庄市妇联系统先进集体称号	<span class="newsdate">2013-05-10</span></li>
	<li>[组图]我校离退休干部党支部被评为“先进离退休干部党支部”荣誉称号	<span class="newsdate">2013-05-10</span></li>
	<li>[图文]我校获得“全国青少年普法教育先进单位”荣誉称号<span class="newsdate">2013-05-10</span></li>	
	<li>[组图]我校荣获“2010年度住房公积金管理先进单位”荣誉称号<span class="newsdate">2013-05-10</span></li>
	<li>[图文]我校荣获石家庄市“2010年度实绩突出领导班子”荣誉称号<span class="newsdate">2013-05-10</span></li>
	<li>[组图]我校荣获石家庄市2008—2009年度文明单位光荣称号	<span class="newsdate">2013-05-10</span></li>
	<li>[图文]我校党委荣获2009年度先进基层党组织称号<span class="newsdate">2013-05-10</span></li>	
	<li>[组图]我校荣获首批“河北省现代教育技术示范学校”	<span class="newsdate">2013-05-10</span></li>
	<li>[组图]我校被评为“首届中华百年名校”<span class="newsdate">2013-05-10</span></li>	
	<li>[图文]我校荣获石家庄市“先进基层党组织”荣誉称号	<span class="newsdate">2013-05-10</span></li>
	<li>[图文]我校荣获“2007年度实绩突出领导班子”称号<span class="newsdate">2013-05-10</span></li>	
	<li>[图文]我校荣获“2007年度民主评议工作先进单位”荣誉	<span class="newsdate">2013-05-10</span></li>
	<li>[组图]我校荣获石家庄市2008年中小学田径运动会“体育道德风尚奖”<span class="newsdate">2013-05-10</span>	</li>
	<li>[组图]我校被石家庄市委市政府评为“双争共建文明校园”	<span class="newsdate">2013-05-10</span></li>-->
            </ul>
            <div id="page">
	<span class="disabled">前一页</span><span class="current">1</span><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=4">4</a><a href="#?page=5">5</a><a href="#?page=6">6</a><a href="#?page=2" class="disabled">后一页 
	 </a></div>
        </div>
 
      </div>
 
	<div id="foot">	  
 		Copyright © 2008－2013 http://www.***.com All Rights Reserved   网站备案：冀ICP备00000000号
	</div>
</body>
<script type="text/javascript" src="<?php echo JS_PATH;?>/hbschool/pic.js"></script>
</html>
