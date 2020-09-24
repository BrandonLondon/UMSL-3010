<!DOCTYPE html>
<?php
include 'connectionInfo.php';
?>


<html lang = "en">
<head>
    <?php define("title", "CraftyBois Form"); ?>
    <title><?php echo title; ?></title>
    <meta charset = "utf-8" />
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
<h1><?php echo title; ?></h1>
<br/>
<?php
include 'inputValidate.php';
?>
<h2>CraftyBois Validation form</h2>
<p><span class="error">* required field.</span></p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <label for="name">Username:</label>
    <input id="name" type="text" name="name" value="<?php echo $name; ?>" required maxlength="50" minlength="6"/>
    <span class="error">* <?php echo $nameErr;?></span>
    <br/><br/>

    <label for="password">Password:</label>
    <input id="password" type="password" name="password" value="<?php echo $password; ?>" required maxlength="50" minlength="8" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" />
    <span class="error">* <?php echo $passwordErr;?></span>
    <br/><br/>

    <label for="cpassword">Confirm Password:</label>
    <input id="cpassword" type="password" name="cpassword" value="<?php echo $cpassword; ?>" required maxlength="50" minlength="8" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" />
    <span class="error">* <?php echo $cpasswordErr;?></span>
    <br/><br/>

    <label for="firstname">First Name:</label>
    <input id="firstname" type="text" name="firstname" value="<?php echo $firstname; ?>" required maxlength="50" minlength="1"/>
    <span class="error">* <?php echo $firstnameErr;?></span>
    <br/><br/>

    <label for="lastname">Last Name:</label>
    <input id="lastname" type="text" name="lastname" value="<?php echo $lastname; ?>" required maxlength="50" minlength="1"/>
    <span class="error">* <?php echo $lastnameErr;?></span>
    <br/><br/>

    <label for="address1">Address1:</label>
    <input id="address1" type="text" name="address1" value="<?php echo $address1; ?>" required maxlength="100"/>
    <span class="error">* <?php echo $address1Err;?></span>
    <br/><br/>

    <label for="address2">Address2:</label>
    <input id="address2" type="text" name="address2" value="<?php echo $address2; ?>" />
    <span class="error"> <?php echo $address2Err;?></span>
    <br/><br/>

    <label for="city">City:</label>
    <input id="city" type="text" name="city" value="<?php echo $city; ?>" required maxlength="50"/>
    <span class="error">* <?php echo $cityErr;?></span>
    <br/><br/>

    <label for="state">State:</label>
    <input id="state" type="text" name="state" value="<?php echo $state; ?>" required maxlength="52" />
    <span class="error">* <?php echo $stateErr;?></span>
    <br/><br/>

    <label for="zipcode">ZipCode:</label>
    <input id="zipcode" type="text" name="zipcode" value="<?php echo $zipcode; ?>" />
    <span class="error">* <?php echo $zipcodeErr;?></span>
    <br/><br/>

    <label for="phone">Phone Number:</label>
    <input id="phone" type="text" name="phone" value="<?php echo $phone; ?>"/>
    <span class="error">* <?php echo $phoneErr;?></span>
    <br/><br/>

    <label for="email">E-mail:</label>
    <input id="email" type="text" name="email" value="<?php echo $email; ?>"/>
    <span class="error">* <?php echo $emailErr;?></span>
    <br/><br/>

    <label for="dateOfBirth">dateOfBirth:</label>
    <input id="dateOfBirth" type="text" name="dateOfBirth" value="<?php echo $dateOfBirth; ?>"/>
    <br/><br/>

    Gender:
    <label for="female">Female</label>
    <input type="radio" id="female" name="gender"
        <?php if (isset($gender) && $gender=="female") echo "checked";?>
           value="female"/>

    <label for="male">Male</label>
    <input type="radio" id="male" name="gender"
        <?php if (isset($gender) && $gender=="male") echo "checked";?>
           value="male"/>

    <span class="error">* <?php echo $genderErr;?></span>
    <br/><br/>

    Marriage Status:
    <label for="single">Single</label>
    <input type="radio" id="single" name="maritalStatus"
        <?php if (isset($maritalStatus) && $maritalStatus=="single") echo "checked";?>
           value="single"/>

    <label for="married">Married</label>
    <input type="radio" id="married" name="maritalStatus"
        <?php if (isset($maritalStatus) && $maritalStatus=="married") echo "checked";?>
           value="married"/>

    <span class="error">* <?php echo $maritalStatusErr;?></span>
    <br/><br/>


    <button>SUBMIT BUTTON</button>
</form>
<?php
include 'insertValidData.php';
?>
</body>
</html>