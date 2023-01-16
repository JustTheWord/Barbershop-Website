<?php
declare(strict_types=1);

class Controller_Booked extends Controller
{
    function action_index()
    {
        include(__DIR__ . "/../views/booked_view.php");
    }
}
