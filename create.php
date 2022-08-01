<?php
require_once "db_connect.php";

if (isset($_POST["submit"])) {
    //$first_name = $_POST["first_name"];
    //$last_name = $_POST["last_name"];
    //$email = $_POST["email"];

    $animal = $_POST["animal"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $kind = $_POST["kind"];
    $description = $_POST["description"];
    $size = $_POST["size"];
    $vaccinated = $_POST["vaccinated"];
    $breed = $_POST["breed"];
    $adopted = $_POST["adopted"];
    $available = $_POST["available"];
    $picture = $_POST["picture"];


    $sql = "INSERT INTO `animal`(`name`,`age`,`kind`, `description`, `size`,`vaccinated`, `breed`, `adopted`, `available`, `picture`) VALUES (`$name`, `$age`, `$kind`, `$description`, `$size`,`$vaccinated`, `$breed`, `$adopted`,`$available`)";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        echo "animal has been created";
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