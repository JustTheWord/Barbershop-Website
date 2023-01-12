<?php
declare(strict_types=1);
?>


<body class="sign-in-body">

<?php require __DIR__ . '/_header.php' ?>
<style> @import "../../css/signin_style.css"; </style>

<div class="sign-in-container">
<!--    action="/signin" method="post"-->
    <form>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
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
            <a href = "http://localhost:8000/signup">Sign up here</a>
        </div>
    </form>

</div>

<script src="/js/controlSignInForm.js"></script>

<?php require __DIR__ . '/_footer.php' ?>
</body>