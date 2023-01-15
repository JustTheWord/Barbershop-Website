<?php
require_once 'application/core/errorHandler.php';
class Controller_Authentication extends Controller
{
    function action_index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]) && isset($_POST["password"]))
        {
            $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
            $password = htmlspecialchars($_POST["password"], ENT_QUOTES, 'UTF-8');

            $signInError = new ErrorHandler();
            $feedback = $signInError->controlForm(array('email' => $email, 'password'=>$password));


            if ($feedback) // if any error in the sign-in form
            {
                $this->view->generate('', 'sign_in_view.php', $feedback);
            }
            // server side validation is successful
            else
            {
                include_once 'application/models/model_users.php';
                $model = new Model_Users;

                $clients = $model->getAllClients();
                var_dump($clients);

//                $clientsData = $model->getClientsData($email);
//
//                if ($clientsData && $clientsData['password'] === $password)
//                {
//                    $this->view->generate('', 'account_view.php',
//                        array('email' => $email));
//                }
//                else
//                {
//                    echo "DATABASE HAS SEND A SHIT";
//                }
            }
        }
    }
}