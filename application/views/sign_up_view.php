<?php
declare(strict_types=1);
?>


<body class="sign-in-body">

<?php require __DIR__ . '/_header.php' ?>
<link rel="stylesheet" href="../../css/signup_style.css">

<div class="sign-up-container">

    <form action="register" method="post" id="form-sign-up">

        <h2>Sign Up</h2>
        <?php
        if (isset($nameError) && !empty($nameError)) {
            ?>
            <h1 id="form-name-error"><?= $nameError ?></h1>
            <?php
        }
        ?>
        <label for="name">Name and Surname:</label>
        <input type="text" id="name" class="name required" name="name"
               value="<?php  if( isset($nameValue)) echo "$nameValue";?>" required>
        <br>

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
        if (isset($phoneError) && !empty($phoneError)) {
            ?>
            <h1 id="form-phone-error"><?= $phoneError ?></h1>
            <?php
        }
        ?>
        <label for="phone">Phone: (e.g. 773-980-395)</label>
        <input type="tel" id="phone" class="phone required" name="phone"
               value="<?php  if( isset($phoneValue)) echo "$phoneValue";?>" required>
        <br>
        <?php
        if (isset($dateError) && !empty($dateError)) {
            ?>
            <h1 id="form-data-error"><?= $dateError ?></h1>
            <?php
        }
        ?>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" class="date required" name="birthday"
               value="<?php  if( isset($dateValue)) echo "$dateValue";?>" required>
        <br>
        <?php
        if (isset($passError) && !empty($passError)) {
            ?>
            <h1 id="form-pass-error"><?= $passError ?></h1>
            <?php
        }
        ?>
        <label for="password-signup">Password:</label>
        <input type="password" id="password-signup" class="password required" name="password" required>
        <br>
        <?php
        if (isset($repeatPassError) && !empty($repeatPassError)) {
            ?>
            <h1 id="form-confirm-pass-error"><?= $repeatPassError ?></h1>
            <?php
        }
        ?>
        <label for="password_confirm_signup">Confirm Password:</label>
        <input type="password" id="password_confirm_signup" class="password required" name="password_confirm" required>
        <br>
        <div class="show-password-container">
            <label class="show-password-label" for="pass-checkbox_signup">Show passwords</label>
            <input type="checkbox" id="pass-checkbox_signup" name="show-password">
        </div>
        <br>
        <input type="submit" value="Submit">
    </form>
</div>

<script src="/js/controlSignUpForm.js"></script>

<?php require __DIR__ . '/_footer.php' ?>
</body>