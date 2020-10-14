<?php
session_start();//启动session

include 'common.php';
   // 检测连接
if($conn ->connect_error)
{
       die("连接失败：". $conn->connect_error);
}

$uid=$_POST["uid"];
$pwd=$_POST["pwd"];

$sql = "SELECT * FROM `user` WHERE `uid` LIKE '{$uid}' AND `pwd` LIKE '{$pwd}'";
$result = $conn->query($sql);
$row = mysqli_num_rows($result);

//若表中存在输入的用户名和密码，row=1；若表中用户名不存在或密码错误，则row=0

if($row == 1){
    $_SESSION["uid"]=$uid;
    header("location:../startpage.php");

}
else{
    echo '<script>alert("登录失败");window.location.href="../login.html"</script>';
}	
$conn->close();

