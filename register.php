<?php
require "config.php";
if($_SERVER["REQUEST_METHOD"]==="POST"){
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
$password = $_REQUEST['password'];

$insert = "INSERT into user VALUES(DEFAULT,'$name','$email','$password')";
$res = $mysqli->query($insert);
if($res){
    echo "Registered Successfully";
}
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register</title>
</head>
<body>
<div class="container">
        <div>
            <h2 class="text-center mt-5 fw-1">Register</h2>
        </div>
        <div class=" d-flex aligns-items-center justify-content-center">
                
                <form class="" method="post">
                    <!--Name Input-->
                    <div class="form-outline mb-4">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                        <label for="form-label">Name</label>
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example1" class="form-control" name="email" placeholder="Email"/>
                      <label class="form-label" for="form2Example1">Email address</label>
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example2" class="form-control" name="password" placeholder="Password"/>
                      <label class="form-label" for="form2Example2">Password</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
                  
                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>Already Registered<a href="./index.php">Login</a></p>
                    </div>
                  </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>