<?php
require "common.php";

if ($set['autokeywords'] == 1) {
	$word = get_word();
} else {
	$word = "迪迦奥特曼";
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
 <head> 
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" /> 
  <meta http-equiv="Cache-Control" content="no-siteapp" /> 
  <meta name="apple-mobile-web-app-capable" content="yes" /> 
  <meta name="apple-touch-fullscreen" content="yes" /> 
  <meta name="apple-mobile-web-app-status-bar-style" content="black" /> 
  <meta name="full-screen" content="yes" />
  <!--UC强制全屏--> 
  <meta name="browsermode" content="application" />
  <!--UC应用模式--> 
  <meta name="x5-fullscreen" content="true" />
  <!--QQ强制全屏--> 
  <meta name="x5-page-mode" content="app" />
  <!--QQ应用模式--> 
  <title>闲渡搜索 - Xiandu.Me</title> 
  <meta name="keywords" content="闲渡导航,闲渡搜索,闲渡搜索导航,闲渡,闲渡工具,闲渡短网址,闲渡图床,闲渡在线ps,闲渡图床工具,闲渡音乐">
  <meta name="description" content="可能是最简洁的搜索导航，给你简单舒爽的搜索体验。">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
  <link href="css/style.css" rel="stylesheet" /> 
  <link href="css/sousuo.css" rel="stylesheet" /> 
  <link rel="stylesheet" href="//at.alicdn.com/t/font_1230786_gdvd1b4wlz.css" /> 
  <link rel="stylesheet" href="//at.alicdn.com/t/font_1572019_yrk10qvz.css" /> 
  <script src="https://cdnjs.loli.net/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="js/xd.js"></script> 
 </head> 
 <body> 
  <div id="menu">
   <i></i>
  </div> 
  <div class="list closed"> 
   <ul>
    <li class="title"><i class="iconfont icon-changyong"></i> 常用</li> 
    <li><a rel="nofollow" href="http://music.xiandu.me/" target="_blank"><i class="iconfont icon-kologom" style="color: #f03;"></i>音乐下载</a></li> 
    <li><a rel="nofollow" href="http://tu.xiandu.me/" target="_blank"><i class="iconfont icon-tupian" style="color: #f90;"></i>闲渡图床</a></li> 
    <li><a rel="nofollow" href="http://ps.xiandu.me/" target="_blank"><i class="iconfont icon-p" style="color: #fff;"></i>在线ps</a></li> 
    <li><a rel="nofollow" href="http://t.xiandu.me/" target="_blank"><i class="iconfont icon-Qyouhuiquan" style="color: #2196f3;"></i>淘宝优惠券</a></li> 
    <li><a rel="nofollow" href="http://dwz.xiandu.me/" target="_blank"><i class="iconfont icon-fuzhilianjiexian-" style="color: #f05;"></i>短网址生成</a></li>
    <!----> 
    <li class="title"><i class="iconfont icon-youxiang"></i> 邮箱</li> 
    <li><a rel="nofollow" href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="iconfont icon-gmail" style="color: #f03;"></i>Gmail</a></li> 
    <li><a rel="nofollow" href="https://outlook.live.com/mail/" target="_blank"><i class="iconfont icon-windows" style="color: #059;"></i>Hotmail</a></li> 
    <li><a rel="nofollow" href="https://mail.163.com/" target="_blank"><i class="iconfont icon-wangyi" style="color: #169;"></i>网易邮箱</a></li> 
    <li><a rel="nofollow" href="https://mail.sina.com.cn/" target="_blank"><i class="iconfont icon-xinlang" style="color: #e6162d;"></i>新浪邮箱</a></li> 
    <li><a rel="nofollow" href="https://mail.qq.com/" target="_blank"><i class="iconfont icon-QQ" style="color: #f05;"></i>QQ邮箱</a></li> 
    <li><a rel="nofollow" href="https://qiye.aliyun.com/" target="_blank"><i class="iconfont icon-yunyouxiang" style="color: #f15534;"></i>阿里邮箱</a></li> 
    <!----> 
    <li class="title"><i class="iconfont icon-msg"></i> 论坛、社交</li> 
    <li><a rel="nofollow" href="https://www.52pojie.cn/" target="_blank"><i class="iconfont icon-wuaipojie" style="color: #fff;"></i>吾爱破解</a></li>
    <li><a rel="nofollow" href="https://www.csdn.net/" target="_blank"><i class="iconfont icon-csdn" style="color: #f03;"></i>CSDN</a></li> 
    <li><a rel="nofollow" href="https://www.v2ex.com/" target="_blank"><i class="iconfont icon-vex" style="color: #2196f3;"></i>V2EX</a></li>
    <li><a rel="nofollow" href="https://www.weibo.com" target="_blank"><i class="iconfont icon-weibo" style="color: #e6162d;"></i>微博</a></li> 
    <li><a rel="nofollow" href="https://www.zhihu.com/" target="_blank"><i class="iconfont icon-zhihu" style="color: #0084ff;"></i>知乎</a></li> 
    <li><a rel="nofollow" href="https://www.douban.com/" target="_blank"><i class="iconfont icon-douban" style="color: #072;"></i>豆瓣</a></li> 
    <li><a rel="nofollow" href="https://www.instagram.com" target="_blank"><i class="iconfont icon-instagram" style="color: #93009f;"></i>Instagram</a></li> 
    <li><a rel="nofollow" href="https://www.twitter.com" target="_blank"><i class="iconfont icon-twitter" style="color: #00bcff;"></i>Twitter</a></li> 
    <li><a rel="nofollow" href="https://www.facebook.com" target="_blank"><i class="iconfont icon-facebook" style="color: #4267b2;"></i>Facebook</a></li> 
    <!----> 
    <li class="title"><i class="iconfont icon-shipin"></i> 视频媒体</li> 
    <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank"><i class="iconfont icon-youtube" style="color:#f03;"></i>Youtube</a></li> 
    <li><a rel="nofollow" href="https://v.qq.com/" target="_blank"><i class="iconfont icon-tengxunshipin" style="color:#2a0;"></i>腾讯视频</a></li> 
    <li><a rel="nofollow" href="https://www.youku.com/" target="_blank"><i class="iconfont icon-youku" style="color:#09e;"></i>优酷</a></li> 
    <li><a rel="nofollow" href="https://www.iqiyi.com/" target="_blank"><i class="iconfont icon-aiqiyi" style="color:#1d0;"></i>爱奇艺</a></li> 
    <li><a rel="nofollow" href="http://www.zmz2019.com/" target="_blank"><i class="iconfont icon-zimu" style="color: #067;"></i>字幕组</a></li> 
    <li><a rel="nofollow" href="http://www.acfun.cn/index.html" target="_blank"><i class="iconfont icon-acfun" style="color:#f33;"></i>ACFUN</a></li> 
    <li><a rel="nofollow" href="https://www.bilibili.com/" target="_blank"><i class="iconfont icon-bili" style="color:#09e;"></i>哔哩哔哩</a></li> 
    <!----> 
    <li class="title"><i class="iconfont icon-sheji"></i> 设计视觉</li> 
    <li><a rel="nofollow" href="https://www.dribbble.com/" target="_blank"><i class="iconfont icon-dribbble" style="color:#e48;"></i>Dribbble</a></li> 
    <li><a rel="nofollow" href="https://www.pinterest.com/" target="_blank"><i class="iconfont icon-pinterest" style="color:#e02;"></i>Pinterest</a></li> 
    <li><a rel="nofollow" href="https://www.behance.net/" target="_blank"><i class="iconfont icon-behance" style="color:#56f;"></i>Behance</a></li>  
    <li><a rel="nofollow" href="https://www.iconfinder.com/" target="_blank"><i class="iconfont icon-eye"></i>IconFinder</a></li> 
    <li><a rel="nofollow" href="https://huaban.com/" target="_blank"><i class="iconfont icon-huaban" style="color:#f06;"></i>花瓣</a></li> 
    <li><a rel="nofollow" href="https://ui.cn/" target="_blank"><i class="iconfont icon-uizhongguo"></i>UI中国</a></li> 
    <li><a rel="nofollow" href="https://www.zcool.com.cn/" target="_blank"><i class="iconfont icon-zhanku" style="color:#f90;"></i>站酷</a></li> 
    <li><a rel="nofollow" href="https://www.iconfont.cn/" target="_blank"><i class="iconfont icon-iconfont" style="color: #ff6019;"></i>阿里图标</a></li>
    <li><a rel="nofollow" href="https://www.uisdc.com/" target="_blank"><i class="iconfont icon--youshe" style="color:#0aa;"></i>优设</a></li> 
    <!----> 
    <li class="title"><i class="iconfont icon-ai-tool"></i> 工具</li> 
    <li><a rel="nofollow" href="/ip/" target="_blank"><i class="iconfont icon-IP" style="color: #02f;"></i>IP查询</a></li> 
    <li><a rel="nofollow" href="https://translate.google.cn/?hl=zh-CN" target="_blank"><i class="iconfont icon-fanyi" style="color: #02f;"></i>谷歌翻译</a></li> 
    <li><a rel="nofollow" href="http://www.slimego.cn/" target="_blank"><i class="iconfont icon-shilaimu" style="color: #0f89c2;"></i>史莱姆</a></li> 
    <li><a rel="nofollow" href="https://gugeji.com/" target="_blank"><i class="iconfont icon-google" style="color:#4285f4"></i>镜像</a></li> 
    <li><a rel="nofollow" href="https://feedly.com" target="_blank"><i class="iconfont icon-feedly" style="color: #11dd00;"></i>Feedly</a></li> 
    <li><a rel="nofollow" href="https://pan.baidu.com" target="_blank"><i class="iconfont icon-baiduyun" style="color: #148bfe;"></i>百度网盘</a></li> 
    <li><a rel="nofollow" href="https://www.baiduwp.com" target="_blank"><i class="iconfont icon-cloud-download" style="color: #148bfe;"></i>网盘解析</a></li> 
    <li><a rel="nofollow" href="https://www.mdeditor.com/" target="_blank"><i class="iconfont icon-md" style="color:#09f;"></i>MD编辑器</a></li> 
    <li><a rel="nofollow" href="https://miku.tools/" target="_blank"><i class="iconfont icon-ai-tool"></i>Miku工具</a></li> 
    <li><a rel="nofollow" href="http://cubic-bezier.com" target="_blank"><i class="iconfont icon-quxian" style="color: #f08;"></i>贝赛尔曲线</a></li> 
    <li><a rel="nofollow" href="/base64/" target="_blank"><i class="iconfont icon-base64" style="color:#1d0;"></i>Base64</a></li> 
    <li><a rel="nofollow" href="https://javascriptobfuscator.com/Javascript-Obfuscator.aspx" target="_blank"><i class="iconfont icon-jshunxiao" style="color: #48c;"></i>JS混淆器</a></li> 
    <li><a rel="nofollow" href="https://ping.pe" target="_blank"><i class="iconfont icon-wangluo1" style="color:#1d0;"></i>Ping.pe</a></li> 
    <li><a rel="nofollow" href="https://ping.chinaz.com/" target="_blank"><i class="iconfont icon-pingup" style="color:#2361ad;"></i>站长Ping</a></li> 
    <!----> 
    <li class="title"><i class="iconfont icon-kongzhitai"></i> 开发</li> 
    <li><a rel="nofollow" href="http://www.w3school.com.cn/" target="_blank"><i class="iconfont icon-h5" style="color:#c03;"></i>W3school</a></li> 
    <li><a rel="nofollow" href="https://github.com/" target="_blank"><i class="iconfont icon-github"></i>Github</a></li> 
    <li><a rel="nofollow" href="https://codepen.io/" target="_blank"><i class="iconfont icon-codepen"></i>Codepen</a></li> 
    <li><a rel="nofollow" href="https://segmentfault.com/" target="_blank"><i class="iconfont icon-msg" style="color:#096;"></i>SF思否</a></li> 
    <li><a rel="nofollow" href="https://cdnjs.com/" target="_blank"><i class="iconfont icon-cdnjs" style="color: #e52;"></i>CdnJs</a></li> 
    <li><a rel="nofollow" href="https://fontawesome.com/icons?d=gallery&amp;m=free" target="_blank"><i class="iconfont icon-font-awesome" style="color: #4af;"></i>Font A.</a></li> 
    <li><a rel="nofollow" href="https://msdn.itellyou.cn/" target="_blank"><i class="iconfont icon-windows" style="color: #48c;"></i>MSDN下载</a></li> 
    <li><a rel="nofollow" href="https://dash.cloudflare.com/" target="_blank"><i class="iconfont icon-cloudflare" style="color: #f37f20;"></i>CFcdn</a></li> 
    <li><a rel="nofollow" href="https://www.swiper.com.cn/" target="_blank"><i class="iconfont icon-S" style="color:#065fe3;"></i>Swiper</a></li> 
   </ul> 
  </div> 
  <div id="search" class="s-search">
   <div id="search-list" class="hide-type-list">
    <div class="s-type">
     <span></span>
     <div class="s-type-list animated fadeInUp">
      <label for="type-baidu">常用</label>
      <label for="type-search">搜索</label>
      <label for="type-br">工具</label>
      <label for="type-zhihu">社区</label>
      <label for="type-taobao1">生活</label>
     </div>
    </div>
    <div class="search-group group-a">
     <span class="type-text">常用</span>
     <ul class="search-type">
      <li><input onclick="bw()" checked="" hidden="" type="radio" name="type" id="type-baidu" value="https://www.baidu.com/s?wd=" data-placeholder="百度一下" /><label for="type-baidu"><span>百度</span></label></li>
      <li><input onclick="bq()" hidden="" type="radio" name="type" id="yyss" value="https://www.xiandu.me/" data-placeholder="影视搜索" /><label for="yyss"><span>影视</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-taobao" value="http://music.xiandu.me/?type=netease&amp;name=" data-placeholder="音乐搜索下载" /><label for="type-taobao"><span>音乐</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-bing1" value="http://t.xiandu.me/index.php?input=2&amp;r=l&amp;kw=" data-placeholder="淘宝优惠券" /><label for="type-bing1"><span>优惠券</span></label></li>
     </ul>
    </div>
    <div class="search-group group-b">
     <span class="type-text">搜索</span>
     <ul class="search-type">
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-search" value="https://www.baidu.com/s?wd=" data-placeholder="百度一下" /><label for="type-search"><span>百度</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-google" value="https://www.google.com/search?q=" data-placeholder="谷歌两下" /><label for="type-google"><span>Google</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-360" value="https://www.so.com/s?q=" data-placeholder="360好搜" /><label for="type-360"><span>360</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-sogo" value="https://www.sogou.com/web?query=" data-placeholder="搜狗搜索" /><label for="type-sogo"><span>搜狗</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-bing" value="https://cn.bing.com/search?q=" data-placeholder="微软Bing搜索" /><label for="type-bing"><span>Bing</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-sm" value="https://yz.m.sm.cn/s?q=" data-placeholder="UC移动端搜索" /><label for="type-sm"><span>神马</span></label></li>
     </ul>
    </div>
    <div class="search-group group-c">
     <span class="type-text">工具</span>
     <ul class="search-type">
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-br" value="http://rank.chinaz.com/all/" data-placeholder="请输入网址(不带http://)" /><label for="type-br"><span>权重查询</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-links" value="http://link.chinaz.com/" data-placeholder="请输入网址(不带http://)" /><label for="type-links"><span>友链检测</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-icp" value="https://icp.aizhan.com/" data-placeholder="请输入网址(不带http://)" /><label for="type-icp"><span>备案查询</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-ping" value="http://ping.chinaz.com/" data-placeholder="请输入网址(不带http://)" /><label for="type-ping"><span>PING检测</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-404" value="http://tool.chinaz.com/Links/?DAddress=" data-placeholder="请输入网址(不带http://)" /><label for="type-404"><span>死链检测</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-ciku" value="http://www.ciku5.com/s?wd=" data-placeholder="请输入关键词" /><label for="type-ciku"><span>关键词挖掘</span></label></li>
     </ul>
    </div>
    <div class="search-group group-d">
     <span class="type-text">社区</span>
     <ul class="search-type">
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-zhihu" value="https://www.zhihu.com/search?type=content&amp;q=" data-placeholder="知乎" /><label for="type-zhihu"><span>知乎</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-wechat" value="http://weixin.sogou.com/weixin?type=2&amp;query=" data-placeholder="微信" /><label for="type-wechat"><span>微信</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-weibo" value="http://s.weibo.com/weibo/" data-placeholder="微博" /><label for="type-weibo"><span>微博</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-douban" value="https://www.douban.com/search?q=" data-placeholder="豆瓣" /><label for="type-douban"><span>豆瓣</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-why" value="https://ask.seowhy.com/search/?q=" data-placeholder="SEO问答社区" /><label for="type-why"><span>搜外问答</span></label></li>
     </ul>
    </div>
    <div class="search-group group-e">
     <span class="type-text">生活</span>
     <ul class="search-type">
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-taobao1" value="http://t.xiandu.me/index.php?input=2&amp;r=l&amp;kw=" data-placeholder="淘宝优惠券" /><label for="type-taobao1"><span>优惠券</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-快递100" value="http://www.kuaidi100.com/?" data-placeholder="快递100" /><label for="type-快递100"><span>快递100</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-xiachufang" value="http://www.xiachufang.com/search/?keyword=" data-placeholder="下厨房" /><label for="type-xiachufang"><span>下厨房</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-xiangha" value="https://www.xiangha.com/so/?q=caipu&amp;s=" data-placeholder="香哈菜谱" /><label for="type-xiangha"><span>香哈菜谱</span></label></li>
      <li><input onclick="bw()" hidden="" type="radio" name="type" id="type-12306" value="http://www.12306.cn/?" data-placeholder="12306" /><label for="type-12306"><span>12306</span></label></li>
      <li> <input onclick="bw()" hidden="" type="radio" name="type" id="type-qunar" value="https://www.qunar.com/?" data-placeholder="去哪儿" /><label for="type-qunar"><span>去哪儿</span></label></li>
     </ul>
    </div>
   </div>
   <form action="https://www.baidu.com/s?wd=" method="get" target="_blank" id="super-search-fm">
    <input type="text" id="search-text" placeholder="输入关键字搜索" style="outline:0" />
    <button type="submit"><i class="iconfont icon-xdss"></i></button>
    <ul id="ul" class="ko"></ul>
   </form>
   <div id="yy" style="display:none;">
    <input type="text" id="kos" placeholder="<?php echo $word; ?>" />
    <button type="submit" id="kob"><i class="iconfont icon-xdss"></i></button>
    <ul id="kol" class="ko"></ul>
   </div>
   <div class="set-check hidden-xs">
    <input type="checkbox" id="set-search-blank" class="bubble-3" autocomplete="off" />
   </div>
  </div> 
  <script type="text/javascript" src="js/yyss.js"></script>
  <script type="text/javascript" src="js/sousuo.js"></script> 
  <script type="text/javascript" src="js/lianxiang.js"></script> 
  <div class="bgo"></div> 
  <img class="logo" src="http://xiandus.gitee.io/xd/logo.svg" />  
 </body>
</html>
<!--
网址：https://xiandu.me
github：https://github.com/xiandus/search
                XianDu，2020.1.6
-->