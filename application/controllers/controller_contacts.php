<?php
declare(strict_types=1);

class Controller_Contacts extends Controller
{
    function action_index()
    {
        include(__DIR__ . "/../views/contacts_view.php");
    }
}