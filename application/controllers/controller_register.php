<?php
require_once 'application/core/errorHandler.php';
class Controller_Register extends Controller
{
    function action_index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" &&
            isset($_POST["email"]) &&
            isset($_POST["phone"]) &&
            isset($_POST["birthday"]) &&
            isset($_POST["password"]) &&
            isset($_POST["password_confirm"]))
        {
            $name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
            $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
            $phone = htmlspecialchars($_POST["phone"], ENT_QUOTES, 'UTF-8');
            $birthday = htmlspecialchars($_POST["birthday"], ENT_QUOTES, 'UTF-8');
            $password = htmlspecialchars($_POST["password"], ENT_QUOTES, 'UTF-8');
            $passConfirm = htmlspecialchars($_POST["password_confirm"], ENT_QUOTES, 'UTF-8');

            $signInError = new ErrorHandler();

            $passwordsTheSame = $password === $passConfirm;

            $feedback = $signInError->controlForm(
                array('name' => $name, 'email' => $email, 'phone'=>$phone,
                'birthday' => $birthday, 'password' => $password, 'passwordsConfirm' => $passwordsTheSame)
            );

            if ($feedback) // if any error in the sign-in form
            {
                $this->view->generate('', 'sign_up_view.php', $feedback);
            }
            // server side validation is successful
            else
            {
                include_once 'application/models/model_users.php';
                $model = new Model_Users;

                $clientsData = $model->getClientsData($email);

                if ($clientsData && $clientsData['password'] === $password)
                {
                    $this->view->generate('', 'account_view.php',
                        array('email' => $email));
                }
                else
                {
                    echo "DATABASE HAS SEND A SHIT";
                }
            }
        }
    }
}