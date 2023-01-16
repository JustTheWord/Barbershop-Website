<?php
declare(strict_types=1);

class Controller_Booking extends Controller
{
    function action_index()
    {
        include(__DIR__ . "/../views/booking_view.php");
    }
}
