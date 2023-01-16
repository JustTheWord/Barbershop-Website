<?php
declare(strict_types=1);

class Controller_Team extends Controller
{

    function action_index()
    {
        include(__DIR__ . "/../views/team_view.php");
    }
}