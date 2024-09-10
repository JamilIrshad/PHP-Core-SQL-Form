<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Person form</title>
    <link rel="stylesheet" href="/internship/form.css">

</head>

<body>
    <div class="container">
        <form action="formhandling.php" method="post">
            First Name: <input type="text" name="fname" required>
            Last Name: <input type="text" name="lname" required>
            Email: <input type="text" name="email" required>
            <select name="gender" id="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <button>Submit</button>
        </form>
    </div>
</body>

</html>