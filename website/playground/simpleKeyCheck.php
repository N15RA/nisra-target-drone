<?php
    $userInput = '';
    $check = true;
    if (isset($_POST['submit_code'])) {
        $key = $_POST['code'];

        if (strlen($key) == 0x10) {
            for ($i = 0; $i < strlen($key) - 1; $i++) {
                if (ord($key[$i]) - ord($key[$i + 1]) != -1) {
                    $check = false;
                    break;
                }
            }
        } else {
            $check = false;
        }

        if ($check == true) {
            $flag = 'The flag is: NISRA{me0w_m1_b1g_war_six_Ann1v3rsary!!!}';
        } else {
            $flag = 'Sorry, the code is incorrect';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CrazyFire Lee, Cash Lu, Chess Kuo">

    <title>Playground</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/styles/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/styles/styles.css">
</head>

<body>
    <header class="text-center">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/images/logos/logo-sm.png" alt="nisra logo" width="35" height="35">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link px-2 text-secondary" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-2 text-white" href="/members.html">Members</a></li>
                        <li class="nav-item"><a class="nav-link px-2 text-white" href="/events.php">Events</a></li>
                        <li class="nav-item"><a class="nav-link px-2 text-white" href="/playground.html">Playground</a></li>
                    </ul>

                    <button class="btn btn-outline-light me-2 justify-content-end" type="button">
                        <a class="text-decoration-none text-white" href="/registration/login.php">Login</a>
                    </button>
                    <button class="btn btn-outline-warning me-2 justify-content-end" type="button" >
                        <a class="text-decoration-none text-warning" href="/registration/register.php">Sign-Up</a>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container p-3">
            <div class="row g-5 align-items-center justify-content-center p-3">
                <div class="col-md-8 text-center p-3">
                    <h1>????????????????????????~???~???~?????????-??????</h1>

                    <p>
                        ???????????????????????????NISRA???????????????????????????????????????????????? <br>
                        ????????????????????????????????????????????????????????????????????? Flag! <br>
                        (??????????????????????????????SimpleKeyCheck ?????????????????????????????????????????????????????????????????????/flag.txt??????) <br>
                        ???????????????????????????????????????check????????????php
                    </p>

                    <form action="simpleKeyCheck.php" method="POST">
                        <section class="user-code">
                            <label for="code">The code you get?</label>
                            <br>
                            <input id="code" type="text" placeholder="Enter your code" name="code" required>
                        </section>

                        <section class="submission">
                            <button type="submit" value="Check Code" name="submit_code">
                                Check Code
                            </button>
                        </section>
                    </form>

                    <hr>

                    <?php if (isset($_POST['submit_code'])) { ?>
                        <p><?php echo $flag; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center text-lg-start text-muted">
        <div class="container">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>

                <div class="text-end">
                    <a class="nav-link text-secondary" href="https://www.facebook.com/N15RA">
                        <img src="/images/icons/facebook.svg" alt="facebook icon" width="20">
                        <span>www.facebook.com/N15RA</span>
                    </a>
                </div>
            </section>
    
            <!-- Copyright -->
            <div class="text-center p-4 copyright">
                ?? 2021 Copyright:
                <a class="text-white" href="https://www.nisra.net/">www.nisra.net</a>
            </div>
        </div>
    </footer>

    <script src="/scripts/bootstrap.bundle.min.js"></script>
</body>
</html>
