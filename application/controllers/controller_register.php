<?php
require_once 'controller_authentication.php';
class Controller_Register extends Controller_Authentication
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
            $passwordsTheSame = $password === $passConfirm;

            $feedback = $this->authError->controlForm(
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
                $clientsData = $this->model->getClientsData($email);

                if ($clientsData)
                {
                    $this->view->generate('', 'sign_up_view.php',
                        array('emailValue' => $email, 'nameValue' => $name,
                            'phoneValue' => $phone, 'dateValue' => $birthday,
                            'emailError' => 'This email is already registered. Sign in, please.'));
                }
                else // this email is not registered
                {
                    $saltedPassword = $this->saltStart . $password . $this->saltEnd;
                    $hashedPassword = password_hash($saltedPassword, PASSWORD_BCRYPT);
                    $phone = implode(preg_split('/[- ]/', $phone));

                    $dbResponse = $this->model->addNewClient(array(
                        $email, $name, $phone, $birthday, $hashedPassword)
                    );

                    if (!$dbResponse)
                    {
                        $this->view->generate('', 'sign_up_view.php',
                            array('emailValue' => $email, 'nameValue' => $name,
                                'phoneValue' => $phone, 'dateValue' => $birthday,
                                'emailError' => 'Sorry, we cannot sign up you. Try a bit later, please.'));
                    }
                    else
                    {
                        echo "SUCCESSFUL";
                        session_start();

                    }
                }
            }
        }
    }
}