<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="华润（集团）有限公司是一家在香港注册和运营的多元化控股企业集团，其前身是1938年于香港成立的“联和行”，1948年改组更名为华润公司。2003年归属国务院国有资产监督管理委员会直接管理，被列为国有重点骨干企业。华润是与大众生活息息相关的多元化企业。" name="description" />
    <meta content="CRC,China Resources,华润,联和行,多元化企业,央企,6S,与您携手，改变生活,华润杂志,华润创业,华润电力,华润置地,华润水泥,华润燃气,华润医药,华润金融,华润万家,华润雪花,华润五丰,华润饮料,华润三九,华润银行,华润信托,华润投资,华润资产,华润健康,华润微电子,华润纺织,华润化工,华润物业,华润三洋,华润双鹤,万象城,怡宝,太平洋咖啡,苏果,中艺,雪花啤酒" name="keywords" />
    <link href="/images/favicon.ico" REL="shortcut icon" />
    <title>华润集团欢迎您</title>
    <link rel="stylesheet" href="mystatic/index/css/base.css" />
    <link rel="stylesheet" href="mystatic/index/css/index_80years.css" />    
    <script type="text/javascript" src="mystatic/index/js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="mystatic/index/js/scrollzt.js"></script>
    <script src="mystatic/index/js/tingyun_browser1.0.js" type="text/javascript"></script>
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
.logo a{display:inline-block;width:100px;height:50px;background:url("mystatic/index/images/logo_80th_new.png") left top no-repeat;}
.logo .logo-80th{ 
    background-position: -100px 0;
    width: 125px;
}
.header .nav li{padding-left:23px;}
.sub-ul06 {
    right: -102px;
}   
.sub-ul03 {
    right: -417px;
 }
.sub-ul03 ul li {
    display: inline-block;
    vertical-align: top;
}
.sub-ul02 {
    left: -40px;
}
.sub-ul01 {
    left: -85px;
}
.sub-ul04 {
    right: -136px;
    width: 560px;
}
.subnav-news{
    left: -223px
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
                <li class="li_a"><a href="" target="_blank" id="toCrcHome">综合内网</a></li>
                <li class="li_a li_Eng"><a href="https://mail.crc.com.hk/owa/" target="_blank">Web Mail</a></li>
                <li class="li_a"><a href="http://www.crc.com.cn/other/group/" target="_blank">华润网群</a></li>
                <li class="li_a li_Eng"><a href="http://en.crc.com.cn/">English</a></li>
                <li class="li_a"><a href="javascript:StranBody();" id="StranLink">繁體版</a></li>
            </ul>
            <!-- 搜索 -->
            <div class="fl h-r-search">

                <form target="_blank" method="get" action="index.php" name="search">
                    <input type="hidden" name="m" value="search"/>
                    <input type="hidden" name="c" value="index"/>
                    <input type="hidden" name="a" value="init"/>
                    <input type="hidden" name="typeid" value="1" id="typeid"/>
                    <input type="hidden" name="siteid" value="1" id="siteid"/>                   
                    <input class="text" name="q" id="q" type="text"/>
                    <input class="iconbg btn-search-t" type="submit" value="search"/>
                    
                </form>
            </div>       
        </div><!--end h-right-->
    </div><!--end header_top-->

    <!-- 导航栏开始 -->
    <div class="navbody">
        <div class="nav">
            <ul class="nav_ul">
                <li class="nav_li"><a class="on" href="?m=content&c=index&a=init" title="首页">首页</a></li> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5a54570a56d96bb2ef96d044e249cf75&sql=select+%2A+from+v9_category+where+parentid%3D0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_category where parentid=0 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>              
                <li class="nav_li">                    
                    <a class="on" href="" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a>
                    <div class="subnav sub-ul01">
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7c2b77507d5ff5549488d4dcfc54f22a&sql=select+%2A+from+v9_category+where+parentid%3D%24r%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_category where parentid=$r[catid] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
                            <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                            <li><a href="<?php echo $rr['url'];?>"><?php echo $rr['catname'];?></a></li>             
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>
                </li> 
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>     
            </ul>
        </div>
    </div>
    <!-- 导航结束 -->

    </div>
    <div class="subnavbg"></div>
</div><!--end header-->
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
        $.fn.extend({ 
         pingCrcHome:function(imgurl){  
          var _this=$(this);
          var img = new Image();  
          var start = new Date().getTime();  
          img.src = imgurl +"?t="+start;  
          var flag = false;  
          img.onload = function(){  
             flag = true; 
             _this.attr("href","http://home.crc.com.cn/");
          }  
          var timer = setTimeout(function(){  
            if(!flag){  
              flag = false; 
              _this.attr("href","./other/error/");
            }  
            clearTimeout(timer);
          },1000);  
         }
        }) 
  
  $("#toCrcHome").pingCrcHome('http://portal.crc.com.cn/CRCLogin/images/ldap_logo.png');

    });
