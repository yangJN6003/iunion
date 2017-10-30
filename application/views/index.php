
	<style type="text/css">
	*{
		margin:0;
		padding:0;
		font-size: 20px;
	}
	.shadow{
		background-image: -webkit-gradient(linear, center top, center bottom, from(#fcfcfc), to(#bfbfbf), color-stop(3%, #f7f7f7), color-stop(12%, #f2f2f2), color-stop(90%, #d9d9d9));
		background-image: -webkit-linear-gradient(top, #fcfcfc, #f7f7f7 3%, #f2f2f2 12%, #d9d9d9 90%, #bfbfbf);
		background-image: -moz-linear-gradient(top, #fcfcfc, #f7f7f7 3%, #f2f2f2 12%, #d9d9d9 90%, #bfbfbf);
		background-image: -o-linear-gradient(top, #fcfcfc, #f7f7f7 3%, #f2f2f2 12%, #d9d9d9 90%, #bfbfbf);
		background-image: -ms-linear-gradient(top, #fcfcfc, #f7f7f7 3%, #f2f2f2 12%, #d9d9d9 90%, #bfbfbf);
		background-image: linear-gradient(to bottom, #fcfcfc, #f7f7f7 3%, #f2f2f2 12%, #d9d9d9 90%, #bfbfbf);
		-webkit-box-shadow: 0 2px 4px rgba(0,0,0,0.75);
		-moz-box-shadow: 0 2px 4px rgba(0,0,0,0.75);
		box-shadow: 0 2px 4px rgba(0,0,0,0.75);

	}
	.title{
		
	}
	.titleBar{
		display: block;
		background: #EC5E30;
		margin: 0 auto;
		padding: 5px 0;
		width: 100%;
		height: 40px;
		
	}
	.titleBarBox{
		width: 310px;
		display: block;
		margin: 0 auto;
	}
	.logo{
		background: #F96331;
		height: 60px;
	}
	.logotext{
		font-size: 28px;
		letter-spacing: 2px;
		font-weight: bolder;
		color: #fff;
		margin: 0 auto;
		display: block;
		text-align: center;
	}
	.logotext2{
		font-size: 18px;
		letter-spacing: 2px;
		color: #fff;
		margin: 0 auto;
		display: block;
		text-align: center;
	}
	
	.main{

	}
	.block{
		width: 50%;
		display: inline-block;
		float: left;
		position: relative;
	}
	.pic{
		display: inline-block;
		width: 100%;
		height: 100%;
	}
	.photo{
		width: 100%;
		height: 100%;
	}
	.name{
		width: 100%;
		height: 40px;
		position: absolute;
		left: 0;
		bottom: 0;
		background-image:-moz-linear-gradient( top,rgba(155,155,155,0),rgba(155,155,155,1));
		background-image:-o-linear-gradient( top,rgba(155,155,155,0),rgba(155,155,155,1));
		background-image:-webkit-linear-gradient( top,rgba(155,155,155,0),rgba(155,155,155,1));
		background-image:linear-gradient( top,rgba(155,155,155,0),rgba(155,155,155,1));
		text-align: center;

	}
	.name a{
		font-size: 14px;
		letter-spacing: 3px;
		color: rgba(255,255,255,0.7);
	}
	a{
		text-decoration: none;
	}
	.button{
		margin: 0 20px;
		display: inline-block;
		border-style: solid;
		line-height: 26px;
		padding: 2px 12px;
		border-color: rgba(255,255,255,0.7);
		border-radius:5px;
		border-radius:30px;
		border-width: 1px;
		font-size: 14px;
		color: rgba(255,255,255,0.7);
		
	}
	.boxsz{
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		-o-box-sizing: border-box;
		-webkit-box-sizing: border-box;
	}
	.texta{
		display: inline-block;
		line-height: 40px;
	}
	</style>

<body>
<script type="text/javascript">
	document.onload=function(){
		document.getElementBy
	}
</script>
<header>
	<div class="title">
		<div class="logo">
			<span class="logotext">INANKAI</span>
			<span class="logotext2">社团线上报名</span>
		</div>
		<div class="titleBar">
			<div class="titleBarBox">
				<a class="button boxsz" href="<?php echo site_url('League/leagueRegister') ?>"> 入驻</a>
				<a class="button boxsz" href="<?php echo site_url('League/leagueLogin') ?>">登录</a>
				<a class="button boxsz" href="<?php echo site_url('League/leagueHelp') ?>">帮助</a>
			</div>
		</div>
	</div>
</header>
<div class="main">
	<div class="block">
		<div class="pic">
			<a href="<?php echo site_url('League/leagueShowColumn/1') ?>">
			<img class="photo" src="<?php echo base_url() ?>extra/imgs/1.png">
			</a>
		</div>
		<!-- <div class="name"><a class="texta" href="union.php">文艺类</a></div> -->
	</div>
	<div class="block">
		<div class="pic">
			<a href="<?php echo site_url('League/leagueShowColumn/2') ?>">
			<img class="photo" src="<?php echo base_url() ?>extra/imgs/2.png">
			</a>
		</div>
		<!-- <div class="name"><a class="texta" href="union.php">体育类</a></div> -->
	</div>
	<div class="block">
		<div class="pic">
			<a href="<?php echo site_url('League/leagueShowColumn/3') ?>">
			<img class="photo" src="<?php echo base_url() ?>extra/imgs/3.png">
			</a>
		</div>
		<!-- <div class="name"><a class="texta" href="union.php">学术类</a></div> -->
	</div>
	<div class="block">
		<div class="pic">
			<a href="<?php echo site_url('League/leagueShowColumn/4') ?>">
			<img class="photo" src="<?php echo base_url() ?>extra/imgs/4.png">
			</a>
		</div>
		<!-- <div class="name"><a class="texta" href="union.php">科技类</a></div> -->
	</div>
	<div class="block">
		<div class="pic">
			<a href="<?php echo site_url('League/leagueShowColumn/5') ?>">
			<img class="photo" src="<?php echo base_url() ?>extra/imgs/5.png">
			</a>
		</div>
		<!-- <div class="name"><a class="texta" href="union.php">公益类</a></div> -->
	</div>
	<div class="block">
		<div class="pic">
			<a href="<?php echo site_url('League/leagueShowColumn/6') ?>">
			<img class="photo" src="<?php echo base_url() ?>extra/imgs/6.png">
			</a>
		</div>
		<!-- <div class="name"><a class="texta" href="union.php">综合类</a></div> -->
	</div>
	
	
</div>
<footer></footer>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		width=$(".block").width();
		$(".block").height(width+'px');
	})
	window.onresize=function(){
		width=$(".block").width();
		$(".block").height(width+'px');
	}
</script>
	
</body>
</html>