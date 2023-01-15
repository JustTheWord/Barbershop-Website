<?php
require_once 'controller_authentication.php';
class Controller_Login extends Controller_Authentication
{
    function action_index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]) && isset($_POST["password"]))
        {
            $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
            $password = htmlspecialchars($_POST["password"], ENT_QUOTES, 'UTF-8');

            $feedback = $this->authError->controlForm(array('email' => $email, 'password'=>$password));

            if ($feedback) // if any error in the sign-in form
            {
                $this->view->generate('', 'sign_in_view.php', $feedback);
            }
            // server side validation is successful
            else
            {

                $clientsData = $this->model->getClientsData($email);

                if ($clientsData)
                {

                    $saltedPassword = $this->saltStart . $password . $this->saltEnd;

                    if (password_verify($saltedPassword, $clientsData['password']))
                    {

//                        session_start();
                        session_regenerate_id(true);
                        setcookie(session_name(), session_id(), time() + (60*2));
                        $_SESSION['userId'] = session_id();
                        $_SESSION['email'] = $email;

                        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
                        header('Location:'.$host.'account');
                    }
                    else
                    {
                        $this->view->generate('', 'sign_in_view.php',
                            array('emailValue' => $email,
                                'passError' => 'The password is wrong.'));
                    }
                }
                else
                {
                    $this->view->generate('', 'sign_in_view.php',
                        array('emailValue' => $email,
                            'emailError' => 'This email is not registered. Sign up, please.'));
                }
            }
        }
    }
}