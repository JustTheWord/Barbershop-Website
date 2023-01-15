<?php

class Controller_SignOut extends Controller
{
    function action_index()
    {
        if (!empty($_SESSION["userId"]))
        {
            include(__DIR__ . "/../views/account_view.php");
        }
        else
        {
            $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
            header('HTTP/1.1 404 Not Found');
            header("Status: 404 Not Found");
            header('Location:'.$host.'404');
        }
    }
}
