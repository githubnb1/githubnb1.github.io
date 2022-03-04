<?php

// 指定页面编码
header("content-type:text/json;charset=UTF-8");
//通过GET或者PST获取QQ号
$uin = $_GET['uin'];
$skey = $_GET['skey'];
$pskey = $_GET['pskey'];
//自定义接口后缀
$form = "禁止恶意调用";
$url ="http://mpz.zk0.top/svip/api.php?uin=$uin&skey=$skey&pskey=$pskey";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER,0);
    $output = curl_exec($ch);
    $jx = json_decode($output, true); 
    curl_close($ch);
    $code= $jx['code'];
    $ifok= $jx['ifok'];
    $msg = $jx['msg'];
   if($uin=="" or $skey=="" or $pskey==""){
    $data=array("ifok"=>$ifok,"code"=>-1,"msg"=>"缺少关键值!",'form'=>"$form");
    exit(json_encode($data,JSON_UNESCAPED_UNICODE));     
   }else{
    $data=array("ifok"=>$ifok,"code"=>$code,"msg"=>$msg,'form'=>$form);
    exit(json_encode($data,JSON_UNESCAPED_UNICODE));  
   }
    