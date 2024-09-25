<?php
require_once "../../bootstrap/app.php";
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> ISUNTECH CRM - سامانه مدیریت مشتریان آیسانتک</title>
    <link rel="stylesheet" href="style.css">
    <script>
        window.onload = function(){
            const element = document.createElement("script");
            element.src = "main.js";
            document.body.appendChild(element);
        };
    </script>
</head>

<body>
    <div class="w_full headermain " style="height: 50px;position: fixed;" >
        <div style="justify-content: center" class="abutton marg_full ">
            <a class=" a_login_reigster float_Left" href="Pages/profile.php">ورود | ثبت‌نام</a>
            <svg class="float_right" style="width: 24px; height: 24px; fill: aqua"></svg>
        </div>
        
        <!-- <div style="float: left;position: relative;width: 100px;margin-top: 10px;margin-left: 10px;">
            سایت پشتیبانی شرکت
        </div> -->
        <img class="logo" src="images/Asset 3@3x.png">
    </div>
    <!-- <div id="div1">سلام سلام سلام</div>
    <h1 class="header">سیستمهای مدیریتی  آیسانتک </h1>
    <a href="Pages/Calculator.php">محاسبه فاکتوریل</a>
    <a href="Pages/tabletest.html">صفحه طراحی جدول</a>
    <a href="Pages/Headerfootermenu.html">صفحه هدر فوتر</a>
    <h2 id="demo"></h2>  
    <h3 id="Ali">hhhhhhhhhh</h3>
    <button id="btn1" value="click me" onclick="changetext()">ddddddddd</button>
    <input type="button" value="eeeeeeeee" onclick="changetext()"/>
    <a href="http://www.google.com">googoo</a>
    <!-- <script src="main.js"></script> -->
    <!-- <form name="myform" acion="/action" onsubmit="return validateform()" method="post">
        name:<input id = "name" type="text">
        <br></br>
        lname:<input id = "lname" type="text" required>
        <br></br>
        <input type="submit" value="submit">
    </form> --> 
</body>
</html>
