<?php
declare(strict_types=1);
class ErrorHandler
{
    public array $formErrors;
    function __construct()
    {
        $this->formErrors = array(
            'emailError' => '',
            'emailValue' => '',
            'passError' => '',
            'nameError' => '',
            'nameValue' => '',
            'phoneError' => '',
            'phoneValue' => '',
            'dateError' => '',
            'dateValue' => '',
            'repeatPassError' => '',
            );
    }

    public function controlForm($allPostVariables)
    {
        $noErrors = true;

        foreach ($allPostVariables as $key => $val)
        {
            switch ($key)
            {
                case 'email':
                    $email = $val;
                    // returns to the sign-in page in the case of the error
                    $this->formErrors['emailValue'] = $email;

                    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        $noErrors = false;
                        $this->formErrors['emailError'] = "Invalid email format.";
                    }
                    else if (empty($email))
                    {
                        $noErrors = false;
                        $this->formErrors['emailError'] = "Email field mustn't be empty.";
                    }
                    else if (strlen($email) > 254)
                    {
                        $noErrors = false;
                        $this->formErrors['emailError'] = "Your email address is too long. Use another, please.";
                    }
                    break;

                case 'password':
                    $pass = $val;

                    if ($pass !== '0' && empty($pass))
                    {
                        $noErrors = false;
                        $this->formErrors['passError'] = "Password is required.";
                    }
                    break;

                case 'passwordsConfirm':
                    $passwordsTheSame = $val;

                    if ($passwordsTheSame === false)
                    {
                        $noErrors = false;
                        $this->formErrors['repeatPassError'] = "Passwords are different.";
                    }
                    break;

                case 'birthday':
                    $birthday = $val;
                    $this->formErrors['dateValue'] = $birthday;

                    if (preg_match("/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/", $birthday))
                    {
                        $date = explode('-', $birthday);

                        if (!checkdate((int)$date[1], (int)$date[2], (int)$date[0])) { // month, day, year
                            $noErrors = false;
                            $this->formErrors['dateError'] = "This date doesn't exist";
                        }
                    }
                    else
                    {
                        $noErrors = false;
                        $this->formErrors['dateError'] = "Invalid birthday date format.";
                    }
                    break;

                case 'phone':
                    $phone = $val;
                    $this->formErrors['phoneValue'] = $phone;

                    if (!preg_match("/^[0-9]{3}[-. ][0-9]{3}[-. ][0-9]{3}$/", $phone))
                    {
                        $noErrors = false;
                        $this->formErrors['phoneError'] = "Invalid phone number format.";
                    }
                    break;

                case 'name':
                    $name = $val;
                    // returns to the sign-in page in the case of the error
                    $this->formErrors['nameValue'] = $name;

                    if (empty($name))
                    {
                        $noErrors = false;
                        $this->formErrors['nameError'] = "Name and Surname are required";
                    }
                    else if (!preg_match("/^[a-zA-Z-' ]*$/", $name))
                    {
                        $noErrors = false;
                        $this->formErrors['nameError'] = "Name and Surname may contain only letters and white space";
                    }
                    break;
            }
        }

        if ($noErrors)
        {
            return null;
        }
        else
        {
            return $this->formErrors;
        }
    }
}