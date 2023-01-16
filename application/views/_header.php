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
                    <img src="images/logo.png" alt="logo">
                </a>

                <div class="header-container">
                    <input id="app-navigation-toggle" type="checkbox" name="menu-checked" value="0">
                    <label id="app-navigation-toggle-label" for="app-navigation-toggle">Menu</label>

                    <nav class="header-menu">
                        <ul class="header-list" >

                            <li ><a class="home" href = "https://wa.toad.cz/~grebegor/" >
                                    <span > Home</span >
                                </a>
                            </li >

                            <li ><a class="services" href = "https://wa.toad.cz/~grebegor/services" >
                                    <span > Services</span >
                                </a >
                            </li >

                            <li ><a class="team" href = "https://wa.toad.cz/~grebegor/team" >
                                    <span > Team</span >
                                </a >
                            </li >

                            <li ><a class="contacts" href = "https://wa.toad.cz/~grebegor/contacts" >
                                    <span > Contacts</span >
                                </a >
                            </li >

                            <li >
                                    <?php
                                    if (isset($_SESSION['userId']) && !empty($_SESSION['userId'])) {
                                        ?>
                                        <a class="sign-in" href = "https://wa.toad.cz/~grebegor/account">
                                        <span>Account</span>
                                        </a >
                                        <?php
                                    }
                                    else {
                                        ?>
                                        <a class="sign-in" href = "https://wa.toad.cz/~grebegor/signin">
                                        <span >Sign In</span >
                                        </a >
                                        <?php
                                    }?>

                            </li >

                            <?php
                            if (isset($_SESSION['userId']) && !empty($_SESSION['userId'])) {
                                ?>
                                <li>
                                    <a class="sign-out" href = "https://wa.toad.cz/~grebegor/signout" >
                                        <span>Sign out</span >
                                    </a>
                                </li >
                                <?php
                            }
                            ?>

                        </ul >
                    </nav >
                </div>
            </div>
        </div>
    </header>
</div>
