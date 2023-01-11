<?php
declare(strict_types=1);
?>


<body class="sign-in-body">

<?php require __DIR__ . '/_header.php' ?>
<style> @import "../../css/signin_style.css"; </style>

<div class="sign-in-container">

    <form>
        <h2>Sign Up</h2>
        <label for="name">Name and Surname:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="phone">Phone: (e.g. 773-980-395)</label>
        <input type="tel" id="phone" name="phone" required>
        <br>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <div class="show-password-container">
            <label class="show-password-label" for="show-password">Show password</label>
            <input type="checkbox" class="show-password" name="show-password" onclick="showPassword()">
        </div>

        <br>

        <label for="password_confirm">Confirm Password:</label>
        <input type="password" id="password_confirm" name="password_confirm" required>
        <br>
        <div class="show-password-container">
            <label class="show-password-label" for="show-password-confirm">Show password</label>
            <input type="checkbox" class="show-password" name="show-password" onclick="showPassword()">
        </div>
        <br>
        <input type="submit" value="Submit">
    </form>

</div>

<script src="/js/"></script>

<?php require __DIR__ . '/_footer.php' ?>
</body>