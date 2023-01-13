<?php
declare(strict_types=1);
?>


<body class="sign-in-body">

<?php require __DIR__ . '/_header.php' ?>
<link rel="stylesheet" href="../../css/signup_style.css">

<div class="sign-up-container">

    <form action="register" method="post" id="form-sign-up">

        <h2>Sign Up</h2>
        <label for="name">Name and Surname:</label>
        <input type="text" id="name" class="name required" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" class="email required" name="email" required>
        <br>
        <label for="phone">Phone: (e.g. 773-980-395)</label>
        <input type="tel" id="phone" class="phone required" name="phone" required>
        <br>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" class="date required" name="birthday" required>
        <br>
        <label for="password-signup">Password:</label>
        <input type="password" id="password-signup" class="password required" name="password" required>
        <br>
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