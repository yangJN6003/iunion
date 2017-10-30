
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
			font-size: 18px;
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
			border: none;
		}
		.headinput{
			text-align: center;
			font-size: 16px;
			color: #ddd;
		}
		#upload{
			margin-top: -55px;
			cursor: pointer;
			height: 50px;
			opacity: 0;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>extra/css/button.css">

<body>
<form action="<?php echo site_url('League/leagueUpdate') ?>" method="post" enctype="multipart/form-data">
<header>
	<div class="bar" id="bar">
		INANKAI
	</div>
	<div class="box">
		<span class="headimg">
			<?php if($isedit) {?>
				<img class="headimg" src="<?php echo $info[0]->pic ?>" alt="">
			<?php }else{ ?>
				<img class="headimg" src="<?php echo base_url() ?>extra/imgs/default.png" alt="">
			<?php } ?>	

			<input type="file" id="upload" name="pic" />
		</span>
		
		<span class="name">点击头像上传</span>
		<span class="notice">（请在pc端或非微信浏览器里操作）</span>
		<input required type="text" name="name" class="headinput" placeholder="社团名" value="<?php if($isedit) echo $info[0]->name ?>">
	</div>
</header>
<div class="main">
	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">类型</div>
			<select name="type" id="type">
				<?php foreach($typelist as $item): ?>
					<option value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
	<?php if(!$isedit){ ?>
	<div class="line"></div>
	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">负责人</div>
			<input required name="fuzeren" type="text" class="info">
		</div>
	</div>
	<div class="line"></div>
	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">电话</div>
			<input required name="phone" type="text" class="info">
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">管理员微信</div>
			<input required name="weixin" type="text" class="info">
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">公众号</div>
			<input name="gongzhonghao" type="text" class="info">
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">邮箱</div>
			<input name="email" type="email" class="info">
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">社团标语</div>
			<textarea required name="biaoyu" class="infoarea" rows="3"></textarea>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">个性签名</div>
			<input type="text" name="qianming" class="info" placeholder="会在头像下方显示" >
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">社团简介</div>
			<textarea require name="jianjie" class="infoarea" rows="3"></textarea>
		</div> 
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">所获荣誉</div>
			<textarea name="rongyu" class="infoarea" rows="3"></textarea>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">组织划分</div>
			<textarea required name="huafen" class="infoarea" rows="3"></textarea>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">纳新对象</div>
			<textarea name="duixiang" class="infoarea" rows="3"></textarea>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">截止时间</div>
			<input required name="jiezhi" type="date" class="info">
		</div>
	</div>
	<div class="line"></div>
	<?php }else{  ?>
	<div class="line"></div>
	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">负责人</div>
			<input required name="fuzeren" type="text" class="info" value="<?php echo $info[0]->managename ?>">
		</div>
	</div>
	<div class="line"></div>
	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">电话</div>
			<input required name="phone" type="text" class="info" value="<?php echo $info[0]->phone ?>">
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">管理员微信</div>
			<input required name="weixin" type="text" class="info" value="<?php echo $info[0]->weixin ?>">
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">公众号</div>
			<input name="gongzhonghao" type="text" class="info" value="<?php echo $info[0]->gongzhonghao ?>">
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">邮箱</div>
			<input name="email" type="email" class="info" value="<?php echo $info[0]->email ?>">
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">社团标语</div>
			<textarea required name="biaoyu" class="infoarea" rows="3" ><?php echo $info[0]->biaoyu ?></textarea>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">个性签名</div>
			<input type="text" name="qianming" class="info" placeholder="会在头像下方显示" value="<?php echo $info[0]->qianming ?>">
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">社团简介</div>
			<textarea required name="jianjie" class="infoarea" rows="3" ><?php echo $info[0]->description ?></textarea>
		</div> 
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">所获荣誉</div>
			<textarea name="rongyu" class="infoarea" rows="3" ><?php echo $info[0]->award ?></textarea>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">组织划分</div>
			<textarea required name="huafen" class="infoarea" rows="3" ><?php echo $info[0]->bumenhuafen ?></textarea>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">纳新对象</div>
			<textarea required name="duixiang" class="infoarea" rows="3"><?php echo $info[0]->naxinduixiang ?></textarea>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">截止时间</div>
			<input name="jiezhi" type="date" class="info" value="<?php echo $info[0]->jiezhiriqi ?>">
		</div>
	</div>
	<div class="line"></div>
<?php } ?>
	

	<input type="hidden" name="isedit" value="<?php echo $isedit ?>"> 

	<div class="joinbox">
		<button class="join" type="submit">保存修改</button>
	</div>
</div>
	</form>
	<script type="text/javascript">
		document.getElementById("bar").onclick=function(){
			/*var temp = <?php echo $isedit ?>;
			if(temp){
				window.location.href='<?php echo site_url("League/index") ?>';
			}else{
				window.location.href='<?php echo site_url("League/index") ?>';
			}*/
			window.history.back();
		}
	</script>
</body>
</html>

<script>
	$(function(){
		var temp = <?php echo $isedit ?>;
		if(temp){
			/*$("input[name='name']").val('<?php echo $info[0]->name ?>');*/
			$("select[name='type']").val('<?php echo $info[0]->pid ?>');
/*			$("input[name='fuzeren']").val('<?php echo $info[0]->managename ?>');
			$("input[name='phone']").val('<?php echo $info[0]->phone ?>');
			$("input[name='weixin']").val('<?php echo $info[0]->weixin ?>');
			$("input[name='email']").val('<?php echo $info[0]->email ?>');
			$("textarea[name='biaoyu']").val('<?php echo $info[0]->biaoyu ?>');
			$("textarea[name='jianjie']").val('<?php echo $info[0]->description ?>');
			$("textarea[name='rongyu']").val('<?php echo $info[0]->award ?>');
			$("textarea[name='huafen']").val('<?php echo $info[0]->bumenhuafen ?>');
			$("textarea[name='duixiang']").val('<?php echo $info[0]->naxinduixiang ?>');
			$("input[name='jiezhi']").val('<?php echo $info[0]->jiezhiriqi ?>');
			$("input[name='gongzhonghao']").val('<?php echo $info[0]->gongzhonghao ?>');
			$("input[name='qianming']").val('<?php echo $info[0]->qianming ?>');*/

		}
	})

</script>