
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registeration Form</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div class="header">
            <h2>REGISTER USER</h2>
        </div>
        <form method="post" action="register.php">

            <?php include('errors.php'); ?>

            <div class="input-group">
                <label>Enter a Username: </label>
                <input type="text" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <label>Enter your Email: </label>
                <input type="email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <label>Create a Password: </label>
                <input type="password" name="password_1" required>
            </div>
            <div class="input-group">
                <label>Confirm your Password: </label>
                <input type="password" name="password_2" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="reg_user">Register</button>
            </div>

            <p>Already? an Active Member!! <a href="login.php">Login In</a></p>
        </form>
    </body>
</html>