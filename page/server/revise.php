<?php
    include 'common.php';
   // 检测连接
   if($conn ->connect_error)
   {
       die("连接失败：". $conn->connect_error);
   }
   
    $revise = $_POST['revise'];
    
    $sql = "UPDATE memo SET state = 1
    WHERE event = '{$revise}'";
     
    if ($conn->query($sql) === TRUE) {
        echo "修改成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
     
    $conn->close();