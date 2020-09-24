<?php
	// define variables and set to empty values
	$nameErr = $passwordErr = $firstnameErr = $lastnameErr = $address1Err = $address2Err = $cityErr = $stateErr =
        $maritalStatusErr = $cpasswordErr = $zipcodeErr = $phoneErr = $emailErr = $genderErr = "";
	$name = $password = $firstname = $lastname = $cpassword = $email = $address1 = $address2 = $city = $state = $zipcode = $dateOfBirth = $phone = $maritalStatus = $gender = "";
	$isValid = false;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$isValid = true;

		$name = clean_input($_POST["name"]);
		if (empty($name)) {
			$nameErr = "Name is required";
			$isValid = false;
		} else {
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
				/*
				The preg_match() function searches a string for pattern, 
				returning true if the pattern exists, and false otherwise.
				*/
				$nameErr = "Only letters and white space allowed";
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
                $passwordErr = "password is too short, minimum is 6 characters (50 max).";
                $isValid = false;
            } else if ($len > 50) {
                $passwordErr = "password is too long, maximum is 50 characters (6 min).";
                $isValid = false;
            }
            if (empty($password)) {
                $passwordErr = "password is required";
                $isValid = false;
            } else {
                // check if name only contains letters and whitespace
                if (!preg_match("^(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{7,30}$^", $password)) {
                    /*
                    The preg_match() function searches a string for pattern,
                    returning true if the pattern exists, and false otherwise.
                    */
                    $passwordErr = "Password needs at last 1 number and special character";
                    $isValid = false;
                }
            }

        }

        $cpassword = clean_input($_POST["cpassword"]);
        if (empty($cpassword)) {
            $cpasswordErr = "cpassword is required";
            $isValid = false;
        } else {
            $len = strlen($cpassword);
            if ($len < 8) {
                $cpasswordErr = "password is too short, minimum is 6 characters (50 max).";
                $isValid = false;
            } else if ($len > 50) {
                $cpasswordErr = "password is too long, maximum is 50 characters (6 min).";
                $isValid = false;
            }
            if (empty($cpassword)) {
                $cpasswordErr = "password is required";
                $isValid = false;
            } else {
                // check if name only contains letters and whitespace
                if (!preg_match("^(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{7,30}$^", $cpassword)) {
                    /*
                    The preg_match() function searches a string for pattern,
                    returning true if the pattern exists, and false otherwise.
                    */
                    $cpasswordErr = "Password needs at last 1 number and special character";
                    $isValid = false;
                }
            }

        }

        $firstname = clean_input($_POST["firstname"]);
        if (empty($firstname)) {
            $firstnameErr = "First name is required";
            $isValid = false;
        } else {
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]+$/", $firstname)) {
                /*
                The preg_match() function searches a string for pattern,
                returning true if the pattern exists, and false otherwise.
                */
                $firstnameErr = "Only letters and white space allowed";
                $isValid = false;
            }
        }

        $lastname = clean_input($_POST["lastname"]);
        if (empty($lastname)) {
            $lastnameErr = "Last name is required";
            $isValid = false;
        } else {
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]+$/", $lastname)) {
                /*
                The preg_match() function searches a string for pattern,
                returning true if the pattern exists, and false otherwise.
                */
                $lastnameErr = "Only letters and white space allowed";
                $isValid = false;
            }
        }


        $address1 = clean_input($_POST["address1"]);
        if (empty($address1)) {
            $address1Err = "Your Address is required";
            $isValid = false;
        } else {
            $len = strlen($address1);
            if ($len > 100) {
                $address1Err = "Address is too Long, Maximum is 100 characters (100 max).";
                $isValid = false;
            }
        }

        $address2 = clean_input($_POST["address2"]);
            $len = strlen($address2);
            if ($len > 100) {
                $address2Err = "Address is too Long, Maximum is 100 characters (100 max).";
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

        $zipcode = clean_input($_POST["zipcode"]);
        if (empty($zipcode)) {
            $zipcodeErr = "Zip code is required";
            $isValid = false;
        } else {
            if (!preg_match("/^[0-9]{5}$/", $zipcode)) {
                $zipcodeErr = "Invalid zip code";
                $isValid = false;
            }
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
		
		$gender = clean_input(isset($_POST['gender']) ? $_POST['gender'] : null);
		if (empty($gender)) {
			$genderErr = "Gender is required";
			$isValid = false;
		}

        $maritalStatus = clean_input(isset($_POST['maritalStatus']) ? $_POST['maritalStatus'] : null);
        if (empty($maritalStatus)) {
    $maritalStatusErr = "marriage status is required";
    $isValid = false;
            }
	}


	function clean_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>