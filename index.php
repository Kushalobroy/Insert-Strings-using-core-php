<?php
require "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    $login = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
    $res = $mysqli->query($login);
    if (mysqli_num_rows($res) === 1) {
        $row = mysqli_fetch_assoc($res);
        if ($row['email'] === $email && $row['password'] === $pass) {
            echo "Logged in !";
            $id = $row['id'];
            header("Location: home.php?id=" . $id);
        } else {
            header("Location:index.php?error=Incorrect email or Password");
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div>
            <h2 class="text-center mt-5 fw-1">Login</h2>
        </div>
        <div class=" d-flex aligns-items-center justify-content-center">

            <form class="" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form2Example1" class="form-control" name="email" />
                    <label class="form-label" for="form2Example1">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="form2Example2" class="form-control" name="password" />
                    <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- Submit button -->
                <button type=submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="./register.php">Register</a></p>
                </div>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>