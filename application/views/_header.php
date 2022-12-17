<?php
declare(strict_types=1);
?>

<!--Wrapper for demonstration-->
<div class="wrapper">
<!--    Content-->
    <header class="header">
        <div class="container">
            <div class="header-body">

                <a href="#" class="header-logo">
                    <img src="/images/logo.png" alt="logo">
                </a>

                <div class="header-container">
                    <input id="app-navigation-toggle" type="checkbox" name="menu-checked" value="0">
                    <label id="app-navigation-toggle-label" for="app-navigation-toggle">Menu</label>

                    <nav class="header-menu">
                        <ul class="header-list" >

                            <li ><a class="home" href = "http://localhost:8000" >
                                    <span > Home</span >
                                </a></li >

                            <li ><a class="services" href = "http://localhost:8000/services" >
                                    <span > Services</span >
                                </a ></li >

                            <li ><a class="team" href = "http://localhost:8000/team" >
                                    <span > Team</span >
                                </a ></li >

                            <li ><a class="contacts" href = "http://localhost:8000/contacts" >
                                    <span > Contacts</span >
                                </a ></li >

                            <li ><a class="sign-in" href = "http://localhost:8000/signin" >
                                    <span > Sign - in</span >
                                </a ></li >

                            <li >
                                <a href = "http://localhost:8000/404" >
                                    <img id = "cz_flag" src = "/images/cz.svg" alt = "flag" >
                                </a >
                            </li >

                        </ul >
                    </nav >
                </div>
            </div>
        </div>
    </header>
</div>
