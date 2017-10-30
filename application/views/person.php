
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
			font-size: 24px;
			font-weight: bolder;
			display: block;
			margin: 0 auto;
			text-align: center;
			color: #ffffff;
			padding: 0;
		}
		.box input{
			display: block;
			width: 50%;
			margin: 0 auto;
			height: 32px;
			border-radius: 30px;
			background-color: rgba(221,221,221,0.3);
			border: none;
		}
		.notice{
			font-size: 14px;
			color: #eee;
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
			display: block;
			width: 100%;
			margin: 0 auto;
			height: 32px;
			background-color: #F2F2F2;
			border: none;
			font-size: 16px;
			padding: 5px 10px;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			-webkit-box-sizing: border-box;
		}
		.infoarea{
			display: block;
			width: 100%;
			margin: 0 auto;
			height: 80px;
			background-color: #F2F2F2;
			border: none;
			font-size: 16px;
			padding: 5px 10px;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			-webkit-box-sizing: border-box;
		}
		.likeinput{
			display: block;
			width: 100%;
			margin: 0 auto;
			word-break: break-all; 
			min-height: 32px;
			background-color: #F2F2F2;
			border: none;
			font-size: 16px;
			padding: 8px 15px;
			color: #888;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			-webkit-box-sizing: border-box;
		}
		::-webkit-input-placeholder { color:#fff;
		font-size: 16px;
		text-align: center;
		line-height: 32px;
		 }
		::-moz-placeholder { color:#fff;
		font-size: 16px;
		text-align: center;
		line-height: 32px;
		 } /* firefox 19+ */
		:-ms-input-placeholder { color:#fff;
		font-size: 16px;
		text-align: center;
		line-height: 32px;
		 } /* ie */
		input:-moz-placeholder { color:#fff;
		font-size: 16px;
		text-align: center;
		line-height: 32px;
		 }
		.line{
			background-color: #DDD;
			width: 100%;
			height: 1px;
			float: left;
		}
		.joinbox{
			width: 100%;
			height: 80px;
			clear: both;
			padding: 20px 0;
		}
		.join{
			text-decoration: none;
			color: #fff;
			display: block;
			width: 60%;
			height: 60px;
			margin: 10px auto;
			background-color: #EC5E2F;
			text-align: center;
			border-radius: 60px;
			line-height: 60px;
		}
		.foot{
			width: 100%;
			height: 40px;
			clear: both;
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
		<span class="headimg"><img class="headimg" src="<?php echo $typeinfo[0]->pic ?>" alt="">
		</span>
		<span class="name"><?php echo $typeinfo[0]->name ?></span>
		<span class="notice"><?php echo $typeinfo[0]->qianming ?></span>
	</div>
</header>
<div class="main">
	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">姓名</div>
			<div class="likeinput">
				<?php echo $applyinfo[0]->name ?>
			</div>
		</div>
	</div>
	<div class="line"></div>
	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">性别</div>
			<div class="likeinput">
				<?php if(!$applyinfo[0]->gender)
					echo "汉纸";
					else{
						echo "妹纸";
					}
				 ?>
			</div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">校区</div>
			<div class="likeinput">
				<?php if(!$applyinfo[0]->area)
						echo "八里台校区";
						else
							echo "津南校区"; ?>
			</div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">学院</div>
			<div class="likeinput">
				<?php echo $applyinfo[0]->department ?>
			</div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">专业</div>
			<div class="likeinput">
				<?php echo $applyinfo[0]->major ?>
			</div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">邮箱</div>
			<div class="likeinput">
				<?php echo $applyinfo[0]->email ?>
			</div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">自我简介</div>
			<div class="likeinput">
				<?php echo $applyinfo[0]->introduce ?>
			</div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">技能特长</div>
			<div class="likeinput">
				<?php echo $applyinfo[0]->techang ?>
			</div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">意向部门</div>
			<div class="likeinput">
				<?php echo $applyinfo[0]->yixiangbumen ?>
			</div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">是否服从调剂</div>
			<div class="likeinput">
				<?php if(!$applyinfo[0]->tiaoji)
						 echo "是";
						 else
						 	echo "否"; ?>
			</div>
		</div>
	</div>
	<div class="line"></div>
	<div class="foot"></div>

	
</div>
	<script type="text/javascript">
		document.getElementById("bar").onclick=function(){
			window.history.back();
		}
	</script>
</body>
</html>