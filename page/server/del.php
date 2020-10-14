<?php
    include 'common.php';
   // 检测连接
   if($conn ->connect_error)
   {
       die("连接失败：". $conn->connect_error);
   }
   
    $del = $_POST['del'];

    $sql = "DELETE FROM memo
    WHERE event = '{$del}'";
     
    if ($conn->query($sql) === TRUE) {
        echo "删除成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
     
    $conn->close();