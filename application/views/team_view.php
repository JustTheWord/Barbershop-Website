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


<body class="team-body">

<?php require __DIR__ . '/_header.php' ?>

<link rel="stylesheet" href="../../css/team_style.css">

<div class="team-container">

    <div class="presenters">

        <div class="barber-presenter">

            <img class="barber-photo" src="/images/farhad_team.jpg" alt="farhad-image">

            <div class="language-container">
                <img class="language" src="/images/cz.svg" alt="cz-lang">
                <img class="language" src="/images/gb.svg" alt="cz-lang">
                <img class="language" src="/images/ru.svg" alt="cz-lang">
                <img class="language" src="/images/ir.svg" alt="cz-lang">
                <img class="language" src="/images/ae.svg" alt="cz-lang">
            </div>

        </div>

        <div class="barber-presenter">

            <img class="barber-photo" src="/images/ivan_team.jpg" alt="ivan-image">

            <div class="language-container">
                <img class="language" src="/images/cz.svg" alt="cz-lang">
                <img class="language" src="/images/ru.svg" alt="cz-lang">
                <img class="language" src="/images/ua.svg" alt="cz-lang">
            </div>

        </div>

        <div class="barber-presenter">

            <img class="barber-photo" src="/images/kirill_team.jpg" alt="kirill-image">

            <div class="language-container">
                <img class="language" src="/images/cz.svg" alt="cz-lang">
                <img class="language" src="/images/gb.svg" alt="cz-lang">
                <img class="language" src="/images/ru.svg" alt="cz-lang">
            </div>

        </div>
    </div>

    <div class="indent"></div>


    <div id="gallery">
        <h2>Works</h2>

        <div class="row">

            <div class="two-columns">
                <div class="column">
                    <a href="/images/Gallery/1.jpg"><img src="/images/Gallery/1.jpg" alt="work1"></a>
                    <a href="/images/Gallery/5.jpg"><img src="/images/Gallery/5.jpg" alt="work2"></a>
                    <a href="/images/Gallery/9.jpg"><img src="/images/Gallery/9.jpg" alt="work3"></a>
                </div>

                <div class="column">
                    <a href="/images/Gallery/2.jpg"><img src="/images/Gallery/2.jpg" alt="work4"></a>
                    <a href="/images/Gallery/6.jpg"><img src="/images/Gallery/6.jpg" alt="work5"></a>
                    <a href="/images/Gallery/10.jpg"><img src="/images/Gallery/10.jpg" alt="work6"></a>
                </div>
            </div>

            <div class="two-columns">
                <div class="column">
                    <a href="/images/Gallery/3.jpg"><img src="/images/Gallery/3.jpg" alt="work7"></a>
                    <a href="/images/Gallery/7.jpg"><img src="/images/Gallery/7.jpg" alt="work8"></a>
                    <a href="/images/Gallery/11.jpg"><img src="/images/Gallery/11.jpg" alt="work9"></a>
                </div>

                <div class="column">
                    <a href="/images/Gallery/4.jpg"><img src="/images/Gallery/4.jpg" alt="work10"></a>
                    <a href="/images/Gallery/8.jpg"><img src="/images/Gallery/8.jpg" alt="work11"></a>
                    <a href="/images/Gallery/12.jpg"><img src="/images/Gallery/12.jpg" alt="work12"></a>
                </div>
            </div>

        </div>
    </div>



</div>

</body>

<?php require __DIR__ . '/_footer.php' ?>
</html>
