<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peluang Nusantara - Login</title>
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/navbar.css">
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="../html/home.php">Home</a></li>
        <li><a href="../html/donationmenu.php">Donate</a></li>
        <li><a href="#">About Us</a></li>
        <!-- <li><a href="#">Contact</a></li> -->
      </ul>
    </nav>
    <div class="mylogo"><img src="../assets/logo.png" alt=""></div>
    <a href="../html/register.php" class="joinuss"><img src="../assets/join-us.png" alt=""></a>
  </header>

  <div class="content">
    <h1>Welcome Back!</h1>
    <form action="../html/home.php" method="post">
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