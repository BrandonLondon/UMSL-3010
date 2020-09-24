<!DOCTYPE html>
<?php
include 'connectionInfo.php';
?>

<title>CraftyBois.MC</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="foo.css">
<link rel="stylesheet" type="text/css" href="registration.css">
<!DOCTYPE html>

<html lang="en-US">

<head>
    <center>
        <div class="top">
            <div class="row black">
                <div class="col">
                    <a href="project1" class="block button black">HOME</a>
                </div>
                <div class="col">
                    <a href="foo" class="button block black">Animation</a>
                </div>
                <div class="col">
                    <a href="project1#rules" class="button block black">RULES</a>
                </div>
                <div class="col">
                    <a href="Registration" class="button block black">Registration</a>
                </div>
            </div>
        </div>
        <!-- Header with image -->
        <header class="bgimg display-container grayscale-min" id="home">
            <div class="display-middle center">
                <span class="text-white" style="font-size: xx-large  body, html {
        display: inherit;
        height: 100%;
        font-family: "Inconsolata", sans-serif;
                }
                div {display: inherit}

                .bgimg {
                display: inherit;
                background-position: center;
                background-size: cover;
                background-image: url("https://www.mobygames.com/images/covers/l/477121-minecraft-xbox-one-edition-favorites-pack-xbox-one-front-cover.png");
                height: 200px;
                }
                .menu {
                display: inherit;
                };">CraftyBois<br></span>
            </div>
            <div class="display-bottomright center padding-large">
                <span class="text-white">Server is currently up!</span>
            </div>
    </center>


    <!--title for web page -->

    <title>Registration form</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--style for web page -->

    <style>


        body, html {
            display: inherit;
            height: 100%;
            font-family: "Inconsolata", sans-serif;
        }
        div {display: inherit}

        .bgimg {
            display: inherit;
            background-position: center;
            background-size: cover;
            background-image: url("https://www.mobygames.com/images/covers/l/477121-minecraft-xbox-one-edition-favorites-pack-xbox-one-front-cover.png");
            height: 200px;
        }
         .menu {
            display: inherit;
        }
        /*style for fieldset */

        fieldset{

            width: 30%;

            margin-left: 35%;

        }

        /*style for all input types */

        input[type='text'],input[type='password'] ,textarea,input[type='email'] , input[type='date']

        {

            margin-left: 40px;

            width: 300px;

            height: 25px;

            margin-top: 5px;

            margin-bottom: 5px;

        }

        /*style for label */

        label , input[type='radio']{

            margin-left: 40px;

        }

        /*style for button */

        input[type='submit']

        {

            width: 140px;

            height: 30px;

            margin-left: 40px;

        }

        input[type='reset']

        {

            width: 140px;

            height: 30px;

            margin-left: 25px;

        }

        .error{color:red;
        font-weight:bold;}

    </style>


