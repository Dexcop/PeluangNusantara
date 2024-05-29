<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peluang Nusantara - Register</title>
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <?php include '../components/navbar.php' ?>

    <div class="content">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <form action="/submit_registration" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="password">Confirm Password</label>
            <input type="password" id="password" name="password" required>

            <div class="password-requirements">
                <p>Password must contain:</p>
                <ul>
                    <li>At least 8 characters</li>
                    <li>At least one uppercase letter</li>
                    <li>At least one number</li>
                    <li>At least one special character</li>
                </ul>
            </div>

            <label>
                <input type="checkbox" name="terms" required> I accept the <a href="#">Terms of Use</a> & <a
                    href="#">Privacy Policy</a>
            </label>

            <button type="submit">Register</button>
        </form>

        <div class="login-link">
            <p>Already have an account? <a href="/login">Login here</a>.</p>
        </div>
    </div>
</body>

</html>