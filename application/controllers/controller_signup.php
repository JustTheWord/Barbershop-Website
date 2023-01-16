<?php
declare(strict_types=1);

class Controller_SignUp extends Controller
{

    function action_index()
    {
        include(__DIR__ . "/../views/sign_up_view.php");
    }
}