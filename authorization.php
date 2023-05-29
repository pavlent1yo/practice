<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="/css/regstyle.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
</head>

<body>
    <div class="regform">
      <form action="/registration/login.php" method="post" enctype="multipart/form-data">
      <a href="/" class="header__logo-link">
        <img src="./img/svg/odigo-logo.svg" alt="Discover Amazing places in Japan" class="header__logo-pic">
      </a>
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter your login">
        <label>Password</label>
        <input type="password" name="pass" placeholder="Enter your password">
        <button type="submit">Confirm</button>
      <p>
        Didn`t have an account? - <a href="/registration.php">Registration</a>!
      </p>
    </div>
</body>

</html>
