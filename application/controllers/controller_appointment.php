<?php

require_once 'controller_authentication.php';

class Controller_Appointment extends Controller_Authentication
{
    function action_index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" &&
            isset($_POST["name"]) &&
            isset($_POST["email"]) &&
            isset($_POST["phone"]) &&
            isset($_POST["service"]) &&
            isset($_POST["barber"]) &&
            isset($_POST["date"]) &&
            isset($_POST["time"]))
        {
            $name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
            $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
            $phone = htmlspecialchars($_POST["phone"], ENT_QUOTES, 'UTF-8');
            $date = $_POST["date"];
            $time = $_POST["time"];
            $service = $_POST["service"];
            $barber = $_POST["barber"];

            $feedback = $this->authError->controlForm(array(
                'name'=> $name, 'email'=>$email, 'phone '=>$phone, 'date'=>$date, 'time'=>$time)
            );

            if ($feedback) // if any error in the sign-in form
            {
                $this->view->generate('', 'booking_view.php', $feedback);
            }
            // server side validation is successful
            else
            {
                $appointDate = $date . " " . $time . ":00";
                $price = $this->modelPrices->get_data(array('barberName'=>$barber, 'serviceName' => $service));

                $this->model->addNewAppointment(array(
                    $appointDate, $email, $name, $barber, $service, $price
                ));

                $host = 'http://'.$_SERVER['HTTP_HOST'].'/';

                if (!empty($_SESSION['userId']))
                {
                    header('Location:'.$host.'account');
                }
                else
                {
                    header('Location:'.$host.'booked');
                }
            }
        }
    }
}