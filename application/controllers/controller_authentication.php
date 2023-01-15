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


    public function successfulSignIn(?array $clientsData) {

        if ($clientsData)
        {
            session_regenerate_id(true);
            setcookie(session_name(), session_id(), time() + (60 * 60 * 24));

            $_SESSION['userId'] = session_id();
            $_SESSION['email'] = $clientsData['email'];
            $_SESSION['name'] = $clientsData['name'];
            $_SESSION['phone'] = $clientsData['phone_num'];

            $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
            header('Location:'.$host.'account');
        }
    }
}