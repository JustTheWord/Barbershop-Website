<?php
declare(strict_types=1);

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
            // Get the price according to the selected barber and the selected service
            $price = $this->modelPrices->get_data(array(
                    'barberName'=>$barber, 'serviceName' => $service)
            );

            $feedback = $this->authError->controlForm(array('name'=> $name, 'email'=>$email,
                    'phone'=>$phone, 'date'=>$date, 'time'=>$time,
                    'serviceBarber'=>$price)
            );

            if ($feedback) // if any error in the form
            {
                $this->view->generate('', 'booking_view.php', $feedback);
            }
            // server side validation is successful
            else
            {
                $appointDate = $date . " " . $time . ":00";
                $this->model->addNewAppointment(array(
                    $appointDate, $email, $name, $barber, $service, $price
                ));

                $host = 'https://'.$_SERVER['HTTP_HOST'].'/~grebegor/';

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
