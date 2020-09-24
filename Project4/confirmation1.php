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
<h2>PDO Form Confirmation Example</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <label for="name">Name:</label>
    <input disabled id="name" type="text" name="name" value="<?php echo $name; ?>"/>
    <br/><br/>

    <label for="email">E-mail:</label>
    <input disabled id="email" type="text" name="email" value="<?php echo $email; ?>"/>
    <br/><br/>

    <label for="website">Website:</label>
    <input disabled id="website" type="text" name="website" value="<?php echo $website; ?>"/>
    <br/><br/>

    <label for="comment">Comment:</label>
    <textarea disabled id="comment" name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
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

    <button>SUBMIT BUTTON</button>
</form>
</body>
</html>
