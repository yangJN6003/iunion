<?php
// class JSSDK {
//   private $appId;
//   private $appSecret;

//   public function __construct($appId, $appSecret) {
//     $this->appId = $appId;
//     $this->appSecret = $appSecret;
//   }

//   public function getSignPackage() {
//     $jsapiTicket = $this->getJsApiTicket();

//     // 注意 URL 一定要动态获取，不能 hardcode.
//     $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
//     $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//     $timestamp = time();
//     $nonceStr = $this->createNonceStr();

//     // 这里参数的顺序要按照 key 值 ASCII 码升序排序
//     $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

//     $signature = sha1($string);

//     $signPackage = array(
//       "appId"     => $this->appId,
//       "nonceStr"  => $nonceStr,
//       "timestamp" => $timestamp,
//       "url"       => $url,
//       "signature" => $signature,
//       "rawString" => $string
//     );
//     return $signPackage; 
//   }

//   private function createNonceStr($length = 16) {
//     $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
//     $str = "";
//     for ($i = 0; $i < $length; $i++) {
//       $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
//     }
//     return $str;
//   }

//   private function getJsApiTicket() {
//     // jsapi_ticket 应该全局存储与更新，以下代码以写入到文件中做示例
//     $data = json_decode(file_get_contents("jsapi_ticket.json"));
//     if ($data->expire_time < time()) {
//       $accessToken = $this->getAccessToken();
//       // 如果是企业号用以下 URL 获取 ticket
//       // $url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$accessToken";
//       $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";
//       $res = json_decode($this->httpGet($url));
//       $ticket = $res->ticket;
//       if ($ticket) {
//         $data->expire_time = time() + 7000;
//         $data->jsapi_ticket = $ticket;
//         $fp = fopen("jsapi_ticket.json", "w");
//         fwrite($fp, json_encode($data));
//         fclose($fp);
//       }
//     } else {
//       $ticket = $data->jsapi_ticket;
//     }

//     return $ticket;
//   }

//   public function getAccessToken() {
//     // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
//     $data = json_decode(file_get_contents("access_token.json"));
//     if ($data->expire_time < time()) {
//       // 如果是企业号用以下URL获取access_token
//       // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";
//       $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
//       $res = json_decode($this->httpGet($url));
//       $access_token = $res->access_token;
//       if ($access_token) {
//         $data->expire_time = time() + 7000;
//         $data->access_token = $access_token;
//         $fp = fopen("access_token.json", "w");
//         fwrite($fp, json_encode($data));
//         fclose($fp);
//       }
//     } else {
//       $access_token = $data->access_token;
//     }
//     return $access_token;
//   }

//   private function httpGet($url) {
//     $curl = curl_init();
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($curl, CURLOPT_TIMEOUT, 500);
//     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//     curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
//     curl_setopt($curl, CURLOPT_URL, $url);

//     $res = curl_exec($curl);
//     curl_close($curl);

//     return $res;
//   }
// }

