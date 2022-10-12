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
        
        <!-- End Video Background -->

        <!-- Content text -->
        <!-- <div id="content-1">
            <div class="container">
                <div class="row ct-1">
                    <div class="r-ct-1 col-half col">
                        <div>
                            <h2 class="row head-ct-1">
                                Dịch vụ phát triển phần mềm
                            </h2>
                            <p class="row p1-ct-1">
                                Nghiên cứu, tư vấn, thiết kế phần mềm với giao diện và chức năng đáp ứng theo yêu cầu
                                của
                                khách hàng.
                                Hợp tác phát triển trên 2 hình thức: Labo outsourcing và Project-based outsourcing.</p>

                        </div>
                        <div class="row p2-ct-1">
                            <ul>
                                <li>    Phát triển phần mềm doanh nghiệp</li>
                                <li>    Phát triển hệ thống website</li>
                                <li>    Phát triển ứng dụng điện thoại di động</li>
                                <li>    Phát triển Game</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-half col l-ct-1">
                        <img src="https://rabiloo.com/images/homepage/sv/sv1.svg" alt="" class="robot-img">
                    </div>
                </div>
            </div> -->



        </div>

        <div class="clear"></div>


        <!-- End Content text -->
        <!-- User login form -->
        <!-- <div class="user-login">

            <input class="id-login col-80" type="text" placeholder="Enter your id">
            <div></div>
            <button class="user-login-button">Login</button>
            <div class="clear"></div>
        </div> -->
        <form action="userLogin.php" method="post" class="user-login">
            <div class = "user-id">
                <input class="id-login col-80" type="text" placeholder="Enter your id" name="userId">
            </div>
            
            <br>
            <div class = "user-id">
                <button class="user-login-button" type="submit">Login</button>
            </div>
            
        </form>


        <!-- End User login form -->
    </div>



    <script>
        function dieu_huong() {
            location.assign("adminUI.html");
        }
    </script>


</body>

</html>