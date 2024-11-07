<?php
    $activePage = 'Login';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/BulbIcon.png">
    <title>GlowFlow • Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include 'navbar.php'; ?>
<?php include 'pageup.php'; ?>

<div class="LoginLogoContainer">
    <img src="../img/logoWhite.png" alt="" class="logo">
</div>

<div class="container">
    <div class="SubContainer">

        <form class="signin-form">
            <input type="email" placeholder="Email..." required>
            <input type="password" placeholder="Password..." required>
            <button type="submit">Sign in</button>
            <a href="#" class="forgot-password">Forgot password ?</a>
        </form>

        <div class="signup-link">
            <p>Don't have an account yet ? <a href="register.php">Sign up</a></p>
        </div>
    </div>
</div>

</body>
</html>