<?php
require_once "db_connect.php";

if (isset($_POST["submit"])) {
    //$first_name = $_POST["first_name"];
    //$last_name = $_POST["last_name"];
    //$email = $_POST["email"];

    $id = $_POST["id"];
    $title = $_POST["title"];
    $image = $_POST["image"];
    $isbn = $_POST["isbn"];
    $short_description = $_POST["short_description"];
    $type = $_POST["type"];
    $author_first_name = $_POST["author_first_name"];
    $author_last_name = $_POST["author_last_name"];
    $publisher_name = $_POST["publisher_name"];
    $publisher_Adress = $_POST["publisher_address"];
    $publish_date = $_POST["publish_date"];
    $status = $_POST["status"];

    $sql = "INSERT INTO `id`(`title`,`image`,`isbn`, `short_description`, `type`,`author_first_name`, `author_last_name`, `publisher_name`, `publisher_adress`, `publish_date`, `status`,) VALUES (`$title`, `$image`, `$isbn`, `$short_description`, `$type`,`$author_first_name`, `$author_last_name`, `$publisher_name`,`$publisher_address`, `$publish_date`, `$status`)";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "book_library has been created";
    } else {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">

        <input type="text" name="id">
        <input type="text" name="title">
        <input type="image" name="image">
        <input type="number" name="isbn">
        <input type="number" name="short_discription">
        <input type="text" name="author_first_name">
        <input type="text" name="author_last_name">
        <input type="text" name="publisher_name">
        <input type="text" name="publisher_address">
        <input type="number" name="publisher_date">
        <input type="text" name="status">
        <input type="text" name="type">
        <input type="submit" name="submit" value="Update">


    </form>
</body>

</html>