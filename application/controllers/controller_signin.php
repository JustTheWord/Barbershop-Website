<?php
declare(strict_types=1);
class Controller_SignIn extends Controller
{

    function action_index()
    {
        include(__DIR__ . "/../views/sign_in_view.php");
    }
}