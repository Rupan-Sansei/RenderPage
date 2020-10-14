<?php
    include 'common.php';
   
   // 检测连接
   if($conn ->connect_error)
   {
       die("连接失败：". $conn->connect_error);
   }
   
    $link = $_POST['link'];
    $title = $_POST['title'];
    $describes = $_POST['describes'];

    $sql = "INSERT INTO tag (imags, title, describes, link)
    VALUES ('pt/m7.ico', '{$title}','{$describes}', 'https://{$link}')";
     
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
     
    $conn->close();
    
   