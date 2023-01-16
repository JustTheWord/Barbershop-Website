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

<body class="services-body">

<?php require __DIR__ . '/_header.php' ?>
<link rel="stylesheet" href="css/services_style.css">

<div class="services-container">

    <div class="navigation-bar-container">
        <div class="bar-title">
            <span>Services</span>
        </div>
        <div class="navigation-bar">

            <a class="link-to-scroll"  data-goto="#haircut" href="#haircut">Haircut model</a>
            <a class="link-to-scroll"  data-goto="#haircut-shave" href="#haircut-shave">Haircut & Shave</a>
            <a class="link-to-scroll"  data-goto="#haircut-beard" href="#haircut-beard">Haircut & Beard</a>
            <a class="link-to-scroll"  data-goto="#long-hair" href="#long-hair">Haircut Long Hair</a>
            <a class="link-to-scroll"  data-goto="#long-hair-beard" href="#long-hair-beard">Haircut Long Hair & Beard</a>
            <a class="link-to-scroll" data-goto="#father-son" href="#father-son">Father & Son</a>
        </div>

    </div>

    <div class="tickets-container">

        <div class="ticket">

            <div class="info-container" id="haircut">
                <h2 class="name">Haircut</h2>
                <h5 class="annotation">Fade, Crop atd</h5>
                <br>
                <h3>Barber: 550-600</h3>

                <a href="https://wa.toad.cz/~grebegor/booking" class="book-now" id="haircut&fade">BOOK NOW</a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container" id="haircut-shave">
                <h2 class="name">Haircut &</h2>
                <h2 class="name">Shave</h2>
                <br>
                <h3>Barber: 800-900</h3>

                <a href="https://wa.toad.cz/~grebegor/booking" class="book-now" id="haircut&shave">BOOK NOW</a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container" id="haircut-beard">
                <h2 class="name">Haircut & Beard</h2>
                <br>
                <br>
                <h3>Barber: 800-900</h3>

                <a href="https://wa.toad.cz/~grebegor/booking" class="book-now" id="haircut&beard">BOOK NOW</a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container" id="long-hair">
                <h2 class="name">Haircut</h2>
                <h2 class="name">Long Hair</h2>
                <br>
                <h3>Barber: 600-650</h3>

                <a href="https://wa.toad.cz/~grebegor/booking" class="book-now" id="haircut&long">BOOK NOW</a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container" id="long-hair-beard">
                <h2 class="name">Long Hair &</h2>
                <h2 class="name">Beard</h2>
                <br>
                <h3>Barber: 900-950</h3>

                <a href="https://wa.toad.cz/~grebegor/booking" class="book-now" id="long&beard">BOOK NOW</a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container" id="father-son">
                <h2 class="name">Father & Son</h2>
                <br>
                <h3>Barber: 900-1000</h3>

                <a href="https://wa.toad.cz/~grebegor/booking" class="book-now" id="father&son">BOOK NOW</a>
            </div>

	</div>

     </div>
</div>

<script src="js/services.js"></script>

<?php require __DIR__ . '/_footer.php' ?>

</body
>
</html>
