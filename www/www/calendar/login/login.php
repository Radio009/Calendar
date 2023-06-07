<?php
include_once("../conn.php");
if($_POST['type']=='2'){
    $username=$_POST['uname'];
    $password=$_POST['upwd'];
    $sql="select id,password from user where id='$username' and password='$password'";
    $res=mysqli_query($link,$sql) or exit("数据库异常</br>");
    if (mysqli_num_rows($res)!=0){
        $url='../Calendar-main/index.html';
        echo "<script>alert('登陆成功')</script>";
    }
    else{
        $url='./login.html';
        echo "<script>alert('账号或密码有误')</script>";
    }
    echo "<meta http-equiv='Refresh' content='0;URL=$url'>";

}
else{
    $email=$_POST['nemail'];
    $password=$_POST['npwd'];
    $username=$_POST['nname'];
    $sql = "insert into user(id,password,email) value('$username','$password','$email')";
    $res=mysqli_query($link,$sql) or exit("数据库异常</br>");
    $url='./login.html';
    echo "<script>alert('注册成功')</script>";
    echo "<meta http-equiv='Refresh' content='0;URL=$url'>";
}

?>