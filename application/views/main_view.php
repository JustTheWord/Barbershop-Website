<?php
 declare(strict_types=1);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Barbershop</title>
    <!--    <link rel="stylesheet" href="/css/body_header_footer_style.css">-->
</head>


<body class="main-body">

<?php require __DIR__ . '/_header.php' ?>
<link rel="stylesheet" href="../../css/home_style.css">

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
            <img id="haircut-image" src="/images/haircut.png" alt="reservation-back">

            <a class="reservation-btn" href="http://localhost:8000/booking">
                <span>Book Now</span>
            </a>
        </div>

    </div>

    <div class="about-container">
        <div class="about">
            <h3>The only traditional Persian barber shop in Prague.</h3>
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
            <iframe  src="https://www.youtube.com/embed/hg0yW9QkZ8g"
                    allowfullscreen>
            </iframe>
        </div>


    </div>

    <div class="founder-container">

        <div class="founder-image-container">
            <img src="/images/farkhad_black.png">
        </div>

        <div class="founder-intro">

            <p>HI FRIENDS,</p>
            <p> I AM FARHAD – THE FOUNDER OF FARIAN BARBERSHOP.</p>
            <p>A 6TH GENERATION BARBER WHERE THE SKILL OF PERSIAN BARBERING WAS PASSED FROM FATHER TO SON...</p>
            <p>CERTIFIED ARCHITECT, MARKETER,
                FINISHED COOKING COURSER AND,
                OF COURSE, BARBER COURSES. DUE TO MY GREAT PASSION
                FOR THE ART OF HAIRCUT, WITHOUT HESITATION STARTED THE FAMILY'S BUSINESS...
            </p>
            <p>BARBER IS MY PROFESSION, MY LIFE'S WORK. I'M AN IDEALIST, WHICH I SUFFER
                SOMETIMES, BUT I'M PROUD OF INVESTING ALL 100% TO MY WORK.
            </p>
            <p>
                I CREATE A STYLE, A STRONG IMAGE, HIGHLIGHTING THE SIDES OF A BETTER APPEARANCE.
            </P>
            <p>
                FARIAN BARBERSHOP IS MY SPIRITUAL CHILD, IT IS AN EXTENSION OF MY FAMILY.
                I AM HAPPY AND READY TO SHARE MY ART WITH PEOPLE.
            </p>
            <p>MOTTO: "PERFECTION HAS NO BOUNDARIES"</p>

    </div>

</div>

<?php require __DIR__ . '/_footer.php' ?>
</body>

</html>