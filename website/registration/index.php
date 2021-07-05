<?php 
    session_start(); 

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: registration.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: registration.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CrazyFire Lee, Cash Lu, Chess Kuo">

    <title>Home-page</title>

    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/regisration.css">
</head>
<body>
    <header>
        <h1>Home page</h1>
    </header>

    <main>
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
        <h3>
        <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
        ?>
        </h3>
        </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout='1'" style="color: red;">logout</a></p>
        <?php endif ?>
    </main>
</body>
</html>