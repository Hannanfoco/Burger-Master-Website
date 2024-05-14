<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Burger Master</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-color: #c28d56;
    }

    .logo img {
      width: 50px;
      height: auto;
      margin-bottom: 20px;
    }

    .email, .password {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      margin-bottom: 20px;
    }

    .email label, .password label {
      margin-bottom: 5px;
    }

    .login {
      background-color: #b27c46;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .footer {
      display: flex;
      justify-content: space-between;
      width: 100%;
      padding: 20px 0;
    }
  </style>
</head>
<body>
  <div class="screen">
    <div class="logo"><img src="./images/logo" alt=""></div>
    <div class="email">
      <label for="email">Email Address</label>
      <input type="email" name="email" placeholder="Username@gmail.com"/>
    </div>
    <div class="password">
      <label for="password">Password</label>
      <input type="password" name="password" placeholder="············"/>
    </div>
    <button class="login">Login</button>
    <div class="footer">
      <span>Signup</span>
      <span>Forgot Password?</span>
    </div>
  </div>
</body>
</html>
