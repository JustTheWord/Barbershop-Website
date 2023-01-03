<?php
 declare(strict_types=1);
 ?>


<body class="main-body">

<?php require __DIR__ . '/_header.php' ?>
<style> @import "../../css/home_style.css"; </style>

<div class="home-container">

    <div class="intro-container">
        <div class="mobile-intro">
            <span id="greeting">Vítejte v našem barbershopu</span>
            <span id="barbershop-name">
                <script src="../../js/typeWriter.js"></script>
                <noscript>Barbershop Farian</noscript>
            </span>
        </div>


        <div class="left-side">

            <div id="home-info">
                <span> Persian barbershop</span>
                <span>in the finest tradition</span>
            </div>
            <span id="moto">Mastery from father to son</span>

        </div>

        <div class="right-side">
            <img id="haircut-curved-750-250-2" src="/images/haircut_curved_750_250.png" alt="reservation-back">

            <a class="reservation-btn" href="http://localhost:8000/booking">
                <span>Book Now</span>
            </a>
        </div>

    </div>

<!--    <div class="founder-container">-->
<!--        <div class="founder-info">-->
<!---->
<!--            <img id="haircut-curved-750-250-2" src="/images/fire_farhad.jpg" width="640" height="640" alt="farhad-founder">-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->

</div>



</body>