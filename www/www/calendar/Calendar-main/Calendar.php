<?php
include_once("../conn.php");
    $date=$_POST['cDate'];
    $content=$_POST['mytxt'];
    $sql = "insert into memorandum(send_time,content) value('$date','$content')";
    $res=mysqli_query($link,$sql) or exit("数据库异常</br>");
    $url='./index.html';
    echo "<script>alert('保存成功')</script>";
    echo "<meta http-equiv='Refresh' content='0;URL=$url'>";


?>