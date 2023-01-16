<?php
declare(strict_types=1);

class Controller_Main extends Controller
{

    function action_index()
    {
        include(__DIR__ . "/../views/main_view.php");
    }
}