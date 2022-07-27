<?php
require_once "db_connect.php";

if (isset($_GET["status"])) {
    $status = $_GET["status"];

    $sql = "SELECT * FROM book_library WHERE status = '$status'";
    $result = mysqli_query($conn, $sql);
    $body = "";
    if (mysqli_num_rows($result) == 0) {
        $body = "No results";
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $body .= "<div class='card' style='width: 18rem;'>
                <div class='card-body'>
                <h5 class='card-title'> {$row["title"]} {$row["author_first_name"]} </h5>
                <p class='card-text'>{$row["author_last_name"]}</p>
                <p class='card-text'>{$row["isbn"]}</p>
                <p class='card-text'>{$row["image"]}</p>;
                <p class='card-text'>{$row["short_description"]}</p>;
                <p class='card-text'>{$row["type"]}</p>;
                <p class='card-text'>{$row["publisher_name"]}</p>;
                <p class='card-text'>{$row["publisher_address"]}</p>;
                <p class='card-text'>{$row["publish_date"]}</p>;
                <p class='card-text'>{$row["status"]}</p>;                    
                <a href='details.php?id={$row["id"]}' class='btn btn-primary'>Details</a>
                <a href='update.php?id={$row["id"]}' class='btn btn-warning'>Update</a>
                <a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a>
                </div>
            </div>";
        }
    }
} else {

    $sql = "SELECT * FROM book_library";
    $result = mysqli_query($conn, $sql);
    $body = "";
    if (mysqli_num_rows($result) == 0) {
        $body = "No results";
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $body .= "<div class='card' style='width: 18rem;'>
            <div class='card-body'>
            <h5 class='card-title'> {$row["title"]} {$row["author_first_name"]} </h5>
                    <p class='card-text'>{$row["author_last_name"]}</p>
                    <p class='card-text'>{$row["isbn"]}</p>
                    <p class='card-text'>{$row["image"]}</p>;
                    <p class='card-text'>{$row["short_description"]}</p>;
                    <p class='card-text'>{$row["type"]}</p>;
                    <p class='card-text'>{$row["publisher_name"]}</p>;
                    <p class='card-text'>{$row["publisher_address"]}</p>;
                    <p class='card-text'>{$row["publish_date"]}</p>;
                    <p class='card-text'>{$row["status"]}</p>;                    
                    <a href='details.php?id={$row["id"]}' class='btn btn-primary'>Details</a>
                    <a href='update.php?id={$row["id"]}' class='btn btn-warning'>Update</a>
                    <a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a>
                
                
                    </div>
            </div>";
        }
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <a href="create.php">Create User</a>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="filter.php">All</a></li>
            <li><a class="dropdown-item" href="filter.php?status=admin">Admin</a></li>
            <li><a class="dropdown-item" href="filter.php?status=user">User</a></li>
        </ul>
    </div>

    <hr>
    <div class="container">
        <div class="row rows-col-lg-4 rows-col-md-2 rows-col-sm-1">
            <?= $body ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>