// $jssdk = new JSSDK("wx129325db79888ee1", "9e21fbec9c5fe8926a4f3ce0c4634529");
// $signPackage = $jssdk->GetSignPackage();
// $access_token=$jssdk->getAccessToken();
?>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-size: 30px;
			
		}
		header{
			
		}
		header .bar{
			background-image: url('<?php echo base_url() ?>extra/imgs/arrow.png');
			background-repeat: no-repeat;
			background-position: 10% 10px;
			-webkit-background-size: 16px 24px;
			background-size: 16px 24px;
			background-color: #F96332;
			height: 50px;
			width: 100%;
			line-height: 50px;
			text-align: center;
			color: #fff;
			letter-spacing:4px
		}
		header .box{
			background-color: #EC5E2F;
			height: 200px;
			width: 100%;
			padding: 10px;
			text-align: center;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			-webkit-box-sizing: border-box;
		}
		.headimg{
			width: 80px;
			height: 80px;
			background-color: #809;
			border-radius: 100%;
			display: inline-block;
		}
		.name{
			font-size: 32px;
			font-weight: bolder;
			display: block;
			margin: 0 auto;
			text-align: center;
			color: #ffffff;
		}
		.qianming{
			font-size: 14px;
			display: block;
			margin: 0 auto;
			text-align: center;
			color: rgba(221,221,221,0.7);
		}
		.main{
			
		}
		.left{
			background-image: url('<?php echo base_url() ?>extra/imgs/comment.png');
			background-repeat: no-repeat;
			background-position: center; 
			min-height: 64px;
			width:25%;
			float: left;
		}
		.right{
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			width:75%;
			float: left;
			padding: 5px 10px;
			font-size: 16px;
			
		}
		.title{
			font-size: 20px;
			color: #EC5E2F;
		}
		.info{
			font-size: 16px;
			color: #999;
		}
		.line{
			background-color: #DDD;
			width: 100%;
			height: 1px;
			float: left;
		}
		.joinbox{
			width: 100%;
			height: 50px;
			clear: both;
			padding: 20px 0;
		}
		.join{
			text-decoration: none;
			color: #fff;
			display: block;
			width: 60%;
			height: 45px;
			margin: 10px auto;
			background-color: #EC5E2F;
			text-align: center;
			border-radius: 45px;
			line-height: 45px;
			font-size: 20px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>extra/css/button.css">
</head>
<body>
<header>
	<div class="bar" id="bar">
		INANKAI
	</div>
	<div class="box">
		<span class="headimg"><img class="headimg" src="<?php echo $info[0]->pic ?>" alt=""></span>
		<span class="name"><?php echo $info[0]->name ?></span>
		<span class="qianming"><?php echo $info[0]->qianming ?></span>
	</div>
</header>
<div class="main">
	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">公众号</div>
			<div class="info"><?php echo $info[0]->gongzhonghao ?></div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">社团简介</div>
			<div class="info"><?php echo $info[0]->description ?></div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">所获荣誉</div>
			<div class="info"><?php echo $info[0]->award ?></div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">组织划分</div>
			<div class="info"><?php echo $info[0]->bumenhuafen ?></div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">纳新对象</div>
			<div class="info"><?php echo $info[0]->naxinduixiang ?></div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">截止时间</div>
			<div class="info"><?php echo $info[0]->jiezhiriqi ?></div>
		</div>
	</div>
	<div class="line"></div>

	<div class="joinbox">
		<a class="join" href="<?php echo site_url('League/leagueJoin').'/'.$info[0]->id ?>">加入社团</a>
	</div>
	<br>
	<br>
	
</div>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script type="text/javascript">
		document.getElementById("bar").onclick=function(){
			window.history.back();
		}
	</script>
	<script type="text/javascript">
	  wx.config({
    debug: false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
      'checkJsApi',
      'onMenuShareTimeline',
      'onMenuShareAppMessage',
      'onMenuShareQQ',
      'onMenuShareWeibo',
      'hideMenuItems',
      'showMenuItems',
      'hideAllNonBaseMenuItem',
      'showAllNonBaseMenuItem',
      'translateVoice',
      'startRecord',
      'stopRecord',
      'onRecordEnd',
      'playVoice',
      'pauseVoice',
      'stopVoice',
      'uploadVoice',
      'downloadVoice',
      'chooseImage',
      'previewImage',
      'uploadImage',
      'downloadImage',
      'getNetworkType',
      'openLocation',
      'getLocation',
      'hideOptionMenu',
      'showOptionMenu',
      'closeWindow',
      'scanQRCode',
      'chooseWXPay',
      'openProductSpecificView',
      'addCard',
      'chooseCard',
      'openCard'
      ]
    });
wx.ready(function () {
    // 在这里调用 API
    wx.onMenuShareTimeline({
	    title: <?php echo $info[0]->name ?>+'线上百团大战纳新报名', // 分享标题
	    link: window.location.href, // 分享链接
	    imgUrl: <?php echo $info[0]->pic ?>, // 分享图标
	    success: function () { 
	        // 用户确认分享后执行的回调函数
	    },
	    cancel: function () { 
	        // 用户取消分享后执行的回调函数
	    }
	});
	wx.onMenuShareAppMessage({
	    title: <?php echo $info[0]->name ?>+'线上百团大战纳新报名', // 分享标题
	    desc: <?php echo $info[0]->qianming ?>, // 分享描述
	    link: window.location.href, // 分享链接
	    imgUrl: <?php echo $info[0]->pic ?>, // 分享图标
	    type: '', // 分享类型,music、video或link，不填默认为link
	    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
	    success: function () { 
	        // 用户确认分享后执行的回调函数
	    },
	    cancel: function () { 
	        // 用户取消分享后执行的回调函数
	    }
	});
	wx.onMenuShareQQ({
	    title: <?php echo $info[0]->name ?>+'线上百团大战纳新报名', // 分享标题
	    desc: <?php echo $info[0]->qianming ?>, // 分享描述
	    link: window.location.href, // 分享链接
	    imgUrl: <?php echo $info[0]->pic ?>, // 分享图标
	    success: function () { 
	       // 用户确认分享后执行的回调函数
	    },
	    cancel: function () { 
	       // 用户取消分享后执行的回调函数
	    }
	});
	wx.onMenuShareWeibo({
	    title: <?php echo $info[0]->name ?>+'线上百团大战纳新报名', // 分享标题
	    desc: <?php echo $info[0]->qianming ?>, // 分享描述
	    link: window.location.href, // 分享链接
	    imgUrl: <?php echo $info[0]->pic ?>, // 分享图标
	    success: function () { 
	       // 用户确认分享后执行的回调函数
	    },
	    cancel: function () { 
	        // 用户取消分享后执行的回调函数
	    }
	});
	wx.onMenuShareQZone({
	    title: <?php echo $info[0]->name ?>+'线上百团大战纳新报名', // 分享标题
	    desc: <?php echo $info[0]->qianming ?>, // 分享描述
	    link: window.location.href, // 分享链接
	    imgUrl: <?php echo $info[0]->pic ?>, // 分享图标
	    success: function () { 
	       // 用户确认分享后执行的回调函数
	    },
	    cancel: function () { 
	        // 用户取消分享后执行的回调函数
	    }
	});
  });
</script>
</body>
</html>