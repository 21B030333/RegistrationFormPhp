<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <h1>SignUp</h1>

  <form action="signup.php" method="post" novalidate>

    <div>
      <label for="name">Name</label>
      <input type="text" id="name" name = "name">
    </div>

    <div>
      <label for="email">Email</label>
      <input type="email" id="email" name="email">
    </div>

    <div>
      <label for="password">Password</label>
      <input type="password" id="password" name="password">
    </div>

    <div>
      <label for="password_confirm">Repeat password</label>
      <input type="password" id="password_confirm" name="password_confirm">
    </div>

    <button>Sign Up</button>

    <img src="kbtu.png" alt="" id="kbtu">
  </form>
</body>
</html>