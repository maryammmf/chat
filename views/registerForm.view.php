<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/registerCSS.css">
</head>
<body>
<form action="../controller/UserController.php" method="post">
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="username"><b>username</b></label>
        <input type="text" placeholder="username" name="username" id="username" required>




        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>

        <label for="password"><b> Password</b></label>
        <input type="password" placeholder="Password" name="password" id="password" required>


        <label for="phone"><b> phone</b></label>
        <input type="text" placeholder="phone" name="phone" id="phone" required>


        <hr>

        <button type="submit" class="registerbtn" name="register">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="loginForm.view.php">Sign in</a>.</p>
    </div>
</form>

</body>
</html>