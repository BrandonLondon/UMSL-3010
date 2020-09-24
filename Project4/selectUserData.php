<?php
	try {
		$last_id = $_SESSION["last_id"];
		//echo "<br/>ID: $last_id<br/>";
		$conn = new PDO("mysql:host=$servername;dbname=$dbname",
            $userName, $passWord);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT username, password, firstname, lastname, address1, address2, city, state, zipcode, phone, email, gender, maritalStatus, dateOfBirth ".
		" FROM registration WHERE id = :last_id");
		$stmt->bindParam(':last_id', $last_id);
		$stmt->execute();

		// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		//var_dump($stmt->fetchAll()[0]);
		$assocArray = $stmt->fetchAll()[0];
		$name = $assocArray["username"];
        $password = $assocArray["password"];
		$firstname=$assocArray["firstname"];
        $lastname=$assocArray["lastname"];
		$address1 = $assocArray["address1"];
        $address2 = $assocArray["address2"];
        $city = $assocArray["city"];
		$state = $assocArray["state"];
        $zipcode = $assocArray["zipcode"];
        $phone = $assocArray["phone"];
		$email = $assocArray["email"];
        $dateOfBirth = $assocArray["dateOfBirth"];
		$gender = $assocArray["gender"];
        $maritalStatus = $assocArray["maritalStatus"];
	}
	catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	} finally {
		$conn = null;
	}
?>