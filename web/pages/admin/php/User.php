<?php
    require_once "../BL/php/UserPage.php";
    //require_once PATH_ROOT."database.php";
?>
<html>
    <head>

    <link rel="stylesheet" href="../styles/admin.css">
    <link rel="stylesheet" href="message.css">
    <link rel="stylesheet" href="message.css">
        <!-- <script>
            window.onload = function(){
                const elem = document.createElement("script");
                elem.src = "admin.js";
                document.body.appendChild(elem);
            }
        </script> -->
    </head>
    <body>
        
            <!-- <img src="../images/delete.svg" style="widht:10px; height:10px" alt="حذف ">
        </input> -->
        <!-- <img src="../images/delete.svg" style="widht:100px; height:100px" alt="حذف "> -->
        <?php
            $msg = isset($_GET['msg']) ? $_GET['msg'] : "";
            $msgClass = isset($_GET['msgClass']) ? $_GET['msgClass'] : "";
            if(!empty($msg))
                echo "<div class='$msgClass'>$msg</div>";
                ?>
        <form method="POST" action="../admin/UserAdd.php">
            <input type="submit" value="کاربر جدید" name="adduser"/>
        </form>
            <?php
                $html = "<table>";
                $html = $html.'<tr>';
                $html = $html."<th>"." "."</th>";
                $html = $html."<th>"."نام کاربر"."</th>";
                $html = $html."<th>"."کلمه عبور"."</th>";
                $html = $html."<th>"."رمز عبور"."</th>";
                $html = $html."<th>"." "."</th>";
                $html = $html."<tr>";
                $html = $html.usersGrid();
                $html = $html."</table>";
                echo $html;
            ?>
    </body>
</html>