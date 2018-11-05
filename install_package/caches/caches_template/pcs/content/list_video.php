<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>宣传片_华润集团欢迎您</title>
<link rel="stylesheet" href="mystatic/video/css/2013_base.css" />
<link rel="stylesheet" href="mystatic/video/css/2013_news.css" />
<script src="mystatic/video/js/2013_modernizr-2.5.3.min.js"></script>
<script src="mystatic/video/js/2013_jquery-1.7.1.min.js"></script>
<script src="mystatic/video/js/2013_main.js"></script>
<script src="mystatic/video/js/2013_scroll.js"></script>
<script src="mystatic/video/js/2013_gototop.js"></script>
<script src="mystatic/video/js/2013_videoshow.js"></script><style>

.pages .box {
    margin: 0 2px;
    width:100%
}
.pages .box span{

 float: left;

}

.title {
color: #7B7A7A;
    text-decoration: none;
    height: 33px;
    line-height: 33px;
}
.title_text {
color: #F26522;
    text-decoration: none;
    height: 33px;
    line-height: 33px;
}

.pages .box a {
    background-color: #EAE6E2;
    border: 1px solid #FFFFFF;
    color: #7B7A7A;
    height: 33px;
    line-height: 33px;
    width: 83px;
}


</style>
<script type="text/javascript">
function createPageHTML(_nPageCount, _nCurrIndex, _sPageName, _sPageExt){
	if(_nPageCount == null || _nPageCount<=1 || _nCurrIndex>=_nPageCount){
	return;
	}



	var news_line = "<td height=1 background=mystatic/video/images/news_linebg.gif></td>";//浅线
	var nCurrIndex = _nCurrIndex || 0;
	var firstPage = "<td><table width=55 border=0 cellpadding=0 cellspacing=0><tr> <td width=24><a href=\""+_sPageName+"."+_sPageExt+"\" class=page target=_self>首页</a></td></tr></table></td>";
	var nextPage = "<td><table width=67 border=0 cellpadding=0 cellspacing=0><tr> <td width=36><a href=\""+_sPageName+"_"+(nCurrIndex+1)+"."+_sPageExt+"\" class=page target=_self>下一页</a></td></tr></table></td>";
	var prePage = "<td><table width=67 border=0 cellpadding=0 cellspacing=0><tr> <td width=36><a href=\""+_sPageName+"."+_sPageExt+"\" class=page target=_self>上一页</a></td></tr></table></td>";
	var prePage_1 = "<td><table width=67 border=0 cellpadding=0 cellspacing=0><tr> <td width=36><a href=\""+_sPageName+"_"+(nCurrIndex-1)+"."+_sPageExt+"\" class=page target=_self>上一页</a></td></tr></table></td>";
	var lastPage = "<td><table width=55 border=0 cellpadding=0 cellspacing=0><tr>  <td width=24><a href=\""+_sPageName+"_" +(_nPageCount-1)+"."+_sPageExt+"\" class=page target=_self>尾页</a></td></tr></table></td>";
	var firstPage_off = "<td><table width=55 border=0 cellpadding=0 cellspacing=0><tr> <td width=24><a href='javascript:void(0)' class=page>首页</a></td></tr></table></td>";
	var nextPage_off = "<td><table width=67 border=0 cellpadding=0 cellspacing=0><tr> <td width=36><a href='javascript:void(0)' class=page>下一页</a></td></tr></table></td>";
	var prePage_off = "<td><table width=67 border=0 cellpadding=0 cellspacing=0><tr> <td width=36><a href='javascript:void(0)' class=page>上一页</a></td></tr></table></td>";
	var lastPage_off = "<td><table width=55 border=0 cellpadding=0 cellspacing=0><tr> <td width=24><a href='javascript:void(0)' class=page>尾页</a></td></tr></table></td>";
	

　　if(parseInt(_nPageCount)>=1){
		//alert(_nPageCount);
		document.write(news_line);
	}　
	document.write("<td width=244 height=33><span class=title>总共</span><span class=title_text>"+_nPageCount+"</span><span class=title>页&nbsp;</span><span class=title>当前第</span><span class=title_text>"+(nCurrIndex+1)+"</span><span class=title>/</span><span class=title_text>"+_nPageCount+"</span><span class=title>页&nbsp;&nbsp;</span></td> ");
    document.write('<td align="right"><table border="0" cellspacing="0" cellpadding="0"><tr>');
	if(nCurrIndex == 0)
	{
		document.write(firstPage_off);
		document.write(prePage_off);
		document.write(nextPage);	
		document.write(lastPage);
			document.write("<td style='padding-left:40px;'><select name=\"select\" style=\"margin-bottom:-3px;\" onchange=\"location.replace(this.value)\">");
			document.write("<option selected >跳至</option>");
			for(var i=0; i<_nPageCount; i++)
			{
			if(i==0)
			document.write("<option value=\""+_sPageName+"."+_sPageExt+"\">1</option>");
			else
			document.write("<option value=\""+_sPageName+"_" + i + "."+_sPageExt+"\">"+(i+1)+"</option>");
			}
			document.write("</select></td>");
		
	}
	else
		if(nCurrIndex==(_nPageCount-1))
		{
			document.write(firstPage);
			if(_nPageCount==2) {
                            document.write(prePage);
                        }
			else {
                            document.write(prePage_1);
                        }
			document.write(nextPage_off);
			document.write(lastPage_off);
		}
		else
		{
			document.write(firstPage);
			if(nCurrIndex==1) {
                            document.write(prePage);
                        }
			else {
                            document.write(prePage_1);
                        }
			document.write(nextPage);
			document.write(lastPage);
			
			document.write("<td><select name=\"select\" style=\"margin-bottom:-3px;\" onchange=\"location.replace(this.value)\">");
			document.write("<option selected >跳至</option>");
			for(var i=0; i<_nPageCount; i++)
			{
			if(i==0)
			document.write("<option value=\""+_sPageName+"."+_sPageExt+"\">1</option>");
			else
			document.write("<option value=\""+_sPageName+"_" + i + "."+_sPageExt+"\">"+(i+1)+"</option>");
			}
			document.write("</select></td>");
			
	}
        document.write('</tr></table></td>');

	
}

