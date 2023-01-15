<?php
declare(strict_types=1);
?>

<body class="sign-in-body">

<?php require __DIR__ . '/_header.php' ?>
<link rel="stylesheet" href="../../css/account_style.css">

<div class="account-container">
    <h1><?php if(isset($email)) echo $email ?></h1>

</div>

<?php require __DIR__ . '/_footer.php' ?>
</body>