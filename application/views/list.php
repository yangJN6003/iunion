
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
			
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			width:50%;
			float: left;
			height: 56px;
		}
		.right{
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			width:50%;
			float: left;
			height: 56px;
			
		}
		.title{
			font-size: 20px;
			color: #EC5E2F;
			width: 40%;
			float: left;
			text-align: center;
			line-height: 56px;
		}
		.info{
			font-size: 20px;
			color: #999;
			width: 60%;
			float: left;
			text-align: center;
			line-height: 56px;
		}
		.line{
			background-color: #DDD;
			width: 100%;
			height: 1px;
			float: left;

		}
		.info a{
			text-decoration: none;
			color: #999;
			font-size: 20px;
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

<body>
<header>
	<div class="bar" id="bar">
		报名情况
	</div>
	<div class="box">
		<span class="headimg"><img class="headimg" src="<?php echo $typeinfo[0]->pic ?>" alt=""></span>
		<span class="name"><?php echo $typeinfo[0]->name ?></span>
		<span class="qianming"><?php echo $typeinfo[0]->qianming ?></span>
	</div>
</header>
<div class="main">
	<?php foreach($info as $item): ?>
	<div class="infobar" onclick="person('<?php echo $item->id ?>')">
		<div class="left">
			<div class="title">姓名</div>
			<div class="info"><?php echo $item->name ?></div>
		</div>
		<div class="right">
			<div class="title">手机号</div>
			<div class="info"><?php echo $item->phone ?></div>
		</div>
	</div>
	<div class="line"></div>
	<?php endforeach; ?>
<!-- 
	<div class="infobar">
		<div class="left">
			<div class="title">姓名</div>
			<div class="info"><a href="person.php">redream</a></div>
		</div>
		<div class="right">
			<div class="title">姓名</div>
			<div class="info">曹逊</div>
		</div>
	</div>
	<div class="line"></div> -->

	<div class="joinbox">
		<a class="join" href="<?php echo site_url('League/leagueExcel').'/'.$typeinfo[0]->id ?>" target="_blank">导出申请名单</a>
	</div>
	
</div>
	<script type="text/javascript">
		document.getElementById("bar").onclick=function(){
			window.history.back();
		}
	</script>
</body>
</html>

<script>
	function person(id){
		window.location.href = "<?php echo site_url('League/leaguePerson').'/' ?>"+id;
	}
</script>