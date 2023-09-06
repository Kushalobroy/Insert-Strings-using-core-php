<?php
require "config.php";
if ($_GET) {
    $id = $_GET['id'];
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = $_REQUEST['string'];
    $insert = "INSERT into data VALUES(DEFAULT,'$data','$id')";
    $res = $mysqli->query($insert);
}

$lists = "SELECT * FROM data WHERE userid={$id}";
$result = $mysqli->query($lists);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home Page</title>
</head>

<body>
    <div class="container">
        <div>
            <h2 class="text-center mt-5 fw-1">Home Page</h2>
        </div>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add String
        </button>

        <!-- Modal -->
        <div class="modal fade modal-dialog modal-dialog-centered" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Strings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="form-outline mt-3 mb-3">
                                <input type="text" class="form-control" name="string" id="" placeholder="Input Strings (eg. Apple, Google, Tesla...)">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>String List</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $arr = array();
                        while ($row = mysqli_fetch_assoc($result)) {
                            $arr[] = $row;
                        }
                        foreach ($arr as $arr) {
                        ?>
                            <tr>
                                <td><?php echo $arr['string']; ?> </td>
                            </tr>
                        <?php

                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>