</head>
<body>
<?php
include 'input.php';
?>
<form method="POST" novalidate
      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <!-- I have no clue where to send this-->
    <fieldset>

        <legend>Registration Form</legend>

        <!--Label for Username -->

        <label for="username">username</label> <br>
        <!--textbox for username with maxlength , minlength and required-->
        <input type="text" id="username" name="username" value="<?php echo $username; ?>" placeholder="Enter Username" required maxlength="50" minlength="6" /><br>
        <span class="error">* <?php echo $nameErr;?></span> <br/><br/>
        <!--Label for Password -->


        <label for="password">Password</label> <br>

        <!--textbox for Password with maxlength , minlength and required -->

        <input type="password" id="password" name="password" value="<?php echo $password; ?>" placeholder="Enter Password" required maxlength="50" minlength="8"

               pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" />
        <span class="error">* <?php echo $passwordErr;?></span> <br/><br/>
        <br>

        <!--Label for confirm Password -->

        <label for="Cpassword">Confirm Password</label> <br>

        <!--textbox for confirm Password with maxlength , minlength and required-->

        <input type="password" id="cpassword" name="cpassword" value="<?php echo $cpassword; ?>" placeholder="Enter confirm Password" required maxlength="50" minlength="8"

               pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$"/>
        <span class="error">* <?php echo $cpasswordErr;?></span> <br/><br/>
        <br>

        <!--Label for First Name -->

        <label for="firstName">First Name</label> <br>

        <!--textbox for First Name with maxlength and required-->

        <input type="text" id="firstName" name="firstName" value="<?php echo $firstName; ?>" placeholder="Enter First Name" required maxlength="50" minlength="1" /><br>
        <span class="error">* <?php echo $firstErr;?></span> <br/><br/>

        <!--Label for Last Name -->

        <label for="lastName">Last Name</label> <br>

        <!--textbox for Last Name with maxlength and required-->

        <input type="text" id="lastName" name="lastName" value="<?php echo $lastName; ?>" placeholder="Enter Last Name" required maxlength="50" minlength="1" /><br>
        <span class="error">* <?php echo $lastErr;?></span> <br/><br/>
        <!--Label for Address line 1 -->

        <label for="address1">Address 1</label> <br>

        <!--textarea for Address with maxlength and required-->

        <textarea id="txtAddress1" name="address1" value="<?php echo $address1; ?>"  placeholder="Enter Address 1" required maxlength="100"></textarea><br>
        <span class="error">* <?php echo $address1Err;?></span> <br/><br/>
        <!--Label for Address line 2 -->

        <label for="address2">Address 2</label> <br>

        <!--textarea for Address with maxlength-->

        <textarea id="txtAddress2" placeholder="Enter Address 2" maxlength="100"></textarea><br>

        <!--Label for city -->

        <label for="city">City</label> <br>

        <!--textbox for city with maxlength and required-->

        <input type="text" id="txtCity" name="city" value="<?php echo $city; ?>" placeholder="Enter City" required maxlength="50"/><br>
        <span class="error">* <?php echo $cityErr;?></span> <br/><br/>
        <!--Label for city -->

        <label for="state">State</label> <br>

        <!--textbox for state with maxlength and required-->

        <input type="text" id="txtState" name="state" value="<?php echo $state; ?>" placeholder="Enter State" required maxlength="52"/><br>
        <span class="error">* <?php echo $stateErr;?></span> <br/><br/>
        <!--Label for zip code -->

        <label for="zipcode">Zip Code</label> <br>

        <!--textbox for Zip Code with maxlength, minlength and required-->

        <input type="text" id="zipcode" name="zipcode" value="<?php echo $zipcode; ?>" placeholder="Enter Zip Code" required maxlength="10" minlength="5"/><br>
        <span class="error">* <?php echo $zipErr;?></span> <br/><br/>
        <!--Label for phone -->

        <label for="txtphone">Phone</label> <br>

        <!--textbox for phone with maxlength and required-->

        <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" placeholder="Enter Phone" required maxlength="12" onKeyPress="return numbersonly(event)" pattern="\d{3}[-]\d{3}[-]\d{4}" /><br>
        <span class="error">* <?php echo $phoneErr;?></span> <br/><br/>




        <!--input type=email for Email with required-->
        <label for="email">E-mail:</label>
        <input id="email" type="text" name="email"
               value="<?php echo $email; ?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
        <span class="error">* <?php echo $emailErr;?></span>
        <br/><br/>

        <!--Label Gender -->
        <div>
        <label for="female">Female</label>
        <input type="radio" id="female" name="gender"
            <?php if ($gender=="female"){echo "checked";}?>
               value="female" required/>

        <label for="male">Male</label>
        <input type="radio" id="male" name="gender"
            <?php if ($gender=="male"){echo "checked";}?>
               value="male" required/>

        <span class="error">* <?php echo $genderErr;?></span>
        <br/><br/>
        </div>



        <div>
        <label for="single">single</label>
        <input type="radio" id="single" name="status"
            <?php if ($status=="single"){echo "checked";}?>
               value="single" required/>

        <label for="married">Married</label>
        <input type="radio" id="married" name="status"
            <?php if ($status=="married"){echo "checked";}?>
               value="married" required/>

        <span class="error">* <?php echo $statusErr;?></span>
        <br/><br/>
        </div>
        <!--Label for Date of Birth -->

        <label for="dob">Date of Birth</label> <br>

        <!--input type=date for date of birth with required-->

        <input type="date" id="date" name="date" placeholder="Select Date of Birth " value="<?php echo $dateofbirth; ?>"/><br>
        <!--buttons for submit and reset -->

        <button>SUBMIT BUTTON</button>

    </fieldset>

