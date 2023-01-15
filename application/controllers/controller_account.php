<?php
require_once 'controller_authentication.php';

class Controller_Account extends Controller_Authentication
{
    function action_index()
    {
        if (!empty($_SESSION["email"]))
        {
            $_SESSION['visitHistory'] = array_reverse($this->model->getClientsVisitHistory($_SESSION["email"]));
            include(__DIR__ . "/../views/account_view.php");
        }

        else if (!empty($_GET['p']))
        {

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