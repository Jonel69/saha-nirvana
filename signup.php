<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        body {background-image: url('images/img4.jpg');
            background-size: cover;           
            background-repeat: no-repeat;
            background-attachment: fixed;          
            background-position: center center;
            font-family: Arial, sans-serif;
}

.container {
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: rgb(218, 255, 251);
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    color: rgb(4, 54, 74);
}

.container h3 {
    text-align: center;
    color: rgb(23, 107, 135);
}

.container label {
    color: rgb(23, 107, 135);
}

.container input[type="text"],
.container input[type="password"] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid rgb(23, 107, 135);
    box-sizing: border-box;
    border-radius: 5px;
}

.container button {
    width: 100%;
    background-color: rgb(23, 107, 135);
    color: rgb(218, 255, 251);
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin: 10px 0;
}

.container button:hover {
    background-color: rgb(100, 204, 197);
    color: rgb(4, 54, 74);
}

.container input[type="checkbox"] {
    margin-bottom: 15px;
}

.container .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: rgb(100, 204, 197);
    color: rgb(4, 54, 74);
    border-radius: 5px;
    cursor: pointer;
}

.container .cancelbtn:hover {
    background-color: rgb(23, 107, 135);
    color: rgb(218, 255, 251);
}

    </style>
</head>
<body>
    <?php
    include("php/connect.php");

    if (isset($_POST['submit2'])) {
        $name = $_POST['uname'];
        $email = $_POST['uemail'];
        $password = $_POST['psw'];
        $city = $_POST['city'];

        // Check if the email already exists
        $result = mysqli_query($con, "SELECT email FROM users WHERE email = '$email'");
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            echo "<div class='container'><p>This email is already used. Please try another one.</p></div>";
        } else {
            // Insert the user's information into the database (without password hashing for this example)
            mysqli_query($con, "INSERT INTO users (name, email, city, pass) VALUES ('$name', '$email', '$city', '$password')") or die("Insert Error");
            echo "<div class='container'><center><p>Thank you for registration.</p></center></div>";
        }
    }
    ?>

    <div id="id02" class="modal">
        <form class="modal-content animate" action="signup.php" method="post">
            <div class="container">
                <center>
                    <h3>Register page</h3>
                </center>
            </div>
            <br>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="uemail"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="uemail" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="city"><b>City</b></label>
                <input type="text" placeholder="Enter City" name="city" required>

                <button type="submit" name="submit2" >Register</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            <br>

            <div class="container" style="background-color: #DAFFFB">
                <center><button type="button" onclick="location.href='index1.php'" class="cancelbtn">Cancel</button></center>
            </div>
        </form>
    </div>
</body>
</html>
