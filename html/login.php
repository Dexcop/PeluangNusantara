<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peluang Nusantara - Login</title>
  <link rel="stylesheet" href="../css/register.css">
</head>

<body>
  <?php include '../components/navbar.php' ?>

  <div class="content">
    <h1>Welcome Back!</h1>
    <form action="/submit_registration" method="post">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <div class="password-link">
        <a href="../html/login.php">Forgot Password</a>
      </div>

      <button type="submit">Login</button>
    </form>

  </div>
</body>

</html>