</script>
<script>
$(function(){
	$(".videolist .item").hover(
		function(){
			$(this).children().children(".playbox").slideDown(300);			
	},
		function(){
			$(this).children().children(".playbox").slideUp(300);
		}
	);
});
function showDiv(url, w, h) {
	  common.setPosition("divframe", w, h);
	  common.setIframe(w, h, url);
	  common.showWin();
  }
</script>

</head>

<body>
	<!--头部开始-->
<style type="text/css">
    #head{
        height:110px;
        background:#fff;
        background: rgba(255, 255, 255, 0.6);

    }
    #head .layout{height:110px;overflow: visible;}
    .navbody {
        top: 65px;
        width: 100%;
        padding:0;
        height: 40px;
        line-height: 40px;
    }
    .h-right {padding-top: 30px;}
    .subnav{padding-top:43px;}
.subnav li{line-height:30px;}
    .subnavbg { margin-top: -1px;}
    .logo{ padding-top: 35px;}
    .logo a{display:inline-block;width:100px;height:50px;background:url("mystatic/video/images/logo_80th_new.png") left top no-repeat;}
    .logo .logo-80th{
        background-position: -100px 0;
        width: 125px;
    }
    .header .nav li{padding-left:23px;}
    .sub-ul03 {
        right: -417px;
    }
    .sub-ul02 {
        left: -82px;
    }
    .sub-ul01 {
        left: -30px;
    }
    .h-r-search input{outline:none;}
    .nav_li .on{height:45px;}
</style>

