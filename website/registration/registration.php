<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CrazyFire Lee, Cash Lu, Chess Kuo">

    <title>Registration</title>
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/regisration.css">
</head>
<body>
    <main>
        <div class="row">
            <div class="col-md-6 mx-auto p-0">
                <div class="card">
                    <div class="login-box">
                        <div class="login-snip">
                            <?php include('errors.php'); ?>
                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                            <label for="tab-1" class="tab">Login</label>
                            <input id="tab-2" type="radio" name="tab" class="sign-up">
                            <label for="tab-2" class="tab">Sign Up</label>
                            <div class="login-space">
                                <form action="registration.php" method="POST">
                                    <div class="login">
                                        <div class="group">
                                            <label for="user" class="label">Username</label>
                                            <input id="user" type="text" class="input" placeholder="Enter your username" name="username">
                                        </div>
                                        <div class="group">
                                            <label for="pass" class="label">Password</label>
                                            <input id="pass" type="password" class="input" data-type="password" placeholder="Enter your password" name="password">
                                        </div>
                                        <div class="group">
                                            <input type="submit" class="button" value="Sign In" name="login_user">
                                        </div>
                                    </div>
                                </form>
                                
                                <form action="registration.php" method="POST">
                                    <div class="sign-up-form">
                                        <div class="group">
                                            <label for="user" class="label">Username</label>
                                            <input id="user" type="text" class="input" placeholder="Create your Username" name="username">
                                        </div>
                                        <div class="group">
                                            <label for="pass" class="label">Password</label>
                                            <input id="pass" type="password" class="input" data-type="password" placeholder="Create your password" name="password_1">
                                        </div>
                                        <div class="group">
                                            <label for="pass" class="label">Repeat Password</label>
                                            <input id="pass" type="password" class="input" data-type="password" placeholder="Repeat your password" name="password_2">
                                        </div>
                                        <div class="group">
                                            <label for="pass" class="label">Email Address</label>
                                            <input id="pass" type="text" class="input" placeholder="Enter your email address" name="email">
                                        </div>
                                        <div class="group">
                                            <input type="submit" class="button" value="Sign Up" name="reg_user">
                                        </div>  
                                        <div class="hr"></div>
                                        <div class="foot">
                                            <label for="tab-1">Already Member?</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>



