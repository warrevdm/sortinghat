<?php

$servername = "ID362587_sortinghat.db.webhosting.be";
$username = "ID362587_sortinghat";
$password = "HtmlPhp123";
$dbname = "ID362587_sortinghat";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// get all the products
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$gender = $_GET["gender"];
$motivatie = $_GET["motivatie"];

$sql = "INSERT INTO hogwarts (id, firstname, lastname, gender, motivatie)
VALUES (NULL, '$firstname', '$lastname', '$gender', '$motivatie');";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="refresh" content="7; url='http://sortinghat.warrevandermaat.be/api/welkom.php'" />

    <title>Ben jij welkom?</title>
</head>

<body>
    <?php
    if ($conn->multi_query($sql) === TRUE) {
        echo "<h2>" . "Welkom!" . "</h2>";
        echo "<p>" . "Aub, volg deze " .  "<a href='welkom.php'>" .  "link" . "</a>" . "</p>";
    } else {
        echo "<h2>" . "Error: " . "</h2>" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>


</body>

</html>