</form>

<html lang = "en">
<head>
    <?php define("title", "DB_CONN"); ?>
    <title><?php echo title; ?></title>
    <meta charset = "utf-8" />
</head>
<body>
Testing PDO
</body>

<style type="text/css">

    input:required:invalid, input:focus:invalid {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAeVJREFUeNqkU01oE1EQ/mazSTdRmqSxLVSJVKU9RYoHD8WfHr16kh5EFA8eSy6hXrwUPBSKZ6E9V1CU4tGf0DZWDEQrGkhprRDbCvlpavan3ezu+LLSUnADLZnHwHvzmJlvvpkhZkY7IqFNaTuAfPhhP/8Uo87SGSaDsP27hgYM/lUpy6lHdqsAtM+BPfvqKp3ufYKwcgmWCug6oKmrrG3PoaqngWjdd/922hOBs5C/jJA6x7AiUt8VYVUAVQXXShfIqCYRMZO8/N1N+B8H1sOUwivpSUSVCJ2MAjtVwBAIdv+AQkHQqbOgc+fBvorjyQENDcch16/BtkQdAlC4E6jrYHGgGU18Io3gmhzJuwub6/fQJYNi/YBpCifhbDaAPXFvCBVxXbvfbNGFeN8DkjogWAd8DljV3KRutcEAeHMN/HXZ4p9bhncJHCyhNx52R0Kv/XNuQvYBnM+CP7xddXL5KaJw0TMAF8qjnMvegeK/SLHubhpKDKIrJDlvXoMX3y9xcSMZyBQ+tpyk5hzsa2Ns7LGdfWdbL6fZvHn92d7dgROH/730YBLtiZmEdGPkFnhX4kxmjVe2xgPfCtrRd6GHRtEh9zsL8xVe+pwSzj+OtwvletZZ/wLeKD71L+ZeHHWZ/gowABkp7AwwnEjFAAAAAElFTkSuQmCC);
        background-position: right top;
        background-repeat: no-repeat;
        -moz-box-shadow: none;
    }
    input:required:valid {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAepJREFUeNrEk79PFEEUx9/uDDd7v/AAQQnEQokmJCRGwc7/QeM/YGVxsZJQYI/EhCChICYmUJigNBSGzobQaI5SaYRw6imne0d2D/bYmZ3dGd+YQKEHYiyc5GUyb3Y+77vfeWNpreFfhvXfAWAAJtbKi7dff1rWK9vPHx3mThP2Iaipk5EzTg8Qmru38H7izmkFHAF4WH1R52654PR0Oamzj2dKxYt/Bbg1OPZuY3d9aU82VGem/5LtnJscLxWzfzRxaWNqWJP0XUadIbSzu5DuvUJpzq7sfYBKsP1GJeLB+PWpt8cCXm4+2+zLXx4guKiLXWA2Nc5ChOuacMEPv20FkT+dIawyenVi5VcAbcigWzXLeNiDRCdwId0LFm5IUMBIBgrp8wOEsFlfeCGm23/zoBZWn9a4C314A1nCoM1OAVccuGyCkPs/P+pIdVIOkG9pIh6YlyqCrwhRKD3GygK9PUBImIQQxRi4b2O+JcCLg8+e8NZiLVEygwCrWpYF0jQJziYU/ho2TUuCPTn8hHcQNuZy1/94sAMOzQHDeqaij7Cd8Dt8CatGhX3iWxgtFW/m29pnUjR7TSQcRCIAVW1FSr6KAVYdi+5Pj8yunviYHq7f72po3Y9dbi7CxzDO1+duzCXH9cEPAQYAhJELY/AqBtwAAAAASUVORK5CYII=);
        background-position: right top;
        background-repeat: no-repeat;
    }

</style>
</body>
</html>
