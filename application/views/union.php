
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
			height: 120px;
			width: 100%;
			padding: 10px;
			text-align: center;
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			-webkit-box-sizing: border-box;
		}
		.type{
			text-align: center;
			font-size: 26px;
			color: #fff;
			line-height:70px;
			font-weight: bolder;
		}
		.num{
			font-size: 14px;
			color: #eee;
		}
		.main{
			
		}
		.block{
			height: 100px;
			border-bottom: solid #ddd 1px;
			padding:10px 20px;
			overflow: hidden;
		}
		.name{
			font-size: 22px;
			font-weight: bold;
			color: #222;
		}
		.introduce{
			padding-top: 5px;
			font-size: 16px;
			color: #999;
			overflow: scroll;
			height: 50px;
			overflow:hidden;
		}
		.pointer{
			cursor:pointer;
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
		<div class="type"><?php echo $typearray[$column] ?></div>
		<div class="num">此分类下共<?php echo count($unionlist) ?>个社团</div>
	</div>
</header>
<div class="main">
	<?php foreach($unionlist as $item): ?>
	<div class="block pointer" onclick="singleType('<?php echo $item->id ?>')">
		<div class="name"><?php echo $item->name ?></div>
		<div class="introduce"><?php echo $item->description ?></div>
	</div>
<?php endforeach; ?>
	<!-- <div class="block">
		<div class="name">钢琴社</div>
		<div class="introduce">弹一曲曲终人散</div>
	</div><div class="block">
		<div class="name">钢琴社</div>
		<div class="introduce">弹一曲曲终人散</div>
	</div> -->
</div>
	<script type="text/javascript">
		document.getElementById("bar").onclick=function(){
			//window.location.href='index.php';
			window.history.back();
		}
	</script>
</body>
</html>

<script>
	
	function singleType(id){
		window.location.href = "<?php echo site_url('League/leagueTypeInfo') ?>/"+id;
	}
</script>