
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
		}
		.radio{
			display: inline-block;
			width: 40px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>extra/css/button.css">

<body>
<header>
	<div class="bar" id="bar">
		INANKAI
	</div>
	<div class="box">
		<span class="headimg"><img class="headimg" src="<?php echo $info[0]->pic ?>" alt=""></span>
		<span class="name"><?php echo $info[0]->name ?></span>
		<span class="notice"><?php echo $info[0]->qianming ?></span>
	</div>
</header>
<div class="main">
	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">姓名</div>
			<input required name="name" type="text" class="info">
		</div>
	</div>
	<div class="line"></div>
	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">性别</div>
			<div class="likeinput">
				<input type="radio" class="radio" value="0" name="sex" selected>汉纸 
				<input type="radio" class="radio" value="1" name="sex" checked="true">妹纸 
			</div>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">校区</div>
			<div class="likeinput">
				<input type="radio" class="radio" value="0" name="area" selected> 八里台 
				<input type="radio" class="radio" value="1" name="area" checked="true"> 津南 
			</div>
		</div>
	</div>
	<div class="line"></div>
	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">年级</div>
			<input required type="text" name="grade" class="info">
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">学院</div>
			<input required type="text" name="department" class="info">
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">专业</div>
			<input required type="text" name="zhuanye" class="info">
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">手机</div>
			<input required type="text" name="phone" class="info">
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">邮箱</div>
			<input required type="email" name="email" class="info">
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">自我简介</div>
			<textarea required class="infoarea" name="intro" rows="3"></textarea>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">技能特长</div>
			<textarea required class="infoarea" name="advantage" rows="3"></textarea>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">意向部门</div>
			<textarea required class="infoarea" name="bumen" rows="3"></textarea>
		</div>
	</div>
	<div class="line"></div>

	<div class="infobar">
		<div class="left"></div>
		<div class="right">
			<div class="title">是否服从调剂</div>
			<div class="likeinput">
				<input type="radio" class="radio" name="changeable" value="0" selected> 是 
				<input type="radio" class="radio" name="changeable" value="1" checked="true"> 否 
			</div>
		</div>
	</div>
	<div class="line"></div>

	<div class="joinbox">
		<a class="join" href="javascript:void(0)" onclick="join('<?php echo $num ?>')">报名</a>
	</div>
	<br>
	<br>
	
</div>
	<script type="text/javascript">
		document.getElementById("bar").onclick=function(){
			//window.location.href='<?php echo site_url("League/index") ?>';
			window.history.back();
		}
	</script>
</body>
</html>

<script>
	function join(id){
		//alert(id);
		var name = $("input[name='name']").val();
		var gender = $("input[name='sex']:checked").val();
		var area = $("input[name='area']:checked").val();
		var department = $("input[name='department']").val();
		var zhuanye = $("input[name='zhuanye']").val();
		var email = $("input[name='email']").val();
		var phone = $("input[name='phone']").val();
		var intro = $("textarea[name='intro']").val();
		var advantage = $("textarea[name='advantage']").val();
		var bumen = $("textarea[name='bumen']").val();
		var tiaoji = $("input[name='changeable']:checked").val();
		var grade = $("input[name='grade']").val();
		//alert(tiaoji);
		//alert(name+" "+gender+" "+area+" "+department+" "+zhuanye+" "+email+" "+phone+" "+intro+" "+advantage+" "+bumen+" "+tiaoji);

		if(name && gender && area && department && zhuanye && email && phone && intro && advantage && bumen && tiaoji && grade){
			$.post(
				"<?php echo site_url('League_ajax/join_ajax') ?>",
				{
					"typeid":id,
					"name":name,
					"gender":gender,
					"area":area,
					"department":department,
					"zhuanye":zhuanye,
					"email":email,
					"phone":phone,
					"intro":intro,
					"advantage":advantage,
					"bumen":bumen,
					"tiaoji":tiaoji,
					"grade":grade
				},
				function (data){
					if(data == "success"){
						alert("报名成功");
						window.location.href = "<?php echo site_url('League/leagueShowColumn').'/'.$info[0]->pid ?>"
					}else{
						alert("报名失败请稍后再试");
					}
				},
				"json"
				)
		}else{
			alert("请检查有未填写信息");
			return;
		}
	}
</script>