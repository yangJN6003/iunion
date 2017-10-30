
<body>
	<p id="code"></p>
	<br>
	<button onclick="code()">生成邀请码</button>
</body>
</html>

<script>
	function code(){
		$.post(
			'<?php echo site_url('Code/ajax_addCode') ?>',
			{
				data:"data"
			},
			function (data){
				if(data.result == "success"){
					alert("生成邀请码成功");
					$("#code").text(data.code);
				}else if(data.result == "fail"){
					alert("生成失败请稍后再试");
				}
			},
			"json"
			);
	}
</script>