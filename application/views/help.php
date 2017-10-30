
	<style type="text/css">
		*{
			margin: 0;
			padding:0;
		}
		html,body{
			width: 100%;
			height: 100%;
			font-size: 24px;
		}
		body{
			background-image:-moz-linear-gradient( top,#FE6A3A,#010000);
			background-image:-o-linear-gradient( top,#FE6A3A,#010000);
			background-image:-webkit-linear-gradient( top,#FE6A3A,#010000);
			background-image:linear-gradient( top,#FE6A3A,#010000);
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
			letter-spacing:4px;
			font-weight: bolder;
		}
		
		input{
			outline:none;
			display: block;
			margin: 30px auto;
			width: 80%;
			height: 40px;
			border: solid rgba(255,255,255,0.4) 1px;
			border-radius: 40px;
			font-size: 24px;
			padding-left: 30px;
			background-color: rgba(255,255,255,0.3);
		}
		.sub{
			box-sizing: content-box;
			-moz-box-sizing: content-box;
			-o-box-sizing: content-box;
			-webkit-box-sizing: content-box;
			padding:0px 15px;
			background-color: #F96331;
			border: solid rgba(255,255,255,0.4) 1px;
			color: rgba(255,255,255,0.7);
		}
		::-webkit-input-placeholder { color:rgba(255,255,255,0.7);
		font-size: 24px;
		padding-left: 30px;
		 }
		::-moz-placeholder { color:rgba(255,255,255,0.7);
		font-size: 24px;
		padding-left: 30px;
		 } /* firefox 19+ */
		:-ms-input-placeholder { color:rgba(255,255,255,0.7);
		font-size: 24px;
		padding-left: 30px;
		 } /* ie */
		input:-moz-placeholder { color:rgba(255,255,255,0.7);
		font-size: 24px;
		padding-left: 30px;
		 }
		 
		.boxsz{
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			-webkit-box-sizing: border-box;
		}
		.box1{
			color: #fff;
			margin: 8% 15%;
			width: 80%;
			border-left: solid #fff 1px;
			padding: 0 20px;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			-webkit-box-sizing: border-box;
		}
		.box2{
			color: #fff;
			margin: 8% 15%;
			width: 80%;
			border-left:solid #fff 1px;
			padding: 0 20px;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			-webkit-box-sizing: border-box;
		}
		.title{
			font-size: 26px;
		}
		.content{
			font-size: 16px;
			color:rgba(255,255,255,0.7);
		}
		.content span{
			color:rgba(255,255,255,0.7);
			display: block;
			width: 100%;
			padding-right: 20px;
		}
		.inankai{
			font-size: 36px;
			letter-spacing: 8px;
			color: #fff;
			text-align: center;
		}
		.below{
			font-size: 14px;
			color:rgba(255,255,255,0.7);
			text-align: center;
		}
		.join{
			display: block;
			height: 50px;
			margin: 0 auto;
			line-height: 50px;
			font-size: 24px;
			text-align: center;
			border: solid rgba(255,255,255,0.7)  1px;
			text-align: center;
			border-radius: 60px;
			text-decoration: none;
			color: rgba(255,255,255,0.7);
			text-align: center;;
			width: 60%;
			margin-top: 20px;
		}
	</style>
	
</head>
<body>
	<header>
	<div class="bar" id="bar">
		INANKAI
	</div>
	</header>
	<div class="main">
			<div class="box1">
				<div class="title">社团负责人篇</div>
				<div class="content">
					<span>1.向inankai或南开大学微信后台索要邀请码</span>
					<span>2.社团入驻、发布信息</span>
					<span>3.南开大学微信、inankai微信推送</span>
					<span>4.后台查看报名者信息</span>
				</div>
			</div>
			<div class="box2">
				<div class="title">新生报名者篇</div>
				<div class="content">
					<span>1.浏览社团信息</span>
					<span>2.选择心仪的社团报名</span>
					<span>3.等待社团工作人员通知面试</span>
				</div>
			</div>
			
	</div>
	<footer>
		<div class="inankai">INANKAI</div>
		<div class="below">我们专注新媒体，并且钟情更多</div>
		<a href="<?php echo site_url('League/leagueJoin').'/19' ?>" class="join">加入我们</a>
	</footer>
<script type="text/javascript">
		document.getElementById("bar").onclick=function(){
			window.history.back();
		}
</script>
</body>
</html>