</script>
<!--头部结束-->

<div class="banner-wrapper"  id="banner-slider" style='background:url("mystatic/index/images/banner_river.jpg") center top no-repeat;position:relative;'>
<div class="home-banner" id="banner-80th" style='background:none'></div>
<div class="pagination"><a class="on" data-idx="1" style="margin-right:15px;"></a><a data-idx="2"></a></div>
<a id="banner_title" href="http://www.crc.com.cn/80th/" target="_blank" style="position: absolute;bottom: 150px;left: 50%;margin-left: 346px;"><img src="mystatic/index/picture/banner_title.png" /></a>
    <style>
.animated {
    animation-duration: 1s;
    animation-fill-mode: both;
    animation-name: bounce;
    transform-origin: center bottom;
}
@keyframes bounce {
    0%,100%{
        transform: translateY(0)
    }

    50% {
        transform: translateY(-10px)
    }
}
        .new-column .first-ariticle-title a{
            color:#777;
        }
        .home-new-column .new-column{
            height:71px;
        }
    .videoPage{
        height: 20px;
        text-align: center;
        width: 266px;
        padding-top: 6px;
    }
    .videoPage a{
        width: 8px;
        height: 8px;
        background: #999;
        display: inline-block;
        border-radius: 10px;
        margin-right:8px;
        cursor: pointer;
    }
    .videoPage a.on{
        width:20px;
        background:#f99d32;
    }
    .videoWrapper{
        height:150px;
        overflow:hidden;
    }
    .videoWrapper img,.videoWrapper iframe{
        display:block;
    }
    .videoItem{
        float:left;
        position: relative;
    }
    .homevideo .homemain-conts{
        padding-top:0;
    }
    .homevideo .titels{
        margin-bottom:15px;
    }
    h4.videoTitle {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 30px;
        line-height: 30px;
        text-align: center;
        color: #fff;
        background: rgba(0,0,0,.6);
        font-weight: normal;
    }

