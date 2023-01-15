<?php
declare(strict_types=1);
?>

<body class="book-body">

<?php require __DIR__ . '/_header.php' ?>
<link rel="stylesheet" href="../../css/booking_style.css">

<div class="booking-container">

    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"
               value="<?php  if(isset($_SESSION['name']) && !empty($_SESSION['name']))
                   echo $_SESSION['name'];?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"
               value="<?php  if(isset($_SESSION['email']) && !empty($_SESSION['email']))
                   echo $_SESSION['email'];?>" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone"
               value="<?php  if(isset($_SESSION['phone']) && !empty($_SESSION['phone']))
                   echo $_SESSION['phone'];?>"  required>

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
            <option value="Haircut">Farian</option>
            <option value="Haircut & Shave">Kirill</option>
            <option value="Haircut & Beard">Ivan</option>
        </select>

        <label for="service-price">Price:</label>
        <p id="service-price">
            <noscript>Call the barbershop, please.</noscript>
        </p>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>

        <input type="submit" value="Book">
    </form>
</div>

<script src="/js/bookNowService.js"></script>
<?php require __DIR__ . '/_footer.php' ?>
</body>

