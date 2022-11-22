<?php

class Controller_Contacts extends Controller
{

    function action_index()
    {
        include(__DIR__ . "/../views/contacts_view.php");
    }
}