<div class="header" id="head">
    <div class="layout">
        <div class="header_top">
            <div class="logo">
                <a href="http://www.crc.com.cn/index_12770.htm"></a><a class="logo-80th" href="http://www.crc.com.cn/80th/" target="_blank"></a>
            </div>
            <div class="h-right">
                <ul class="fl">
                    <!--<li class="li_a "><a href="http://www.crc.com.cn/index_web.html" target="_blank">引导页</a></li>-->
                    <!--<li class="li_a li_Eng"><a href="http://home.crc.com.cn/" target="_blank">CR Home</a></li>-->
                    <li class="li_a li_Eng"><a href="https://mail.crc.com.hk/owa/" target="_blank">Web Mail</a></li>
                    <li class="li_a"><a href="http://www.crc.com.cn/other/group/" target="_blank">华润网群</a></li>
                    <li class="li_a li_Eng"><a href="http://en.crc.com.cn/">English</a></li>
                    <li class="li_a"><a href="javascript:StranBody();" id="StranLink">繁體版</a></li>
                </ul>

                <div class="fl h-r-search">
                    <form target="_blank" method="get" action="https://so.crc.com.cn/was5/web/search" name="search">
                        <input class="text" name="searchword" id="searchword" type="text" value />
                        <input type="hidden" name="channelid" value="274082" />
                        <input class="iconbg btn-search-t" name="image" type="submit" value="search" />
                    </form>
                </div>                
            </div><!--end h-right-->
        </div><!--end header_top-->

        <div class="navbody"> 
         <div class="nav"> 
          <ul class="nav_ul"> 
           <li class="nav_li">
            <a class="on" href="?m=content&c=index&a=init" title="首页">首页</a>
           </li> 
           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5a54570a56d96bb2ef96d044e249cf75&sql=select+%2A+from+v9_category+where+parentid%3D0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_category where parentid=0 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
           <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
           <li class="nav_li"> <a class="on" href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a> 
            <div class="subnav sub-ul01"> 
             <ul>
               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7c2b77507d5ff5549488d4dcfc54f22a&sql=select+%2A+from+v9_category+where+parentid%3D%24r%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_category where parentid=$r[catid] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
               <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?> 
              <li>
                <a href="<?php echo $rr['url'];?>"><?php echo $rr['catname'];?></a>
              </li> 
               <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
             </ul> 
            </div> 
           </li> 
           <?php $n++;}unset($n); ?> <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
          </ul> 
         </div> 
    </div>
    </div>

    <div class="subnavbg"></div>
</div>
    <!--end header-->

    <script type="text/javascript">

        $(function () {
            function danzi() {
                var str = document.getElementById("searchword").value;
                var str1 = "";
                var a = str.split(" ");
                var tag = 0;
                var tag1 = 0;

                var SPECIAL_STR = "￥#$~!@%^&*();'\"?><[]{}\\|,:/=+—“”‘";
                for (i = 0; i < str.length; i++)
                    if (SPECIAL_STR.indexOf(str.charAt(i)) != -1) {
                        alert("不能包含非法字符(" + str.charAt(i) + ")！");
                        document.getElementById("searchword").focus();
                        return false;
                    }

                for (var i = 0; i < a.length; i++) {
                    if (a[i].length > 1) {
                        tag = 1;
                        str1 = str1 + " " + a[i];
                        //break;
                    }
                    if (a[i].length == 1) {
                        tag1 = 1;
                        //break;
                    }
                }
                if (tag1 != 0) {
                    alert("友情提示：系统发现您输入了表意不清的单个汉字或字母，这可能导致您无法搜到相关结果或者搜到的不是您想要的结果，请补全关键词或检查去掉不必要的空格！");
                }
                if (tag != 1) {
                    str1 = str.replace(/\s+/g, "");
                }
                str1 = str1.replace(/^\s+|\s+$/g, "");
                document.getElementById("searchword").value = str1;
                return str1;
            }

            //二级导航
            $(".nav_li").not(":first-child").hover(
                function () {
                    $(this).addClass("nav_li_hover");
                    $(".subnavbg").show();
                },
                function () {
                    $(this).removeClass("nav_li_hover");
                    $(".subnavbg").hide();
                }
            );
            $(".h-r-nav").hover(
                function () {
                    $(this).addClass("h-r-nav-hover");
                },
                function () {
                    $(this).removeClass("h-r-nav-hover");
                }
            );

        });
    </script>
<!--end header-->


