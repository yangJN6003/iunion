
	<style type="text/css">
		*{
			margin: 0;
			padding:0;
		}
		html,body,.main{
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
			
			padding-top: 68px;
			width: 100%;

			
		}
		
		.word1{
			
			
			text-align: center;
			color: rgba(255,255,255,1);
			background-repeat: no-repeat;
			font-weight: bolder;
			font-size: 34px;
			letter-spacing: 4px;
		}
		.word2{
			
			
			text-align: center;
			color: rgba(255,255,255,1);
			background-repeat: no-repeat;
			font-size: 20px;
		}
		.arr{
			position: absolute;
			margin-left: 10%;
			margin-top: -24px;
			height: 24px
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
	</style>
	

<body>
	<div class="main">
		<div class="head">
			<!-- <div class="arrow"><img src="images/arrow.png"></div> -->
			
			<a href="<?php echo site_url('League/index') ?>">
				<img class="arr" src="<?php echo base_url()?>extra/imgs/arrow.png">
			</a>
			<div class="word1">INANKAI</div>
			<div class="word2">社团线上报名系统</div>

			
		</div>
		<div class="bolck">
			<br/>
			<input type="text" name="name" placeholder="社团账号">
			<input type="password" name="password" placeholder="密码">
			<br/>
			<br/>
			
			<input type="submit" onclick="login()" name="sub" class="sub" value="登录">
		</div>
		
	</div>
</body>
</html>

<script>
	var name = '';
	var password = '';

	function login(){
		name = $("input[name='name']").val();
		password = $("input[name='password']").val();

		if(name && password){
			$.post(
				'<?php echo site_url("League_ajax/login_ajax") ?>',
				{
					"name":name,
					"password":password
				},
				function (data){
					if(data == "fail"){
						alert("用户名或密码错误");
					}else if(data == "success"){
						alert("登陆成功");
						window.location.href = "<?php echo site_url('League/leagueSpace') ?>";
					}
				},
				"json"
				)
		}else{
			alert("用户名密码不能为空");
		}
	}
</script>