<?php
// define variables and set to empty values
$nameErr = $firstName = $state = $stateErr = $city = $cityErr = $firstErr = $emailErr = $genderErr = $websiteErr = " ";
$username = $phoneErr = $status = $zipcode = $zipErr = $password = $passwordErr = $cpassword = $cpasswordErr = $statusErr = $email = $gender = $address1 = $address1Err= $comment = $lastName = $lastErr = $website = $dateofbirth = " ";
$phone = '000-000-0000';
$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $isValid = true;




    $firstName = clean_input($_POST["firstName"]);
    if (empty($firstName)) {
        $firstErr = "Your First Name is required";
        $isValid = false;
    } else {
        $len = strlen($firstName);
        if ($len > 50) {
            $firstErr = "Your First Name is too Long, maximum is 50 characters (50 max).";
            $isValid = false;
        }
    }

    $lastName = clean_input($_POST["lastName"]);
    if (empty($lastName)) {
        $lastErr = "Your Last Name is required";
        $isValid = false;
    } else {
        $len = strlen($lastName);
        if ($len > 50) {
            $lastErr = "Your Last Name is too long, Maximum is 50 characters (50 max).";
            $isValid = false;
        }
    }
    $address1 = clean_input($_POST["address1"]);
        $len = strlen($address1);
        if ($len > 100) {
            $address1Err = "Address is too Long, Maximum is 100 characters (100 max).";
            $isValid = false;
        }

    $city = clean_input($_POST["city"]);
    if (empty($city)) {
        $cityErr = "Your city is required";
        $isValid = false;
    } else {
        $len = strlen($city);
        if ($len > 50) {
            $cityErr = "The City name is too Long, maximum is 50 characters (50 max).";
            $isValid = false;
        }
    }

    $state = clean_input($_POST["state"]);
    if (empty($state)) {
        $stateErr = "Your State is required";
        $isValid = false;
    } else {
        $len = strlen($state);
        if ($len > 52) {
            $stateErr = "State Name is too long, maximum is 52 characters (52 max).";
            $isValid = false;
        }
    }

    if (isset($_POST["status"])) {
        $status = clean_input($_POST["status"]);
        if (empty($_POST["status"])) {
            $statusErr = "marital status is required";
            $isValid = false;
        }
    } else {
        $statusErr = "marital status is required";
        $isValid = false;
    }


    if (isset($_POST["gender"])) {
        $gender = clean_input($_POST["gender"]);
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $isValid = false;
        }
    } else {
        $genderErr = "Gender is required";
        $isValid = false;
    }




    $phone = clean_input($_POST["phone"]);
    if (empty($phone)) {
        $phoneErr = "Phone number is required";
        $isValid = false;
    } else {

        if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)) {
            $phoneErr = "Invalid contact number (Please make it in xxx-xxx-xxxx form";
            $isValid = false;
        }
        }




$zipcode = clean_input($_POST["zipcode"]);
if (empty($zipcode)) {
    $zipErr = "Zip code is required";
    $isValid = false;
} else {
    if (!preg_match("/^[0-9]{5}$/", $zipcode)) {
        $zipErr = "Invalid zip code";
        $isValid = false;
    }
}






    $email = clean_input($_POST["email"]);
    if (empty($email)) {
        $emailErr = "Email is required";
        $isValid = false;
    } else {
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            /*
            The filter_var() function is the easiest and safest way
            to check whether an email address is well-formed.
            */
            $emailErr = "Invalid email format";
            $isValid = false;
        }
    }
    $username = clean_input($_POST["username"]);
    if (empty($username)) {
        $nameErr = "Please enter a username";
        $isValid = false;
    } else {
        $len = strlen($username);
        if ($len < 6) {
            $nameErr = "username is too short, min is 6 characters (50 max)";
            $isValid = false;
        } else if ($len > 50) {
            $nameErr = "Username is too long, maximum is 50 chacters (6min).";
            $isValid = false;
        }
    }

    $password = clean_input($_POST["password"]);
    if (empty($password)) {
        $passwordErr = "password is required";
        $isValid = false;
    } else {
        $len = strlen($password);
        if ($len < 8) {
            $passwordErr = "Name is too short, minimum is 6 characters (50 max).";
            $isValid = false;
        } else if ($len > 50) {
            $passwordErr = "Field Name is too long, maximum is 50 characters (6 min).";
            $isValid = false;
        }
        if (empty($password)) {
            $passwordErr = "Name is required";
            $isValid = false;
        } else {
            // check if name only contains letters and whitespace
            if (!preg_match("^(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{7,30}$^", $password)) {
                /*
                The preg_match() function searches a string for pattern,
                returning true if the pattern exists, and false otherwise.
                */
                $passwordErr = "Only letters and white space allowed";
                $isValid = false;
            }
        }

}





$cpassword = clean_input($_POST["cpassword"]);
if (empty($cpassword)) {
    $cpasswordErr = "please verify your password";
    $isValid = false;
} else {
    $len = strlen($cpassword);
    if ($len < 8) {
        $cpasswordErr = "password doesnt match minimum is 6 characters (50 max).";
        $isValid = false;
    } else if ($len > 50) {
        $cpasswordErr = "password doesnt match, maximum is 50 characters (6 min).";
        $isValid = false;
    }
    if (empty($cpassword)) {
        $cpasswordErr = "Please verify your password";
        $isValid = false;
    } else {
        // check if name only contains letters and whitespace
        if (!preg_match("^(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{7,30}$^", $cpassword)) {
            /*
            The preg_match() function searches a string for pattern,
            returning true if the pattern exists, and false otherwise.
            */
            $cpasswordErr = "Only letters and white space allowed";
            $isValid = false;
        }
    }

}










if ($_POST['password']!= $_POST['cpassword'])
{
    echo("Oops! Password did not match! Try again. ");
}



function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>