<div class="other-topimg" id="featured">
    <div id="slider">
        <ul id="sliderContent">
        	<li  class="sliderImage"><em class="img-top-bg"></em><img src="mystatic/video/picture/2013_news_f01.jpg" width="1920" height="320" alt /><span></span></li>    
        </ul>
    </div> 
   
   
</div><!--end other-topimg-->
<div  id="overlay">  
	<div class="otherswrap" id="discover">
    	<div class="layout">
			<!-- 左侧导航栏开始 -->
            <div class="othersmenu fl"> 
                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=8aafb3f8260d5d76e99f8c1094009bcf&sql=select+%2A+from+v9_category+where+catid%3D%24_GET%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_category where catid=$_GET[catid] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                  <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                  <?php if($v[parentid] == 0) { ?>
                    <div class="other-titles"> 
                    <h2><?php echo $v['catname'];?></h2> 
                    </div>  
                    <div class="menu"> 
                    <ul>        
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7d0e8048239e8de227189da92bbec110&sql=select+%2A+from+v9_category+where+parentid%3D%24v%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_category where parentid=$v[catid] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $vv) { ?>
                    
                    <li id="OWNER_<?php echo $vv['catid'];?>"> 
                        <a href="<?php echo $vv['url'];?>" class="tit"><?php echo $vv['catname'];?></a>            
                    </li>
                    
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>        
                    </ul> 
                    </div>
                  <?php } else { ?>  
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=210c920a57d374e671e5e777a5083e1d&sql=select+%2A+from+v9_category+where+catid%3D%24v%5Bparentid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_category where catid=$v[parentid] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <div class="other-titles"> 
                    <h2><?php echo $v['catname'];?></h2> 
                    </div>  
                    <div class="menu"> 
                    <ul>        
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7d0e8048239e8de227189da92bbec110&sql=select+%2A+from+v9_category+where+parentid%3D%24v%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_category where parentid=$v[catid] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $vv) { ?>
                    
                    <li id="OWNER_<?php echo $vv['catid'];?>"> 
                        <a href="<?php echo $vv['url'];?>" class="tit"><?php echo $vv['catname'];?></a>            
                    </li>
                    
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>        
                    </ul> 
                    </div>    
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                  <?php } ?>        
                  <?php $n++;}unset($n); ?>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                  <!--end menu--> 
            </div> 
            <!-- 左侧导航栏结束 -->


<SCRIPT language=javascript>
var obj=<?php echo $_GET['catid'];?>;//当前栏目
document.getElementById("OWNER_"+obj).className="on";

