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
            <a class="link-to-scroll"  data-goto="#haircut" href="#">Haircut model</a>
            <a class="link-to-scroll"  data-goto="#haircut-shave" href="#">Haircut & Shave</a>
            <a class="link-to-scroll"  data-goto="#haircut-beard" href="#">Haircut & Beard</a>
            <a class="link-to-scroll"  data-goto="" href="#">Shave & Beard</a>
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
                <h3 class="name">Haircut & beard</h3>
                <br>
                <h4>Barber: 500-900</h4>

                <a href="http://localhost:8000/booking">
                    <button class="book-now">Book Now</button>
                </a>
            </div>

        </div>

        <!--        <div class="ticket" id="haircut-shave">-->
<!---->
<!--            <div class="info-container">-->
<!--                <div>info-->
<!--                    <h2 class="name">Haircut & Shave</h2>-->
<!--                </div>-->
<!---->
<!--                <div class="price">-->
<!--                    <h5>Barber:</h5>-->
<!--                    <h6>550-900</h6>-->
<!--                </div>-->
<!---->
<!--                <a href="http://localhost:8000/booking">-->
<!--                    <button class="book-now">Book Now</button>-->
<!--                </a>-->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--</div>-->


<script>
    let loaded = false;
</script>
<script src="/js/services.js"></script>

</body>
