<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <video id="video_background" autoplay muted loop>

            <source src="./assets/video-background/video-background2.mp4" type="video/mp4" />

    </video>


    <div id="header">
        <div class="content-text">
            <h1 class="content-text-heading"><img src="https://rabiloo.com/images/logo-menu-white.svg" alt=""></h1>
            <div class="clear"></div>
        </div>
        <div class="admin-login">
            <a href="adminLogin.php"><i class="admin-login-button ti-settings"></i></a>
        </div>

    </div>
    <div id="content">
        

        </div>

        <div class="clear"></div>


        <!-- End Content text -->
        <!-- User login form -->
       
        
        <div class="user-login">
        <form action="userLogin.php">
            <input class="id-login col-80" type="number" name="userId" placeholder="">
            <input class="user-login-button" type="submit" value="Sign in" onclick=""> 
            <?php if (isset($_GET['error'])) { ?>

                    <p class="error"><?php echo $_GET['error']; ?></p>

            <?php } ?>

        </form>
            <div class="clear"></div>
        </div>


        <!-- End User login form -->
    </div>


</body>

</html>