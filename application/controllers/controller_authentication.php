<?php
declare(strict_types=1);

require_once 'application/core/errorHandler.php';
require_once 'application/models/model_db.php';
require_once 'application/models/model_price.php';
class Controller_Authentication extends Controller
{
    public string $saltStart = 'qm&h*';
    public string $saltEnd = 'pg!@';
    public ?ErrorHandler $authError = null;
    public $model;
    public Model_Price $modelPrices;

    function __construct()
    {
        parent::__construct();
        $this->authError = new ErrorHandler();
        $this->model = new Model_DB();
        $this->modelPrices = new Model_Price();
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
			    
	    $host = 'https://'.$_SERVER['HTTP_HOST'].'/~grebegor/';
            header('Location:'.$host.'account');
        }
    }
}
