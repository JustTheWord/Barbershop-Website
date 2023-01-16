<?php
declare(strict_types=1);

require_once 'controller_authentication.php';

class Controller_Account extends Controller_Authentication
{
    function action_index()
    {
        if (!empty($_SESSION["email"]))
        {
            $clientsData = $this->model->getClientsVisitHistory($_SESSION["email"]);
            if (is_array($clientsData))
            {
                $_SESSION['visitHistory'] = array_reverse($clientsData);
                include(__DIR__ . "/../views/account_view.php");
            }
            else
            {
                echo "The problem with database connection.";
                die();
            }
        }

        else
        {
            $host = 'https://'.$_SERVER['HTTP_HOST'].'/~grebegor/';
            header('HTTP/1.1 404 Not Found');
            header("Status: 404 Not Found");
            header('Location:'.$host.'404');
        }
    }
}
