<?php
//Getting form data through POST global variable
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $f_name = $_POST["fname"];
    $l_name = $_POST["lname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];

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
    echo "Connected successfully";

    //inserting into table
    $sql = "INSERT INTO person (fname, lname, email, gender) VALUES ('$f_name', '$l_name', '$email', '$gender')";

    //if insert successfull then redirect to display.php
    $result = $conn->query($sql);
    if ($result === TRUE) {
        //redirect to display.php
        header("Location: display.php");
        die();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
} else {
    echo "<h1>Form not submitted</h1>";
}
?>