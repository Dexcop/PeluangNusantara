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
        <p>When early adopters and innovation seekers discover vibrant and imaginative technology <br> before it becomes
            mainstream technology.</p>
        <form action="/submit_registration" method="post">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="confirmEmail">Confirm Email</label>
            <input type="email" id="confirmEmail" name="confirmEmail" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

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
                <input type="checkbox" name="terms"> Receive tips to help you make the most of your fundraiser,
                and updates about important causes. Unsubscribe anytime.
            </label>

            <button type="submit">Register</button>
        </form>

        <div class="login-link">
            <p>Already have an account? <a href="../html/login.php">Login here</a>.</p>
        </div>
    </div>
</body>

</html>