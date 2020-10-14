<?php
    include 'common.php';
   // 检测连接
   if($conn ->connect_error)
   {
       die("连接失败：". $conn->connect_error);
   }
   
    $event = $_POST['event'];

    $sql = "INSERT INTO memo (event, state)
    VALUES ('{$event}','0')";
     
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
     
    $conn->close();