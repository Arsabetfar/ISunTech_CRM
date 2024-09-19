<html>
    <head>
    <link rel="stylesheet" href="admin.css">
        <script>
            window.onload = function(){
                const elem = document.createElement("script");
                elem.src = "../js/UserAdd.js";
                document.body.appendChild(elem);
            }
        </script>
    </head>
    <body>
        <form method="POST" action="../BL/php/UserPage.php">
            <div><label>نام کاربر</Lablel><input type="text" name="fullname"/></div>
            <div><label>کلمه عبور</Lablel><input type="text" name="username"/></div>
            <div><label>رمزعبور</Lablel><input type="text" name="password"/></div>
            <div><input type="submit" value="تایید" name="submit"/></div>
            <div><input type="submit" value="انصراف" name="cancel"/></div>
        </form>
    </body>
</html>