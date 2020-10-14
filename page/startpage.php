<?php
header('Content-Type: text/html;charset=utf-8');
session_start();
if(empty($_SESSION["uid"]))
{   echo '<script>alert("请先登录");window.location.href="login.html"</script>';
    print_r($_SESSION["uid"]);
//   header("location:login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="startpage.css">
    <link rel="shortcut icon" href="#" />
    <script src="./js/jquery-3.1.1.min.js"></script>
</head>
<body>
    <span id="uid">欢迎你，<?php echo$_SESSION["uid"]?></span>
    <!-- 收藏页面框 -->
    <div class="login" id="login">
        <div class="cover">
            <p>添加收藏</p>
            <p class="cp" >导航标题</p>
            <input type="text" placeholder="百度" id="input1">
            <p class="cp">导航描述</p>
            <input type="text" placeholder="百度, 是全球最大的中文搜索引擎、最大的中文网站" id="input2">
            <p class="cp">导航链接</p>
            <input type="text" placeholder="www.baidu.com" id="input3">
            <button style="background-color: #ffffff;" id="qx">取消</button>
            <button style="background-color:#3f5dea; color: #fff;" id="ok">确定</button>
        </div>
    </div>
    <div>
        <!-- 收藏添加网页的按钮 -->
        <div class="add" id="add"></div>
        <!-- 网页百度一下和收藏模块 -->
        <div class="bigbox" id="bigbox">
            <div id="synchronize">
                <input type="search" class="input" placeholder="百度一下" id="textbox">
            <ul id="mask">
                <li>
                    <a href="http://www.baidu.com/s?wd=充气娃娃">充气娃娃</a>
                    <a href="http://www.baidu.com/s?wd=波多野结衣">波多野结衣</a>
                    <a href="http://www.baidu.com/s?wd=你看你马呢">你看你马呢</a>
                    <a href="http://www.baidu.com/s?wd=你看你马呢">8说了</a>
                </li>
            </ul>
            </div>
            <button class="button" id="mask">百度一下</button>
        </div>
        <div class="title">我的收藏</div>
        
        <div class="box" id="tj"> 
    
        </div>
        <!-- 勾选模块 -->
        <div class="iconfont">
            <h2>我的待办</h2>
            <div style="margin-bottom: 10px" >
                <input type="text" class="check-text" placeholder= "添加你的待办事件"id="check-text">
                <button class="button" id="check-btn">添加</button>
            </div>
            <!-- 未完成模块 -->
            <div id="notfinished"><span >&#xe665;</span>未完成</div>
            <ul id="check-ul" >
                
            </ul>
            <!-- 已完成模块 -->
            <div id="finished"><span>&#xe665;</span>完成</div>
            <ul id="check-ul2" >
                
            </ul>

        </div>
    </div>

    

</body>
<script src="./js/startpage.js"></script>
<script src="https://lib.sinaapp.com/js/jquery/2.0.2/jquery-2.0.2.min.js"></script>

</html>