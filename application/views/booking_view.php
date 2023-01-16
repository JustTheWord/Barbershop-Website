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

<body class="book-body">

<?php require __DIR__ . '/_header.php' ?>
<link rel="stylesheet" href="css/booking_style.css">

<div class="booking-container">

    <form action="appointment" method="post">

        <?php
        if (isset($nameError) && !empty($nameError)) {
            ?>
            <h1 id="form-name-error"><?= $nameError ?></h1>
            <?php
        }
        ?>
        <label for="name">Name:</label>
        <input type="text" id="name-booking" name="name"
               value="<?php  if(isset($_SESSION['name']) && !empty($_SESSION['name']))
                   echo $_SESSION['name'];
               elseif (isset($nameValue))
                   echo "$nameValue";?>" required>

        <?php
        if (isset($emailError) && !empty($emailError)) {
            ?>
            <h1 id="form-email-error"><?= $emailError ?></h1>
            <?php
        }
        ?>

        <label for="email-booking">Email:</label>
        <input type="email" id="email-booking" name="email"
               value="<?php
               if(isset($_SESSION['email']) && !empty($_SESSION['email']))
                   echo $_SESSION['email'];
               elseif (isset($emailValue))
                   echo "$emailValue";?>" required>

        <?php
        if (isset($phoneError) && !empty($phoneError)) {
            ?>
            <h1 id="form-phone-error"><?= $phoneError ?></h1>
            <?php
        }
        ?>
        <label for="phone-booking">Phone:</label>
        <input type="tel" id="phone-booking" name="phone"
               value="<?php
               if(isset($_SESSION['phone']) && !empty($_SESSION['phone']))
                   echo $_SESSION['phone'];
               elseif (isset($phoneValue))
                   echo "$phoneValue";?>"  required>

        <label for="service">Service:</label>
        <select id="service" name="service" required>
            <option value="Haircut">Haircut</option>
            <option value="Haircut & Shave">Haircut & Shave</option>
            <option value="Haircut & Beard">Haircut & Beard</option>
            <option value="Haircut Long Hair">Haircut Long Hair</option>
            <option value="Long Hair & Beard">Long Hair & Beard</option>
            <option value="Father & Son">Father & Son</option>
        </select>

        <label for="barber">Barber:</label>
        <select id="barber" name="barber" required>
            <option value="Farian">Farian</option>
            <option value="Kirill">Kirill</option>
            <option value="Ivan">Ivan</option>
        </select>

        <label for="service-price">Price:</label>
        <div id="service-price">
            <noscript>See the services page.</noscript>
        </div>

        <?php
        if (isset($dateError) && !empty($dateError)) {
            ?>
            <h1 id="form-data-error"><?= $dateError ?></h1>
            <?php
        }
        ?>
        <label for="date-book">Date:</label>
        <input type="date" id="date-book" name="date" min="<?php echo date('Y-m-d'); ?>"
               value="<?php  if( isset($dateValue)) echo "$dateValue";?>" required>

        <?php
        if (isset($timeError) && !empty($timeError)) {
            ?>
            <h1 id="form-time-error"><?= $timeError ?></h1>
            <?php
        }
        ?>
        <label for="time-book">Time:</label>
        <input type="time" id="time-book" name="time"
               value="<?php  if( isset($timeValue)) echo "$timeValue";?>" required>

        <input type="submit" value="Book">
    </form>
</div>

<script src="js/bookNowService.js"></script>
<?php require __DIR__ . '/_footer.php' ?>
</body>

</html>
