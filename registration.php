<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registration</title>
    <link rel="stylesheet" href="/css/regstyle.css">
  </head>

<body>
    <div class="regform">
      <form action="/registration/signup.php" method="post" enctype="multipart/form-data">
        <a href="/" class="header__logo-link">
        <img src="./img/svg/odigo-logo.svg" alt="Discover Amazing places in Japan" class="header__logo-pic">
        </a>
          <label>Login</label>
          <input type="text" name="login" placeholder="Enter your login">
          <label>Email</label>
          <input type="email" name="email" placeholder="Enter your email">
          <label>Password</label>
          <input type="password" name="pass" placeholder="Enter your password">
          <label>Confirm your password</label>
          <input type="password" name="password_confirm" placeholder="Confirm your password">
          <button type="submit">Submit</button>
        <p>
        Do you already have an account? - <a href="/authorization.php">Authorization</a>!
        </p>
    </div>
</body>

</html>
