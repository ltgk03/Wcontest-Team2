<!DOCTYPE html>
<html lang="en">





<head>


    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/adminLogin.css">
</head>



<body>
    <div class="all">
        <div id="content">
            <div id="login-content">


                <form action="adminIn.php" method="POST" class="sign-in-form">

                    <h2 class="log"> Sign in</h2>


                    <div class="s1"><label class="form-label s1" for="adminAcc">Username:</label><br></div>
                    <input class="acc-form" type="text" id="adminAcc" name="adminAcc" value="" placeholder="Please enter your username" required><br>
                    <div class="s2"><label class="form-label" for="adminPass">Password:</label><br></div>
                    <input class="pass-form" type="text" id="adminPass" name="adminPass" value="" placeholder="Please enter your password" required><br><br>
                    <?php if (isset($_GET['error'])) { ?>

                        <p class="error"><?php echo $_GET['error']; ?></p>

                    <?php } ?>
                    <input class="submit" type="submit" value="Sign in" onclick="">
                </form>

                <div class="need-help">Need help?</div>
            </div>
        </div>
    </div>


</body>




</html>