<?php
 declare(strict_types=1);
 ?>


<body class="main-body">

<?php require __DIR__ . '/_header.php' ?>
<style> @import "../../css/home_style.css"; </style>

<div class="home-container">

    <div class="intro-container">
        <div class="mobile-intro">
            <span id="greeting">Welcome to</span>
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

    <div class="about-container">
        <div class="about">
<!--            Jediný tradiční perské holičství v Praze.-->
            <h3>The only traditional Persian barber shop in Prague.</h3>
<!--            Nabízíme kvalitní služby za příjemné ceny.-->
            <h3>We offer quality services at reasonable prices.</h3>

            <div class="pattern-services-container">
                <div class="pattern-services">
                    <img  class="coffee-1" src="/images/Patterns/coffee_1.png">
                    <label for="coffee-1">Free coffee</label>
                </div>

                <div class="pattern-services">
                    <img id="playstation" src="/images/Patterns/controller_1.png">
                    <label for="playstation">Free Playstation gaming</label>
                </div>

                <div class="pattern-services">
                    <img id="gift-box" src="/images/Patterns/gift-box_1.png">
                    <label for="gift-box">100 Kč discount for your first haircut</label>
                </div>

                <div class="pattern-services">
                    <img id="beer" src="/images/Patterns/beer_1.png">
                    <label for="beer">Free beer</label>
                </div>
            </div>
        </div>

        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/hg0yW9QkZ8g" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </div>


    </div>




</div>



</body>