.pagination{
    position: absolute;
    bottom: 160px;
    background: rgba(0,0,0,0.6);
    height: 25px;
    width: 80px;
    left: 50%;
    margin-left: -40px;
    border-radius: 25px;
    text-align:center;
}
.pagination a{
  display:inline-block;
    width: 10px;
    height: 10px;
    background: #c3c0a7;
    margin-top: 7px;
    border-radius: 10px;
    cursor:pointer;
}
.pagination a.on{background:#ffb403;}
    </style>
<div class="home-new-column" style=" background:#fff;background: rgba(255,255,255,0.7);">
    <div class="layout">
<div style=" width: 1100px;  overflow:  hidden;">
        <div class="new-column fuboshi fl">
            <h3 class="channel-name">
                <a href="https://winfo.crc.com.cn/column/fu/" target="_blank">傅博士观点<span class="icon-new"></span></a>
            </h3>
            
                <p class="first-ariticle-title" data-time="2018-09-05 17:17:00"><a href="http://winfo.crc.com.cn/column/fu/zl/201809/t20180905_466268.htm" target="_blank">直面“缺芯少魂”，华润要以振兴民族微...</a></p>
            
        </div>
        <div class="new-column innovation fl">
            <h3 class="channel-name">
                <a href="https://www.crc.com.cn/innovation/" target="_blank">创新之路<span class="icon-new"></span></a>
            </h3>
            
                <p class="first-ariticle-title" data-time="2018-09-11 10:08:00"><a href="./innovation/skilinnovation/news/201809/t20180911_467638.html" target="_blank">集团召开“十三五”战略中期检讨暨“创...</a></p>
            
        </div>
        <div class="new-column crchat fl">
            <h3 class="channel-name"><a href="https://crchat.crc.com.cn/" target="_blank">华润杂志<span class="icon-new"></span></a></h3>
            
                <p class="first-ariticle-title" data-time="2018-09-03 16:08:00">
                    <a href="https://crchat.crc.com.cn" target="_blank">2018年第3期 总第232期</a>
                </p>
            
        </div>
</div>
    </div>
</div>
</div>
<!-- 公告 -->
<div class="anoce">
    <div class="layout">
        <img class="icon-notice" src="mystatic/index/picture/icon_notice.png" alt="公告：" />
        <a href="?m=content&c=index&a=lists&catid=26" target="_blank" class="gg_more">
            <span>查看更多</span><img src="mystatic/index/picture/icon_more.png" />
        </a>

        <div id="anoceWrapper">
            <ul id="gonggao">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2f915b9d18035932f99c21f760d2bf96&sql=select+%2A+from+v9_news+where+catid%3D26\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_news where catid=26 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>         
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>       
            </ul>
        </div>
    </div>
</div>
<!-- 公告end -->

<div class="homemain">
    <div class="layout">
        <!-- 集团动态开始 -->
        <div class="homenews">
            <div class="titels">
                <h2 class="fl"><a href='?m=content&c=index&a=lists&catid=22' target="_blank">集团动态</a></h2>
                <div class="fr more">
                    <a class="a-more iconbg" href="?m=content&c=index&a=lists&catid=22" target="_blank"> 更多</a>
                </div>
            </div>
            <div class="homemain-conts homenews-conts" style="border:none;">
                <div class="hot-news-pic fl">                    
                        <div class="pic">
                            <img src='mystatic/index/picture/w020181003341908918329.jpg' onerror="javascript:this.src='./images/pic_bg.jpg'" width="450" height="280" />
                        </div>
                    
                </div>
                <!-- 列表start -->
                <ul class="hot-news-list fr">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=8dc760b83778b067248ccc280d65c94c&sql=select+%2A+from+v9_news+where+catid%3D22\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_news where catid=22 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li>
                            <h3>
                                <a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a>
                            </h3>
                            <p>
                               <?php echo $r['description'];?>
                            </p>
                        </li>
                        <?php $n++;}unset($n); ?> 
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>             
                           
                </ul>
                <!--列表end-->
            </div>
        </div>
        <!--集团动态结束-->

        <div class="wrap">
            <!-- 业务动态开始 -->
            <div class="homeview fl">
                <div class="titels">
                    <h2 class="fl">
                        <a href="?m=content&c=index&a=lists&catid=23" target="_blank">业务动态</a>
                    </h2>
                    <div class="fr more">
                        <a class="a-more iconbg" href="?m=content&c=index&a=lists&catid=23" target="_blank"> 更多 </a>
                    </div>
                </div>
                <!-- 列表start -->                
                <div class="homemain-conts">
                    <div class="homenews-list">
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=9bf8057672a80a37552a01742f5984d1&sql=select+%2A+from+v9_news+where+catid%3D23\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_news where catid=23 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
                            <li>
                                <a href="<?php echo $r1['url'];?>" target="_blank"><?php echo $r1['title'];?></a>
                            </li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>                   
                </div> 
                <!--列表end-->
            </div>
            <!-- 业务动态结束 -->
            <!-- 媒体焦点开始 -->
            <div class="homemedia fl">
                <div class="titels">
                    <h2 class="fl">
                        <a href="?m=content&c=index&a=lists&catid=25" target="_blank">媒体焦点</a>
                    </h2>
                    <div class="fr more">
                        <a class="a-more iconbg" href="?m=content&c=index&a=lists&catid=25" target="_blank">更多</a>
                    </div>
                </div>
                <div class="homemain-conts">
                    <div class="homenews-list">
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=4b56fbf845a35f594beeed690ad15771&sql=select+%2A+from+v9_news+where+catid%3D25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_news where catid=25 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r2) { ?>
                            <li>
                                <a href="<?php echo $r2['url'];?>" target="_blank"><?php echo $r2['title'];?></a>
                            </li>    
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                   
                        </ul>
                    </div>
                    <!--end homenews-list-->
                </div>
            </div>
            <!--媒体焦点-->
            <!-- 视频中心开始 -->
            <div class="homevideo fr">
                <div class="titels">
                    <h2 class="fl">
                        <a href="?m=content&c=index&a=lists&catid=72" target="_blank">宣传片</a>
                    </h2>                   
                    <div class="fr more">
                        <a class="a-more iconbg" href="?m=content&c=index&a=lists&catid=72" target="_blank">更多</a>
                    </div>
                </div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=73e4a12d4e56ab6fb213f4dd3bc47c47&sql=select+%2A+from+v9_news+where+catid%3D72\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_news where catid=72 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                <div class="homemain-conts videoWrapper"> 
                    <?php $n=1;if(is_array($data)) foreach($data AS $vi) { ?>
                    <div class="videoItem CuPlayer">
                        <div class="videoArea">                            
                            <a href="<?php echo $vi['url'];?>">
                                <img src="<?php echo $vi['thumb'];?>" class="js_play" style="cursor:pointer;" width="266px" height="150" />
                            </a>
                            <!-- <iframe class="js_ifr" scrolling="no" frameborder="0" marginwidth="0" allowtransparency="allowtransparency" src="" marginheight="0" style="width: 270px; height: 150px; display:none" data-src="{$vi['content'] "></iframe> -->
                            
                        </div>
                        <h4 class="videoTitle"><?php echo $vi['title'];?></h4>
                    </div>
                    <?php $n++;}unset($n); ?>                         
                </div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div class="videoPage"><a></a><a></a><a style="margin-right:0;"></a>
                </div>
            </div>
            <!-- 视频中心结束 -->
        </div>
        <!-- 留言板 -->
        <div class="homenews">
            <div class="titels">
                <h2 class="fl"><a href='javascript:void(0)' target="_blank">留言给我们</a></h2>               
            </div>
            <br/>
            <iframe height="250" marginheight="0" src="phpcms/templates/pcs/content/liuyan.html" frameborder="0" width="800" name="message" marginwidth="0" scrolling="no" align="top">
            </iframe>            
        </div>
        <!-- 留言板 -->
        <div class="homebtm" id="js_allBtm">
            <div class="leftBtn" id="js_prevImg"><a href="javascript:void(0);"></a></div>
            <div class="rightBtn" id="js_nextImg"><a href="javascript:void(0);"></a></div>
            <div class="mainCont" id="js_scrollBox">
                <ul>
                    
                        <li>
                        <span class="pic">
                            <a href="http://winfo.crc.com.cn/column/hryy/" target="_blank">
                                <img src='mystatic/index/picture/w020171215394725501354.png' alt="华润艺苑" />
                            </a>
                        </span>
                            <span class="tit">
                            <a href="http://winfo.crc.com.cn/column/hryy/" target="_blank">
                                华润艺苑
                            </a>
                        </span>
                        </li>
                    
                        <li>
                        <span class="pic">
                            <a href="http://crcf.crc.com.cn/" target="_blank">
                                <img src='mystatic/index/picture/w020171215394936032451.png' alt="慈善基金" />
                            </a>
                        </span>
                            <span class="tit">
                            <a href="http://crcf.crc.com.cn/" target="_blank">
                                慈善基金
                            </a>
                        </span>
                        </li>
                    
                        <li>
                        <span class="pic">
                            <a href="http://cru.crc.com.cn/" target="_blank">
                                <img src='mystatic/index/picture/w020171215395307651771.png' alt="华润大学" />
                            </a>
                        </span>
                            <span class="tit">
                            <a href="http://cru.crc.com.cn/" target="_blank">
                                华润大学
                            </a>
                        </span>
                        </li>
                    
                        <li>
                        <span class="pic">
                            <a href="http://careers.crc.com.cn/" target="_blank">
                                <img src='mystatic/index/picture/w020171215395432350969.png' alt="人才引进" />
                            </a>
                        </span>
                            <span class="tit">
                            <a href="http://careers.crc.com.cn/" target="_blank">
                                人才引进
                            </a>
                        </span>
                        </li>
                    
                        <li>
                        <span class="pic">
                            <a href="http://www.sasac.gov.cn/n2588025/n2588159/c7816202/content.html" target="_blank">
                                <img src='mystatic/index/picture/w020171209372502488956.png' alt="塞罕坝精神" />
                            </a>
                        </span>
                            <span class="tit">
                            <a href="http://www.sasac.gov.cn/n2588025/n2588159/c7816202/content.html" target="_blank">
                                塞罕坝精神
                            </a>
                        </span>
                        </li>
                    
                        <li>
                        <span class="pic">
                            <a href="http://winfo.crc.com.cn/news/zhuanglan/vision/" target="_blank">
                                <img src='mystatic/index/picture/w020171215395673570422.png' alt="国资动态" />
                            </a>
                        </span>
                            <span class="tit">
                            <a href="http://winfo.crc.com.cn/news/zhuanglan/vision/" target="_blank">
                                国资动态
                            </a>
                        </span>
                        </li>
                    
                        <li>
                        <span class="pic">
                            <a href="http://winfo.crc.com.cn/column/policy/" target="_blank">
                                <img src='mystatic/index/picture/w020171209375556470203.png' alt="政策法规" />
                            </a>
                        </span>
                            <span class="tit">
                            <a href="http://winfo.crc.com.cn/column/policy/" target="_blank">
                                政策法规
                            </a>
                        </span>
                        </li>
                    
                </ul>
            </div>
        </div>
        <div class="home-background">
            <img src="mystatic/index/picture/crc_background.png" width="261" height="401" />
        </div>
    </div>
</div>
<div class="footer">
    <ul>
       
        <li><a href="./other_1/privacy/" title="隐私安全">隐私安全</a></li>
        <li>|</li>
        <li><a href="./other_1/nav/" title="站外导航">站外导航</a></li>
        <li>|</li>
        <li><a href="./other_1/banquan/" title="版权所有">版权所有</a></li>
        <li>|</li>
        <li><a href="./other_1/faq/" title="常见问题">常见问题</a></li>
        <li>|</li>
        <li><a href="/communication/contact/" title="联系方式">联系方式</a></li>
        <li>|</li>
        <li><a href="/other/rss/" title="RSS订阅" class="f_rss">RSS订阅</a></li>
        
    </ul>

    <p>Copyright &copy; 华润（集团）有限公司　&nbsp;&nbsp; <a target="_blank" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action">京ICP备05045648号</a>　&nbsp;&nbsp;   技术支持：华润集团信息管理部</p>
  <!--  <div class="btm"><img src="mystatic/index/picture/cn.gif" alt="统计" /></div> -->
</div><!--end footer-->

<!--<script src="mystatic/index/js/dma.js" type="text/javascript"></script>-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?c0e95100226a77ae3fb3e5406800e3db";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript">
    $(function(){
        $(".js_play").click(function () {
            var _this=$(this),wrapper=_this.parent(),wrapperBox=wrapper.parent(),wrapperSiblings=wrapperBox.siblings();
            wrapperSiblings.find(".js_play").show();
            wrapperSiblings.find(".videoTitle").show();
            wrapperSiblings.find(".js_ifr").fadeOut("fast").attr("src","");
            _this.hide();wrapper.siblings(".videoTitle").hide();
            wrapper.find(".js_ifr").fadeIn('fast').attr("src", wrapper.find(".js_ifr").attr("data-src"));
        });  
    });
</script>
<script src="mystatic/index/js/jquery.superslide.js"></script>
<script src="mystatic/index/js/modernizr.js"></script>
<script type="text/javascript">
    $(function(){
        //公告
        jQuery("#anoceWrapper").slide({mainCell:"#gonggao",autoPage:true,effect:"topLoop",autoPlay:true});
jQuery(".homevideo").slide({mainCell:".videoWrapper",effect:"left",autoPlay:true,titCell:".videoPage a"});
        //判断三大板块更新
        function isLatestWeek(articlePubTime){//是否为最近一周
            if(!!articlePubTime){
                var now=new Date().getTime();
                articlePubTime=new Date(articlePubTime.replace(/\-/g,"\/")).getTime();
                return ((now-articlePubTime)/1000/3600/24) < 7;
            }
            return false;
        }

        (function(){
            $.each($(".channel-name"),function(k,v){
                if(isLatestWeek($(v).next(".first-ariticle-title").attr("data-time"))){
                    $(v).addClass("icon-show"); //显示new
                }
            });
        })();
        var banner=$("#banner-80th");
        //if(!Modernizr.placeholder){
            //ie9及以下
            //banner.empty();
           // banner.css("background-image","url('mystatic/index/images/banner_80th.jpg')");
       // }
        banner.on("click",function(){
            window.open("https://www.crc.com.cn/80th/");
        });
        $("#banner_title").hover(function(){
           $(this).addClass("animated")
        },function(){
           var _this=$(this);
           var timer=setTimeout(function(){
              _this.removeClass("animated");
              clearTimeout(timer);             
           },300)

        })
    });
</script>

<script>
$(function(){
var slideArr=[ "./images/banner_river.jpg" ,"./images/banner_1920x730.jpg"],curId=0,banner=$("#banner-slider"),page=$(".pagination a"),bannerInterval;
page.on("click",function(){
 var idx=$(this).index();
 sliderBanner(idx);
})

function sliderBanner(idx){
  banner.css("background-image","url('"mystatic/index/images/eb66e1f7da5e46bfb470ebfceac91b5d.gif"')");
  page.eq(idx).addClass("on").siblings().removeClass("on");
  curId=idx;
}


bannerInterval=setInterval(function(){
	sliderBanner((curId+1)%2);
},4000);

page.mouseenter(function(){
 clearInterval(bannerInterval);
}).mouseleave(function(){
bannerInterval=setInterval(function(){
	sliderBanner((curId+1)%2);
},4000);
});


});
</script>
<script src="mystatic/index/js/jianfan.js"></script>
</body>
</html>