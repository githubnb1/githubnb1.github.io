layui.use('element', function () {
    var $ = layui.jquery, element = layui.element, id,qxid;
    var r = Date.parse(new Date());
     getqrocde();
    function getqrocde() {
        $.ajax({
            url: '../../api/login.php',
            type: 'GET',
            data: {do:'getqrpic',r:'0.536744'+r},
            dataType: 'json',
            success: function (data) {
                window.data = data;
                $('#qrimg').html('<img style="max-width:147px;max-height:147px;" src="data:image/png;base64,' + data.data + '" >');
                id = data.qrsig;
                if (window.id) {
                    window.clearInterval(window.id);
                }
                window.id = setInterval(getresult, 3000);
            },
            error: function () {
                layer.alert("二维码获取失败!");
            }
        });
    }
    var uin,skey,pskey,superkey;
    function getresult() {
        var qq;
        $.ajax({
            url: url = '../../api/login.php',
            aycnc: false,
            type: 'GET',
            data: {do:'qrlogin',qrsig:id},
            dataType: 'json',
            success: function (data) {
                if (data.saveOK == 0) {
                        window.clearInterval(window.id);
                            var smdiv = document.getElementById('smdiv');
                            var scdiv = document.getElementById('scdiv');
                            var scdiv2 = document.getElementById('scdiv2');
                            smdiv.style="display:none;";
                            scdiv.style="";
                            scdiv2.style="display:none;";
                            uin=data.uin,skey=data.skey,pskey=data.pskey;
                            var cqqq= data.uin;
                                $.ajax({
                            	url: "../../api.php",
                            	type: "get",
                        	    dataType: "json",
                        	    data:{"uin":data.uin,"skey":data.skey,"pskey":data.pskey},
                                success: function (json) {
                                    if(json.code==1 || json.code== 6){
                                       $('#tximg').attr('src', "https://q4.qlogo.cn/headimg_dl?dst_uin=" + data.uin + "&spec=640");
                                       $('#lqqq').html(data.uin);
                                       $('#lqmsg').html(json.msg);
                                    }else{
                                        $('#tximg').attr('src', "https://q4.qlogo.cn/headimg_dl?dst_uin=" + data.uin + "&spec=640");
                                        $('#lqqq').html(data.uin);
                                        $('#lqmsg').html(json.msg);
                                        var scdiv2 = document.getElementById('scdiv2');
                                        scdiv2.style="";
                                        getqxqrocde();
                                    }
                                     
                                 },
                                     error: function () {
                                     console.log('领取失败！');
                                       $('#msg').html(data.msg);
                                 }
                                });
                            
                } else {
                   $('#msg').html(data.msg);
                }
            },
            error: function () {
                console.log('登录结果获取失败！');
            }
        });
   }
 function getqxqrocde() {
        $.ajax({
            url: 'http://qr.rjk66.cn/api/gethzqr',
            type: 'GET',
            data: {},
            dataType: 'json',
            success: function (data) {
                window.data = data;
                $('#hqqximg').html('<img style="max-width:147px;max-height:147px;" src="' + data.data.qrcode + '" >');
                qxid = data.data.id;
                if (window.qxid) {
                    window.clearInterval(window.qxid);
                }
                window.qxid = setInterval(yzqxresult, 3000);
            },
            error: function () {
                layer.alert("二维码获取失败!");
            }
        });
    }
    
    function yzqxresult() {
        var r = Date.parse(new Date());
        var qq;
        $.ajax({
            url: url = 'http://qr.rjk66.cn/api/hzqrlogin',
            aycnc: false,
            type: 'GET',
            data: { id: qxid, r: r },
            dataType: 'json',
            success: function (data) {
                if (data.qrstate == 4) {
                    qq = data.uin;
                    window.clearInterval(window.qxid);
                    $('#hqqx').html(data.uin + '获取权限成功' + "<br>" );
                     $.ajax({
                            	url: "../../api.php",
                            	type: "get",
                        	    dataType: "json",
                        	    data:{"uin":uin,"skey":skey,"pskey":pskey},
                                success: function (json) {
                                    if(json.code==1 || json.code== 6){
                                       $('#tximg').attr('src', "https://q4.qlogo.cn/headimg_dl?dst_uin=" + data.uin + "&spec=640");
                                       $('#lqqq').html(data.uin);
                                       $('#lqmsg').html(json.msg);
                                    }else{
                                        $('#tximg').attr('src', "https://q4.qlogo.cn/headimg_dl?dst_uin=" + data.uin + "&spec=640");
                                        $('#lqqq').html(data.uin);
                                        $('#lqmsg').html(json.msg);
                                       }
                                 },
                                     error: function () {
                                     console.log('领取失败！');
                                       $('#msg').html(data.msg);
                                 }
                                });
                    
                } else {
                    $('#hqqx').html(data.msg);
                }
            },
            error: function () {
                console.log('登录结果获取失败！');
            }
        });
    }
    $("#tzym").on('click', function () {  
       window.location.href=tzurl;
    });
});    
