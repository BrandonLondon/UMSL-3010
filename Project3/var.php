
<html>
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
<?php
include 'input.php';
?>
<body>

<form method="post" novalidate
      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <!-- I have no clue where to send this-->
    <fieldset>

        <legend>Registration Form</legend>

        <!--Label for Username -->

        <label for="username">username</label> <br>
        <!--textbox for username with maxlength , minlength and required-->
        <input type="text" id="username" name="username" value="<?php echo $username; ?>" placeholder="Enter Username" /><br>
        <span class="error">* <?php echo $nameErr;?></span> <br/><br/>
        <!--Label for Password -->


        <label for="password">Password</label> <br>

        <!--textbox for Password with maxlength , minlength and required -->

        <input type="password" id="password" name="password" value="<?php echo $password; ?>" placeholder="Enter Password"/>
        <span class="error">* <?php echo $passwordErr;?></span> <br/><br/>
        <br>

        <!--Label for confirm Password -->

        <label for="Cpassword">Confirm Password</label> <br>

        <!--textbox for confirm Password with maxlength , minlength and required-->

        <input type="password" id="cpassword" name="cpassword" value="<?php echo $cpassword; ?>" placeholder="Enter confirm Password"/>
        <span class="error">* <?php echo $cpasswordErr;?></span> <br/><br/>
        <br>

        <!--Label for First Name -->

        <label for="firstName">First Name</label> <br>

        <!--textbox for First Name with maxlength and required-->

        <input type="text" id="firstName" name="firstName" value="<?php echo $firstName; ?>" placeholder="Enter First Name"/><br>
        <span class="error">* <?php echo $firstErr;?></span> <br/><br/>

        <!--Label for Last Name -->

        <label for="lastName">Last Name</label> <br>

        <!--textbox for Last Name with maxlength and required-->

        <input type="text" id="lastName" name="lastName" value="<?php echo $lastName; ?>" placeholder="Enter Last Name"/><br>
        <span class="error">* <?php echo $lastErr;?></span> <br/><br/>
        <!--Label for Address line 1 -->

        <label for="address1">Address 1</label> <br>

        <!--textarea for Address with maxlength and required-->

        <textarea id="txtAddress1" name="address1" value="<?php echo $address1; ?>"  placeholder="Enter Address 1"></textarea><br>
        <span class="error">* <?php echo $address1Err;?></span> <br/><br/>
        <!--Label for Address line 2 -->

        <label for="address2">Address 2</label> <br>

        <!--textarea for Address with maxlength-->

        <textarea id="txtAddress2" placeholder="Enter Address 2"></textarea><br>

        <!--Label for city -->

        <label for="city">City</label> <br>

        <!--textbox for city with maxlength and required-->

        <input type="text" id="txtCity" name="city" value="<?php echo $city; ?>" placeholder="Enter City"/><br>
        <span class="error">* <?php echo $cityErr;?></span> <br/><br/>
        <!--Label for city -->

        <label for="state">State</label> <br>

        <!--textbox for state with maxlength and required-->

        <input type="text" id="txtState" name="state" value="<?php echo $state; ?>" placeholder="Enter State"/><br>
        <span class="error">* <?php echo $stateErr;?></span> <br/><br/>
        <!--Label for zip code -->

        <label for="zipcode">Zip Code</label> <br>

        <!--textbox for Zip Code with maxlength, minlength and required-->

        <input type="text" id="zipcode" name="zipcode" value="<?php echo $zipcode; ?>" placeholder="Enter Zip Code"/><br>
        <span class="error">* <?php echo $zipErr;?></span> <br/><br/>
        <!--Label for phone -->

        <label for="txtphone">Phone</label> <br>

        <!--textbox for phone with maxlength and required-->

        <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" placeholder="Enter Phone"/><br>
        <span class="error">* <?php echo $phoneErr;?></span> <br/><br/>




        <!--input type=email for Email with required-->
        <label for="email">E-mail:</label>
        <input id="email" type="text" name="email"
               value="<?php echo $email; ?>"/>
        <span class="error">* <?php echo $emailErr;?></span>
        <br/><br/>

        <!--Label Gender -->
        <div>
        <label for="female">Female</label>
        <input type="radio" id="female" name="gender"
            <?php if ($gender=="female"){echo "checked";}?>
               value="female"/>

        <label for="male">Male</label>
        <input type="radio" id="male" name="gender"
            <?php if ($gender=="male"){echo "checked";}?>
               value="male"/>

        <span class="error">* <?php echo $genderErr;?></span>
        <br/><br/>
        </div>



        <div>
        <label for="single">single</label>
        <input type="radio" id="single" name="status"
            <?php if ($status=="single"){echo "checked";}?>
               value="single"/>

        <label for="married">Married</label>
        <input type="radio" id="married" name="status"
            <?php if ($status=="married"){echo "checked";}?>
               value="married"/>

        <span class="error">* <?php echo $statusErr;?></span>
        <br/><br/>
        </div>
        <!--Label for Date of Birth -->

        <label for="dob">Date of Birth</label> <br>

        <!--input type=date for date of birth with required-->

        <input type="date" id="date" name="date" placeholder="Select Date of Birth "/><br>
        <!--buttons for submit and reset -->

        <input type="Submit" value="Register"/>

        <input type="Reset" value="Reset"/>

    </fieldset>

</form>
</html>
