<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background-image: url('images/img4.jpg');
            background-size: cover;           
            background-repeat: no-repeat;
            background-attachment: fixed;          
            background-position: center center;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: rgb(23, 107, 135);
            border-radius: 10px;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
            text-align: center;
            margin-top: 60px;
        }

        .container1 {
            background-color: rgb(23, 107, 135);
            border-radius: 10px;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
            text-align: center;
            margin-top: 60px;
            transition: transform 0.3s ease;
        }

        .container1:hover {
            transform:scale(1.2);
        }   

        .cont{
            background-color: rgb(23, 107, 135);
            border-radius: 10px;
            border: 1px solid rgb(23, 107, 135);
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            
            width: 400px;
            margin: 0 auto;
            text-align: left;
            margin-top: 60px;

        }

        .container h3 {
            color: rgb(218, 255, 251);
        }

        label,
        input {
            display: block;
            margin: 10px -10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            
            border: 1px solid rgb(23, 107, 135);
            
            
            border-radius: 5px;
        }

        button {
            background-color: rgb(100, 204, 197);
            color: rgb(4, 54, 74);
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            
        }

        button:hover {
            background-color: rgb(4, 54, 74);
            color: rgb(218, 255, 251);
        }

        .cancelbtn {
            background-color: rgb(218, 255, 251);
            color: rgb(4, 54, 74);
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .cancelbtn:hover {
            background-color: rgb(4, 54, 74);
            color: rgb(218, 255, 251);
        }
    </style>
</head>

<body>
    <?php
    include("php/connect.php");

    if (isset($_POST['submit'])) {
        $email = $_POST['uemail'];
        $password = $_POST['psw'];

        // Verify user credentials
        $result = mysqli_query($con, "SELECT email, pass FROM users WHERE email = '$email'");
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            if ($password === $row['pass']) {
                // Password matches, user is authenticated
                echo "<div class='container'><center><p>Login successful. Welcome!</p></center></div>";
                header("Location:index1.php");
            } else {
                echo "<div class='container'><p>Incorrect password. Please try again.</p></div>";
            }
        } else {
            echo "<div class='container'><p>Email not found. Please register.</p></div>";
        }
    }
    ?>

    <div id="id01" class="modal">
        <form class="modal-content animate" action="login.php" method="post">
            <div class="container1">
                <center>
                    <h3>Login page</h3>
                </center>
            </div>

            <div class="cont" style="background-color: #DAFFFB">
                <label for="uemail"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="uemail" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <center><button type="submit" name="submit">Login</button></center>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="location.href='index1.php'" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>
</body>

</html>