<!DOCTYPE html>
<?php
	include 'connectionInfo.php';
?>
<html lang = "en">
	<head>
		<?php define("title", "Craftybois"); ?>
		<title><?php echo title; ?></title>
		<meta charset = "utf-8" />
	</head>
		<body>
		<h1><?php echo title; ?></h1>
		<br/>
		<?php
			include 'selectUserData.php';
		?>
		<h2>CraftyBois Form Confirmation</h2>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
			<label for="name">Name:</label>
			<input disabled id="name" type="text" name="name" value="<?php echo $name; ?>"/>
			<br/><br/>

            <label for="password">Password:</label>
            <input disabled id="password" type="text" name="password" value="<?php echo $password; ?>"/>
            <br/><br/>

            <label for="firstname">First Name:</label>
            <input disabled id="firstname" type="text" name="firstname" value="<?php echo $firstname; ?>"/>
            <br/><br/>

            <label for="lastname">Last Name:</label>
            <input disabled id="lastname" type="text" name="lastname" value="<?php echo $lastname; ?>"/>
            <br/><br/>

            <label for="address1">Address1:</label>
            <input disabled id="address1" type="text" name="address1" value="<?php echo $address1; ?>"/>
            <br/><br/>

            <label for="address2">Address2:</label>
            <input disabled id="address2" type="text" name="address2" value="<?php echo $address2; ?>"/>
            <br/><br/>

            <label for="city">City:</label>
            <input disabled id="city" type="text" name="city" value="<?php echo $city; ?>"/>
            <br/><br/>

            <label for="state">State:</label>
            <input disabled id="state" type="text" name="state" value="<?php echo $state; ?>"/>
            <br/><br/>

            <label for="zipcode">Zipcode:</label>
            <input disabled id="zipcode" type="text" name="zipcode" value="<?php echo $zipcode; ?>"/>
            <br/><br/>

            <label for="phone">Phone Number:</label>
            <input disabled id="phone" type="text" name="phone" value="<?php echo $phone; ?>"/>
            <br/><br/>

			<label for="email">E-mail:</label>
			<input disabled id="email" type="text" name="email" value="<?php echo $email; ?>"/>
			<br/><br/>

            <label for="dateOfBirth">DateOfBirth:</label>
            <input disabled id="dateOfBirth" type="text" name="dateOfBirth" value="<?php echo $dateOfBirth; ?>"/>
            <br/><br/>

			Gender:
			<label for="female">Female</label>
			<input disabled type="radio" id="female" name="gender" 
					<?php if (isset($gender) && $gender=="female") echo "checked";?>
					value="female"/>
					
			<label for="male">Male</label>
			<input disabled type="radio" id="male" name="gender"
					<?php if (isset($gender) && $gender=="male") echo "checked";?>
					value="male"/>
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
            <br/><br/>

			<button>SUBMIT BUTTON</button>  
		</form>
	</body>
</html>