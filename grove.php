<?php
session_start();
if (!isset($_SESSION['login_time'])) {
    $_SESSION['login_time'] = time();
}
$time_elapsed = time() - $_SESSION['login_time'];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Street</title>
    <link rel="stylesheet" href="floors.css">
</head>
<body>
    <h1>Home</h1>

    <?php if(isset($_SESSION["user_id"])): ?>
        <p>You are logged in.</p>
        <div class="floors">
        <img src="1.png" alt="" width="100px" height="100px">
        <img src="2.png" alt="" width="100px" height="100px">
        <img src="3.png" alt="" width="100px" height="100px">
        <img src="4.png" alt="" width="100px" height="100px">
        <img src="5.png" alt="" width="100px" height="100px">
        </div>
        <p><?php echo "You visited the site $time_elapsed seconds ago."; ?></p>
        <p><a href="logout.php">Log out</a></p>
    <?php else:  ?>
        <p><a href="login.php">Login in</a> or <a href="signup.php">Sign Up</a></p>
    <?php endif; ?>
</body>
</html>