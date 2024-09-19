<?php
    require_once "../../config/config.php";
    use config\Constants;
    //$conf = new Constants();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../styles/admin.css"> -->
    <title>ورود به سامانه پشتیبانی نرم افزار آیسانتک</title>
    <script>
        window.onload = function(){
            const elem = document.createElement("link");
            elem.rel = "stylesheet";
            elem.href = "<?php echo Constants::PATH_STYLES; ?>login.css";
            document.body.appendChild(elem);
        }
    </script>
</head>
<body>
        <div class="page-container" >
            <div style="width: 100%;height:100px;"></div>
            <form method="get" action="login.php"  class="dflex flex-column justify-content-center ">
                <div class="dflex flex-column justify-content-center padding-10 border-1 border-radius-5 border-color-grey w-320 gap-5 border-shadow">
                    <img id="login-pic" src="<?php echo Constants::PATH_IMAGES; ?>/Asset 1.svg">
                    <input placeholder="نام کاربر" type="text" name="userName" value="">
                    <input placeholder="رمز عبور" type="text" name="password" value="">
                    <div class="dflex flex-row justify-content-right gap-5 w-300 padding-10">
                        <input class="font-small"  type="checkbox" name="chkSaveUser" value="">
                        <label class="font-small" for="chkSaveUser"  >آیا اطلاعات ذخیره گردد؟</label>
                    </div>
                    <a class="font-small w-300 margin-r-20 aWithoutUN" href="https://www.google.com" name="forgivePass"  >فراموشی رمز عبور</a>
                    <div id="section-catptcha" class="dflex flex-row padding-10  justify-content-right gap-5 w-320 ">
                        <div class= "dflex flex-row border-1 border-radius-5 border-color-grey w-300" >
                        <button type="button" class="dflex flex-row padding-10  justify-content-right gap-5 btnrefresh">
                            <i class="icon refresh" ></i>
                        </button>
                        <input type="text" placeholder="- - - -">
                        </div>
                    </div>
                    <input type="submit" value="ورود" name="btnLogin">
                </div>
            </form>
            <?php include('footer.php') ?>
        </div>
</body>
</html>