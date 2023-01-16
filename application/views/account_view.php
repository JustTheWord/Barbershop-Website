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
<link rel="stylesheet" href="../../css/account_style.css">

<div class="account-container">

    <div class="general-info-container">
        <div class="name-email">
            <div class="one-line">
                <span>Email: </span>
                <span class=moved-span><?php if (isset($_SESSION['email'])) echo $_SESSION['email']; ?></span>
            </div>
            <div class="one-line">
                <span>Name:</span>
                <span class="moved-span"><?php if (isset($_SESSION['name'])) echo $_SESSION['name']; ?></span>
            </div>
        </div>
    </div>

    <?php
    $page = isset($_SESSION['page']) ?  (int)$_SESSION['page'] : 0;
    $visitsPerPage = 4;
    $visits = $_SESSION['visitHistory'];

    $pageCount = ceil(count($visits) / $visitsPerPage);
    ?>

    <div class="content">
        <h1>Visit History</h1>
        <?php
        for ($i=$page * $visitsPerPage; $i < ($page + 1) * $visitsPerPage; $i++) {
            if ($i < count($visits)) {?>

        <div class="visit-list">
                <?php if (isset($visits[$i]))
                {
                    $arrDate = explode(' ', $visits[$i]['appoint_date']);
                    $date= $arrDate[0];
                    $time = $arrDate[1];

                    $barber = $visits[$i]['barber'];
                    $service = $visits[$i]['service'];
                    $price = $visits[$i]['price'];
                } ?>

            <div class="list-left">
                <span>Date: <?php if (isset($date)) echo $date; ?></span>
                <span>Time: <?php if (isset($time)) echo $time; ?></span>
            </div>

            <div class="list-right">
                <span>Barber: <?php if (isset($barber)) echo $barber; ?></span>
                <span>Service: <?php if (isset($service)) echo $service; ?></span>
                <span>Price: <?php if (isset($price)) echo $price; ?></span>
            </div>
        </div>
            <?php
            }
        }
        ?>

        <div class="page-list-container">
            <?php
            for ($p=0; $p < $pageCount; $p++) { ?>

            <a href="http://localhost:8000/account?page=<?php echo $p?>" class="page-button">
                <?php echo $p + 1; ?>
            </a>

            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php require __DIR__ . '/_footer.php' ?>
</body>

</html>