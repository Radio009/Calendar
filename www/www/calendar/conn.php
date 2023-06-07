<?php
//连接数据库服务器
$hostname ="127.0.0.1";
$username ="root";
$psd ="";
$link =@mysqli_connect($hostname,$username,$psd) or die("服务器链接错误");
//选择数据库
mysqli_select_db($link,"db_calendar") or die("没有找到你要的数据库");
//设置字符编码
mysqli_query($link,"set names utf8");