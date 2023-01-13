<?php

class Controller_Authentication extends Controller
{
    function action_index()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $email = $_POST["email"];
            $password = $_POST["password"];

            if(empty($email) || empty($password)) {

                echo "Email and password are required fields.";

            } else {

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "Invalid email format.";
                } else {

                    include_once '../models/model_users.php';
                    $data = new Model_Users;

                    foreach ($data as $user) {

                       if ($user['email'] === $email &&
                           $user['password'] === $password) {


                       }
                    }

                }
            }
        }
    }
}