<?php
declare(strict_types=1);

class Controller_Services extends Controller
{
    function action_index()
    {
        include(__DIR__ . "/../views/services_view.php");
    }
}