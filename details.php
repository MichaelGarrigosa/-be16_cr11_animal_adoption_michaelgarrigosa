<?php
require_once "db_connect.php";

$id = $_GET["id"];
$sql = "select * from book_library where id = $id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);


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
    <div class='card' style='width: 18rem;'>
        <div class='card-body'>
            <h5 class='card-title'><?= "{$row["author_first_name"]} {$row["author_last_name"]}" ?></h5>
            <p class='card-text'>
                <?= $row["image"] . " | " . $row["isbn"] . " | " . $row["publisher_address"] . " | " . $row["author_first_name"] . " | " . $row["publish_date"] . " | " . $row["short_description"] . " | " . $row["status"] . " | " . $row["title"] . " | " . $row["type"] ?>
            </p>
            <a href='update.php?id=<?= $row["id"] ?>' class='btn btn-warning'>Update</a>
            <a href='delete.php?id=<?= $row["id"] ?>' class='btn btn-danger'>Delete</a>


        </div>
    </div>
</body>

</html>