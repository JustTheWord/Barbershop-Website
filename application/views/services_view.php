<?php
declare(strict_types=1);
?>


<body class="services-body">

<?php require __DIR__ . '/_header.php' ?>
<style> @import "../../css/services_style.css"; </style>

<div class="services-container">

    <div class="navigation-bar-container">
        <div class="navigation-bar">
            <span id="bar-tittle">Services</span>
            <a class="link-to-scroll"  data-goto="#haircut" href="#haircut">Haircut model</a>
            <a class="link-to-scroll"  data-goto="#haircut-shave" href="#haircut-shave">Haircut & Shave</a>
            <a class="link-to-scroll"  data-goto="#haircut-beard" href="#haircut-beard">Haircut & Beard</a>
            <a class="link-to-scroll"  data-goto="#long-hair" href="#long-hair">Haircut Long Hair</a>
            <a class="link-to-scroll"  data-goto="#long-hair-beard" href="#long-hair-beard">Haircut Long Hair & Beard</a>
            <a class="link-to-scroll" data-goto="" href="#">Father & Son</a>
        </div>

    </div>

    <div class="tickets-container">

        <div class="ticket">

            <div class="info-container" id="haircut">
                <h3 class="name">Haircut</h3>
                <h4 class="annotation">Fade, Crop atd</h4>
                <h4>Barber: 350-600</h4>

                <a href="http://localhost:8000/booking">
                    <button class="book-now">Book Now</button>
                </a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container" id="haircut-shave">
                <h3 class="name">Haircut & Shave</h3>
                <br>
                <h4>Barber: 350-600</h4>

                <a href="http://localhost:8000/booking">
                    <button class="book-now">Book Now</button>
                </a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container" id="haircut-beard">
                <h3 class="name">Haircut & Beard</h3>
                <br>
                <h4>Barber: 500-900</h4>

                <a href="http://localhost:8000/booking">
                    <button class="book-now">Book Now</button>
                </a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container" id="long-hair">
                <h3 class="name">Haircut Long Hair</h3>
                <br>
                <h4>Barber: 400-650</h4>

                <a href="http://localhost:8000/booking">
                    <button class="book-now">Book Now</button>
                </a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container" id="long-hair-beard">
                <h3 class="name">Haircut Long Hair &</h3>
                <h3 class="name">Beard</h3>
                <h4>Barber: 550-950</h4>

                <a href="http://localhost:8000/booking">
                    <button class="book-now">Book Now</button>
                </a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container">
                <h3 class="name">Haircut & beard</h3>
                <br>
                <h4>Barber: 500-900</h4>

                <a href="http://localhost:8000/booking">
                    <button class="book-now">Book Now</button>
                </a>
            </div>

        </div>


        <div class="ticket">

            <div class="info-container">
                <h3 class="name">Haircut & beard</h3>
                <br>
                <h4>Barber: 500-900</h4>

                <a href="http://localhost:8000/booking">
                    <button class="book-now">Book Now</button>
                </a>
            </div>

        </div>


<script src="/js/services.js"></script>

</body>
