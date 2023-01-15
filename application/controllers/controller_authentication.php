<?php
require_once 'application/core/errorHandler.php';
require_once 'application/models/model_users.php';;
class Controller_Authentication extends Controller
{
    public string $saltStart = 'qm&h*';
    public string $saltEnd = 'pg!@';
    public ?ErrorHandler $authError = null;

    function __construct()
    {
        parent::__construct();
        $this->authError = new ErrorHandler();
        $this->model = new Model_Users;
    }
}