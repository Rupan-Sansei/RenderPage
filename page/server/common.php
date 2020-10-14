<?php
   header('Content-Type: text/html;charset=utf-8');
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname="website";
   
   // 创建连接
   $conn = new mysqli($servername, $username, $password,$dbname);