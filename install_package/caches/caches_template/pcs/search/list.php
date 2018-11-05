<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>集团动态_华润集团欢迎您</title> 
  <link rel="stylesheet" href="mystatic/list_search/css/2013_base_1.css" /> 
  <link rel="stylesheet" href="mystatic/list_search/css/2013_mainbusiness_1.css" /> 
  <script src="mystatic/list_search/js/2013_modernizr-2.5.3.min_1.js"></script> 
  <script src="mystatic/list_search/js/2013_jquery-1.7.1.min_1.js"></script> 
  <script src="mystatic/list_search/js/2013_main_1.js"></script> 
  <script src="mystatic/list_search/js/2013_scroll_1.js"></script> 
  <script src="mystatic/list_search/js/2013_gototop_1.js"></script>
  <style>
body{font-family:Microsoft YaHei;}
.pages .box {
    margin: 0 2px;
    width:100%;
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



    var news_line = "<td height=1 background=mystatic/list_search/images/news_linebg_1.gif></td>";//浅线
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
    .logo a{display:inline-block;width:100px;height:50px;background:url("mystatic/list_search/images/logo_80th_new_1.png") left top no-repeat;}
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
      <a href="http://www.crc.com.cn/index_12770.htm"></a>
      <a class="logo-80th" href="http://www.crc.com.cn/80th/" target="_blank"></a> 
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
       <form target="_blank" method="get" action="index.php" name="search">
                    <input type="hidden" name="m" value="search" />
                    <input type="hidden" name="c" value="index" />
                    <input type="hidden" name="a" value="init" />
                    <input type="hidden" name="typeid" value="1" id="typeid"/>
                    <input type="hidden" name="siteid" value="1" id="siteid"/>                    
                    <input class="text" name="q" id="searchword" type="text" value />
                    <input class="iconbg btn-search-t" type="submit" value="search" />
                    
                </form>
      </div> 
     </div>
     <!--end h-right--> 
    </div>
    <!--end header_top--> 

    <!-- 导航栏开始 -->
    <div class="navbody"> 
     <div class="nav"> 
      <ul class="nav_ul"> 
       <li class="nav_li">
        <a class="on" href="?m=content&c=index&a=init" title="首页">首页</a>
       </li> 
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5a54570a56d96bb2ef96d044e249cf75&sql=select+%2A+from+v9_category+where+parentid%3D0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_category where parentid=0 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
       <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
       <li class="nav_li"> <a class="on" href="" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a> 
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
     <!-- 导航栏结束 -->

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
     <li class="sliderImage"><em class="img-top-bg"></em><img src="mystatic/list_search/picture/2013_news_f01_1.jpg" width="1920" height="320" alt="" /><span></span></li> 
    </ul> 
   </div> 
  </div>  
  <!--end other-topimg-->
 
  <div id="overlay"> 
   <div class="otherswrap" id="discover"> 
     <!-- 左侧列表栏start -->
    <div class="layout"> 
     


<!--end othersmenu--> 

     <div class="othersmain newsmain fr">
      
      <!-- 搜索结果start -->
     
        
      <div class="other-titles">   
        <h2>搜索结果</h2>  

       <div class="fr location">
        <span class="CurrChnlCls">您输入的关键词“<span style="color:#ff931a"><?php echo $q;?></span>”共有<?php echo $i;?>条相关信息（用时<?php echo sprintf("%01.2f", $execute_time);?> 秒）</span>             
        
       </div>            
      </div>
      <!-- 搜索结果end -->

      <!-- 搜索列表start -->
      <div class="newslist"> 
      <?php $keyword=$_GET['q'];?>   
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=6adf892014fbade324ecc2a6b1da5acf&sql=select+%2A+from+v9_news+where+title+like+%27%25%24keyword%25%27&num=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM (select * from v9_news where title like '%$keyword%') T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("select * from v9_news where title like '%$keyword%' LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>     
       <ul> 
        <!-- <?php echo var_dump($data);?> -->
            <?php $n=1; if(is_array($data)) foreach($data AS $i => $r) { ?>             
            <li> 
                <div class="time">
                  <span class="day"><?php echo date('d',$r['inputtime']);?> </span>
                  <span class="date"><?php echo date('Y-m',$r['inputtime']);?> </span>
                </div>          
                <div class="conts"> 
                  <h3>
                  <a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a>
                  </h3> 
                  <p><?php echo $r['description'];?><a class="more" href="<?php echo $r['url'];?>" target="_blank"><img src="mystatic/list_search/picture/2013_i08_1.gif" alt="更多" /></a></p> 
                </div>        
            </li> 
            <?php $n++;}unset($n); ?>
            
            <?php if(empty($data)) { ?>
            未找到结果！
            <?php } ?>    
     </ul> 
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
      <!--数据列表end--> 
      <div class="pages"> 
       <span class="box btnpre">
        <?php echo $pages;?>
        <!-- <script>createPageHTML(10, 0, "index", "htm");</script>  -->
       </span> 
      </div>
      <!--end pages--> 
     </div>
     <!--end othersmain--> 
    </div> 
</div>

   <!--end otherswrap--> 
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
    <p>Copyright &copy; 华润（集团）有限公司　&nbsp;&nbsp; 京ICP备05045648号　&nbsp;&nbsp; 技术支持：华润集团信息管理部</p> 
    <!--   <div class="btm"><img src="mystatic/list_search/picture/2013_cn_1.gif" alt="统计" /></div> --> 
   </div>
   <!--end footer--> 
   <script src="mystatic/list_search/js/dma_1.js" type="text/javascript"></script> 
   <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5190b9c7a9c9a676e2ddb146157eeb9b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script> 
   <!--end footer--> 
  </div>
  <!--end overlay--> 
  <div class="gotopbox"> 
   <div style="display: none" id="goTopBtn"> 
    <a class="iconbg btn-gotohome" href="?m=content&c=index&a=init">返回到首页</a> 
    <a class="iconbg btn-gototop" id="btn-gototop">回到顶部</a> 
   </div> 
  </div>   
  <script src="mystatic/list_search/js/2013_jianfan_1.js" type="text/javascript"></script>
 </body>
</html>