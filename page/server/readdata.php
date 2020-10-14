<?php
   include 'common.php';
   
   // 检测连接
   if($conn ->connect_error)
   {
       die("连接失败：". $conn->connect_error);
   }
   
//    echo "连接成功";
   $sql = "SELECT * FROM tag";
   $result = $conn->query($sql);
   $css=$result->fetch_all();
   $json= json_encode($css);  //将数组转换成json对象
   echo $json;
//    print_r($css);
   $conn->close();
//    print_r ($result);