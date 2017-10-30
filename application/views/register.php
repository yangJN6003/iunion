
	<style type="text/css">
		*{
			margin: 0;
			padding:0;
		}
		body,.main{
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
		.head{
			
			margin-top: 68px;
			width: 100%;
			
		}
		
		.word{

			padding: 0 10%;
			text-align: center;
			color: rgba(255,255,255,0.7);
			background-repeat: no-repeat;
		}
		.arr{
			position: absolute;
			margin-left: 10%;
			margin-top: -24px;
			height: 24px
		}
		input{
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
			background-color: rgba(255,255,255,0);
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
		 .jion{
			margin: 50px 30px;
			font-size: 24px;
			font-weight: bolder;
		}
		#jiona{
			height: 40px;
			margin: 50px 0;
			line-height: 40px;
			font-size: 24px;
			font-weight: bolder;
		}
		.titleBar{
			height: 100px;
			width: 100%;
			background-color: #dddddd;
		}
		.title{
			line-height: 100px;
			display: inline-block;
			padding-left: 30px;
			font-size: 48px;
			font-weight: bolder;
		}
		ul{
			display: inline-block;
			float: right;

		}
		a{
			text-decoration: none;
		}
		.barLi{
			float: right;
			text-decoration: none;
			display: inline-block;
			margin: 0 20px;
			color: #66CC99;
			margin-top: 45px;
		}
		.boxsz{
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			-webkit-box-sizing: border-box;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>extra/css/button.css">

<body>
	<div class="main">
		<div class="head">
			<!-- <div class="arrow"><img src="images/arrow.png"></div> -->
			<div class="word">社团入驻</div>
			<a href="<?php echo site_url('League/index') ?>">
				<img class="arr" src="<?php echo base_url()?>extra/imgs/arrow.png">
			</a>
			
		</div>
		<div class="bolck">
			<input type="text" name="invitationCode" placeholder="邀请码">
			<input type="text" name="name" placeholder="社团账号">
			<input type="password" name="password" placeholder="密码">
			<input type="password" name="repassword" placeholder="确认密码">
			<br/>
			<br/>
			
			<input type="submit" onclick="create()" name="sub" class="sub" value="创建社团">
		</div>
		
	</div>
</body>
</html>

<script>
	var invitationCode = '';
	var name = '';
	var password = '';
	var repassword = '';

	function create(){
		invitationCode = $("input[name='invitationCode']").val();
		name = $("input[name='name']").val();
		password = $("input[name='password']").val();
		repassword = $("input[name='repassword']").val();

		if(invitationCode == ""){
			alert("邀请码不能为空");
			return;
		}
		if(name == ""){
			alert("社团账号不能为空");
			return;
		}

		if(password == "" || repassword == ""){
			alert("密码不能为空");
			return;
		}

		if(password != repassword ){
			alert("两次密码不相同 请检查");
			return;
		}

		$.post(
			"<?php echo site_url('League_ajax/register_ajax') ?>",
			{
				'invitationCode':invitationCode,
				'name':name,
				'password':password
			},
			function (data){
				if(data == "codewrong")
					alert("邀请码错误");
				if(data == "fail")
					alert("网络错误请稍后再试");
				if(data == "success"){
					alert("创建成功");
					window.location.href="<?php echo site_url('League/index') ?>";
				}
				if(data == "isres"){
					alert("已经创建，请勿重复创建");
					window.location.href="<?php echo site_url('League/index') ?>";
				}
			},
			"json"
			)
	}

</script>