<!DOCTYPE html>
<html>
<head>
	<title>Guide</title>
	<style type="text/css">
		.yo{
			width: 1000px;
			margin:0 auto;
		}
		.a{
			margin-top: 50px;
			margin-bottom: 50px;
			text-align: center;
		}
		.b{
			margin-bottom: 250px
		}
		.title{
			margin-bottom: 10px;
		}
		.text{
			color: white;
			font-size: 20px;
			vertical-align:middle;
		}
		.text1{
			color: black;
			font-size: 20px;
			vertical-align:middle;
		}
		.herf{
			width:150px;
			height:70px;
			float: left;
			margin-right: 20px;
			margin-bottom: 20px;
			text-align: center;
		}
		p:hover{
			color: #0099ff;
		}
	</style>
</head>
<body>
	<div class ="yo">
		<div class="a">
			<h1>导航君(暂时只能游戏删添)</h1>
		</div>
		<div class="b">
			<h1 class="title">重邮老司机</h1>
			<a href="http://www.cqupt.edu.cn/cqupt/index.shtml" target="_blank" id="1">
				<div class="herf" style="background:#33ccFf" onmouseover="this.style.backgroundColor='#3399ff'" onmouseout="this.style.backgroundColor='#33ccff'">
					<p class="text" onmouseover="netgw">重邮官网</font></p>
				</div>
			</a>
			<a href="http://jwzx.cqupt.edu.cn" target="_blank">
				<div class="herf" style="background:#CC3333"onmouseover="this.style.backgroundColor='#cc6666'" onmouseout="this.style.backgroundColor='#cc3333'">
					<p class="text">教务在线</p>
				</div>
			</a>
			<a href="http://hongyan.cqupt.edu.cn" target="_blank">
				<div class="herf" style="background:#66ff99"onmouseover="this.style.backgroundColor='#66cc99'" onmouseout="this.style.backgroundColor='#66ff99'">
					<p class="text">红岩网校</p>
				</div>
			</a>
			<a href="http://172.22.161.11" target="_blank">
				<div class="herf" style="background:#FFCC66"onmouseover="this.style.backgroundColor='#fc9'" onmouseout="this.style.backgroundColor='#fc6'">
					<p class="text">BT Down</p>
				</div>
			</a>
			<a href="http://tieba.baidu.com/f?ie=utf-8&kw=%E9%87%8D%E5%BA%86%E9%82%AE%E7%94%B5%E5%A4%A7%E5%AD%A6&fr=search" target="_blank">
				<div class="herf" style="background:#DDD">
					<p class="text1">重邮贴吧</p>
				</div>
			</a>
			<a href="11.html">
			<div class="herf" style="background:#DDD">
				<p class="text1">+ 网站推荐</p>
			</div>
			</a>
		</div>
		<div class="b">
			<h1>二次元类</h1>
			<a href="http://www.acfun.tv" target="_blank">
				<div class="herf" style="background:#cc0000"onmouseover="this.style.backgroundColor='#c03'" onmouseout="this.style.backgroundColor='#c00'">
					<p class="text">同♂性交友</p>
				</div>
			</a>
			<a href="http://www.bilibili.tv" target="_blank">
				<div class="herf" style="background:#FF6699"onmouseover="this.style.backgroundColor='#f99'" onmouseout="this.style.backgroundColor='#f69'">
					<p class="text">小学生之家</p>
				</div>
			</a>
			<div class="herf" style="background:#ddd;cursor:pointer"
			onclick="boom()">
				<p class="text1">C站</p>
			</div>
			<a href="http://www.hacg.me" target="_blank">
				<div class="herf" style="background:#ddd">
					<p class="text1">H站</p>
				</div>
			</a>
			<a href="http://www.nicovideo.jp" target="_blank">
				<div class="herf" style="background:#ddd">
					<p class="text1">N站</p>
				</div>
			</a>
			<a href="http://www.pixiv.net" target="_blank">
				<div class="herf" style="background:#ddd">
					<p class="text1">P站</p>
				</div>
			</a>
			<a href="22.html">
			<div class="herf" style="background:#DDD;cursor:pointer">
				<p class="text1">+ 信仰</p>
			</div>
			</a>
		</div>
		<div class="b">
			<h1>yooooooo戏</h1>
			<a href="http://store.steampowered.com/" target="_blank">
				<div class="herf" style="background:#000033" onmouseover="this.style.backgroundColor='#036'" onmouseout="this.style.backgroundColor='#003'">
					<p class="text">sbeamer</p>
				</div>
			</a>
			<a href="http://www.store.origin.com" target="_blank">
				<div class="herf" style="background:#ddd">
					<p class="text1">橘子</p>
				</div>
			</a>
			<a href="http://www.uplay.com" target="_blank">
				<div class="herf" style="background:#ddd">
					<p class="text1">育碧(奇)</p>
				</div>
			</a>
			<a href="33.php">
				<div class="herf" style="background:#ddd;cursor:pointer">
					<p class="text1">喜+1</p>
				</div>
			</a>
			<?php
			include('11put.php');
			foreach ($message as $key => $value) {
			?>
			<div class="herf" style="background:#ddd">
			<a href="<?php echo $value['comment'] ?>"><p><?php echo $value['name'] ?></p></a>
			</div>
			<?php
				}
			?>
		</div>


		<form action="del.php" method="POST">
			输入要删除的网站：
			<input type="text" name="del">
			<input type="submit">
		</form>

		<script type="text/javascript">
			function boom(){
				alert("没事上什么曹刘！∑(っ °Д °;)っ");
			}
		</script>

</body>
</html>