<?php
$is_invalid = false;

include("db.php");
if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $sql = sprintf("SELECT * FROM data WHERE email = '%s'", $conn -> real_escape_string($_POST["email"]));

    $result = $conn -> query($sql);

    $user = $result -> fetch_assoc();
    if($user){
        if($_POST["password"] === $user["user_password"]){
            session_start();
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: grove.php");
            $_SESSION['login_time'] = time();
            exit;
        }
    }
    $is_invalid = true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Login</h1>

  <?php if($is_invalid):    ?>
        <em>Invalid Login</em>
    <?php endif;   ?>
    <form action="" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br>

        <label for="password">Password</label>
        <input type="password" name="password" id = "password"><br>

        <button>Log In</button>
    </form>
    <img src="kbtu.png" alt="">
</body>
</html>