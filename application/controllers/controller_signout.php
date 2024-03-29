<?php
declare(strict_types=1);

class Controller_SignOut extends Controller
{
    function action_index()
    {
        if (!empty($_SESSION["userId"]))
        {
            // Delete the session cookie
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }
            // Destroy the session
            session_destroy();
            // Redirect the user to the login page
            header("Location: https://".$_SERVER['HTTP_HOST']."/~grebegor/signin");
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
