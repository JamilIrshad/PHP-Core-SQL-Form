<?php
//getting id from url
$id = $_GET["id"];

//Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xampp-demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Only when succesfull connection
//delete form table using id
$sql = "DELETE FROM person WHERE email like '$id';";

//if delete successfull then redirect to display.php
$result = $conn->query($sql);
if ($result) {
    //redirect to display.php
    header("Location: display.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>