</SCRIPT>	
        	<!--end othersmenu-->
            <div class="othersmain videomain fr">
            	<!-- 位置start -->
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=8aafb3f8260d5d76e99f8c1094009bcf&sql=select+%2A+from+v9_category+where+catid%3D%24_GET%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_category where catid=$_GET[catid] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                
                <div class="other-titles">
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>   

                <?php if($r[parentid] == 0) { ?> 
                <h2></h2>
                <?php } else { ?>
                <h2><?php echo $r['catname'];?></h2>
                <?php } ?> 

                    <div class="fr location">
                    <a href="?m=content&c=index&a=init" class="CurrChnlCls">首页</a>&nbsp;–&nbsp;
                    <a href="<?php echo $v['url'];?>" class="CurrChnlCls"><?php echo $v['catname'];?></a>&nbsp;                
                    <?php if($r[parentid] != 0) { ?>
                    –&nbsp;<a href="<?php echo $r['url'];?>" class="CurrChnlCls"><?php echo $r['catname'];?></a>        
                    <?php } ?>
                    </div>
                <?php $n++;}unset($n); ?>      
                </div>
                
                <!-- 视频列表开始 -->
                <div class="videolist">
                    <ul>	
                    <?php if($r[parentid] == 0) { ?>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a31d1f5194c24d1209571e68816ac14b&sql=select+%2A+from+v9_category+where+catid%3D%24r%5Bparentid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_category where catid=$r[parentid] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7a0a2ce14569e16e84d1a41a79dcbda1&sql=select+%2A+from+v9_news+where+catid%3D%24rr%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_news where catid=$rr[catid] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $n) { ?>
                                
                        	<li class="item">                                 
                            	<div class="pic">                                    
                                	<img src="<?php echo $n['thumb'];?>" alt="jianjei.jpg" width="169" height="120"/>
                                    <!-- <div class="playbox">
                                    	<a class="play" onclick="showDiv('<?php echo $n['url'];?>',784,517);">播放</a>
                                        <span class="play_bg"></span>
                                    </div> -->
                                </div>
                                <div class="conts">
                                	<a href="<?php echo $n['url'];?>"><p><?php echo $n['title'];?></p></a>
                                </div>                               
                            </li> 
                            
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <?php } else { ?>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a6b5b766b84d8a7102294c7820109332&sql=select+%2A+from+v9_news+where+catid%3D%24r%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_news where catid=$r[catid] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $n) { ?> 
                        <a href="<?php echo $n['url'];?>"> 
                        <li class="item">
                            <div class="pic">
                                <img src="<?php echo $n['thumb'];?>" alt="jianjei.jpg" width="169" height="120"/>
                               <!--  <div class="playbox">
                                    <a class="play" onclick="showDiv("<?php echo $n['content'];?>",784,517);">播放</a>
                                    <span class="play_bg"></span>
                                </div> -->
                            </div>
                            <div class="conts">
                                <p><?php echo $n['title'];?></p>
                            </div>
                        </li>
                        </a>    
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <?php } ?>                                                                                          
                    </ul>
                </div> 
                <!-- 视频列表结束 -->
                <div class="pages">
                    <span class="box btnpre"><script>createPageHTML(1, 0, "index", "htm");</script> </span>
                </div><!--end pages-->
            </div><!--end othersmain-->

        </div>
    </div><!--end otherswrap-->

    <div class="footer">
    <ul>        
        <li><a href="http://www.crc.com.cn/other_1/privacy/" title="隐私安全">隐私安全</a></li>
        <li>|</li>
        <li><a href="http://www.crc.com.cn/other_1/nav/" title="站外导航">站外导航</a></li>
        <li>|</li>
        <li><a href="http://www.crc.com.cn/other_1/banquan/" title="版权所有">版权所有</a></li>
        <li>|</li>
        <li><a href="http://www.crc.com.cn/other_1/faq/" title="常见问题">常见问题</a></li>
        <li>|</li>
        <li><a href="http://www.crc.com.cn/communication/contact/" title="联系方式">联系方式</a></li>
        
    </ul>

    <p>Copyright &copy; 华润（集团）有限公司　&nbsp;&nbsp; 京ICP备05045648号　&nbsp;&nbsp;   技术支持：华润集团信息管理部</p>
 <!--   <div class="btm"><img src="mystatic/video/picture/2013_cn.gif" alt="统计" /></div> -->
</div><!--end footer-->
<script src="mystatic/video/js/dma.js" type="text/javascript"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5190b9c7a9c9a676e2ddb146157eeb9b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</div><!--end overlay-->
<div class="gotopbox">
	<div style="display: none" id="goTopBtn">
    	<a class="iconbg btn-gotohome" href="http://www.crc.com.cn">返回到首页</a>
    	<a class="iconbg btn-gototop"  id="btn-gototop">回到顶部</a>
    </div>
</div>
<!--视频弹窗-->
<div id="divBacking"></div>
<!-- iframe-->

<div id="divframe">
<div id="js_frameClose" style="width: 50px; height: 50px; background: url(mystatic/video/images/2013_fancy_close.png) no-repeat scroll 0px 0px transparent; position: absolute; z-index: 9999; top: -30px; right: -30px; cursor: pointer;"></div>
    <iframe id="iframe" frameborder="0" scrolling="no" src="http://media.crc.com.hk/mas/play.html?path=" allowtransparency="true"></iframe>
</div>

<script type="text/javascript">
$('#js_frameClose').click(function(){
$('#iframe').attr("src","");
$('#divframe').fadeOut('fast');
$('#divBacking').fadeOut('fast');
});
</script>

</body>
</html>
<script src="mystatic/video/js/2013_jianfan.js" type="text/javascript"></script>