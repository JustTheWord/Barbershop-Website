<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Barbershop</title>
</head>

<body class="sign-in-body">

<?php require __DIR__ . '/_header.php' ?>
<link rel="stylesheet" href="css/signin_style.css">

<div class="sign-in-container">

    <form action="login" method="post" id="form-sign-in">

        <?php
        if (isset($emailError) && !empty($emailError)) {
            ?>
            <h1 id="form-email-error"><?= $emailError ?></h1>
            <?php
        }
        ?>
        <label for="email">Email:</label>
        <input type="email" id="email" class="email required" name="email"
               value="<?php  if( isset($emailValue)) echo "$emailValue";?>" required>
        <br>
        <?php
        if (isset($passError) && !empty($passError)) {
            ?>
            <h1 id="form-pass-error"><?= $passError; ?></h1>
            <?php
        }
        ?>
        <label for="password">Password:</label>
        <input type="password" id="password" class="password required" name="password" required>
        <br>
        <div class="show-password-container">
            <label class="show-password-label" for="pass-checkbox">Show password</label>
            <input type="checkbox" id="pass-checkbox" name="show-password">
        </div>
        <br>
        <input type="submit" value="Sign In">
        <br>
        <div class="sign-up-link">
            <span>Don't have an account?</span>
            <a href = "https://wa.toad.cz/~grebegor/signup">Sign up here</a>
        </div>
    </form>

</div>

<script src="js/controlSignInForm.js"></script>

<?php require __DIR__ . '/_footer.php' ?>
</body>

</html>
