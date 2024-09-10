<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <?php

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
    //inserting into table
    $sql = "SELECT * from person;";
    $result = $conn->query($sql);

    //successfull getting of data from db
    if ($result) {
        echo"<h1>Person Details</h1>";
        if ($result->num_rows > 0) {
            echo "
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Delete</th>
        </tr>";
            while ($rows = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $rows["fname"] . "</td>";
                echo "<td>" . $rows["lname"] . "</td>";
                echo "<td>" . $rows["email"] . "</td>";
                echo "<td>" . $rows["gender"] . "</td>";

                //Delete button
                echo "<td><a href='deleteperson.php?id=" . $rows["email"] . "'>Delete</a></td>";
                echo "<tr>";
            }
        } else {
            echo "<h3>No data found</h3>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    ?>
    </table>
</body>

</html>