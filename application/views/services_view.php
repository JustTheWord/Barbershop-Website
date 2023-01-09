<?php
declare(strict_types=1);
?>


<body class="services-body">

<?php require __DIR__ . '/_header.php' ?>
<style> @import "../../css/services_style.css"; </style>

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
                <h3>Barber: 350-600</h3>

                <a href="http://localhost:8000/booking">
                    <button class="book-now">BOOK NOW</button>
                </a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container" id="haircut-shave">
                <h2 class="name">Haircut &</h2>
                <h2 class="name">Shave</h2>
                <br>
                <h3>Barber: 350-600</h3>

                <a href="http://localhost:8000/booking">
                    <button class="book-now">BOOK NOW</button>
                </a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container" id="haircut-beard">
                <h2 class="name">Haircut & Beard</h2>
                <br>
                <br>
                <h3>Barber: 500-900</h3>
                <a href="http://localhost:8000/booking">
                    <button class="book-now">BOOK NOW</button>
                </a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container" id="long-hair">
                <h2 class="name">Haircut</h2>
                <h2 class="name">Long Hair</h2>
                <br>
                <h3>Barber: 400-650</h3>

                <a href="http://localhost:8000/booking">
                    <button class="book-now">BOOK NOW</button>
                </a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container" id="long-hair-beard">
                <h2 class="name">Long Hair &</h2>
                <h2 class="name">Beard</h2>
                <br>
                <h3>Barber: 550-950</h3>

                <a href="http://localhost:8000/booking">
                    <button class="book-now">BOOK NOW</button>
                </a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container" id="father-son">
                <h2 class="name">Father & Son</h2>
                <br>
                <h3>Barber: 650-1000</h3>

                <a href="http://localhost:8000/booking">
                    <button class="book-now">BOOK NOW</button>
                </a>
            </div>

        </div>


<script src="/js/services.js"></script>

<?php require __DIR__ . '/_footer.php' ?>

</body>