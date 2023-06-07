<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>待办事项</title>
	</head>
	<body>
		<h1 align"center">待办事项</h1>
		<form action="" method="post" name="indexf">
			<p align="center"><input type="button" value="新增" name="inbut" onclick="location.href='新建功能.php'"/></p>
			<p align="center"><input type="text" name="sel"/><input type="submit" value="搜索" name="selsub"></p>
			<table align="center" border="1px" cellspacing="0px" width="800px">
				<tr><th>序号</th><th>截止时间</th><th>具体内容</th></tr>

<?php
	$link=mysqli_connect('localhost', '用户名', '密码', '数据库名称', '端口号');//命名函数去连接数据库,customer是数据库明恒
	if(!$link){
		exit('数据库连接失败');
	}
	//if-else判断是否有点击搜索
	if(empty($_POST["selsub"])){
		$res=mysqli_query($link, "select * from c1 order by stuid");
	}else{
		$sel=$_POST["sel"];
		$res=mysqli_query($link, "select * from c1 where stuid like '%$sel%' or 
						stuname like '%$sel%' or 
						stusex like '%$sel%' or 
						age like '%$sel%'");
	}	//搜索框得到的结果集，c1是数据表名称，stuid、stuname、stusex和age 是刚才数据表的列名
	//使用while循环把结果集显示出来
	while($row=mysqli_fetch_array($res)){
		echo'<tr align=center>';
		echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
			  <td>
			  <input type='submit' name='upsub$row[0]' value='修改'/>
			  <input type='submit' name='upsub$row[0]' value='删除'/>
			  </td>";
		echo'</tr>';
	}
?>
			</table>
		</form>
	</body>
</html>