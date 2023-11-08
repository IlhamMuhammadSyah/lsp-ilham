<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" type="text/css" href="css/logist.css" />

    <title>Login</title>
  </head>
  <body>
    <div class="alert alert-warning" role="alert"></div>

    <div class="container">
      <form action="" method="POST" class="login-email">
        <p class="login-text" style="font-size: 1.8rem; font-weight: 500">
          Log in to your account
        </p>
        <p class="login-text2">Welcome back you've been missed!</p>
        <div class="input-group">
          <p>Username</p>
          <input
            type="email"
            placeholder="Enter your username"
            name="email"
            value=""
            required
          />
        </div>
        <div class="input-group">
          <p>Password</p>
          <input
            type="password"
            placeholder="********"
            name="password"
            value=""
            required
          />
        </div>
        <div class="input-group">
          <button name="submit" class="btn">Log In</button>
        </div>
        <p class="login-register-text">
          Don't have an account? <a href="signup.php">Sign Up</a>
        </p>
      </form>
    </div>
  </body>
</html>
