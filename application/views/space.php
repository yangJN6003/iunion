
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
<?php 
	$typearray = array(
		'1'=>'文艺类社团',
		'2'=>'体育类社团',
		'3'=>'学术类社团',
		'4'=>'科技类社团',
		'5'=>'公益类社团',
		'6'=>'综合类社团'
		);
 ?>
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
			<div class="title">类型</div>
			<div class="info" style="font-size: 16px;"><?php echo $typearray[$info[0]->pid] ?></div>
		</div>
	</div>
	<div class="line"></div>
	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">负责人</div>
			<div class="info"><?php echo $info[0]->managename ?></div>
		</div>
	</div>
	<div class="line"></div>
	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">电话</div>
			<div class="info"><?php echo $info[0]->phone ?></div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">微信</div>
			<div class="info"><?php echo $info[0]->weixin ?></div>
		</div>
	</div>
	<div class="line"></div>

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
			<div class="title">邮箱</div>
			<div class="info"><?php echo $info[0]->email ?></div>
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
		<a class="join" href="<?php echo site_url('League/leagueEdit') ?>">修改信息</a>
	</div>
	<div class="joinbox">
		<a class="join" href="<?php echo site_url('League/leagueList').'/'.$info[0]->id ?>">查看申请名单</a>
	</div>

	
</div>
	<script type="text/javascript">
		document.getElementById("bar").onclick=function(){
			//window.location.href='<?php echo site_url("League/index") ?>';
			window.history.back();
		}
	</script>
</body>
</html>