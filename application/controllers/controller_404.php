<?php
declare(strict_types=1);

class Controller_404 extends Controller
{

    function action_index()
    {
        include(__DIR__ . "/../views/404_view.php");
    }

}