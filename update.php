<?php
require_once "db_connect.php";

$animal_id = $_GET["animal_id"];
$sql = "SELECT * FROM animal WHERE animal= $animal";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

//$sql = "INSERT INTO `book_libary`(`author_first_name`, `author_last_name`, `id`, `image`, `isbn`, `publisher_Adress`, `publisher_name`, `publish_date`, `short_description`,`status`, `title`, `type`,)
if (isset($_POST["submit"])) {

    $animal_id = $_POST["animal_id"];
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


    $sql = "UPDATE `animal`, SET `animal_id`='[$animal_id]',`name`='[$name]',`age`='[$age]',`kind`='[$kind]',`description`='[$description]',`size`='[$size]',`vaccinated`='[$vaccinated]',`breed`= '[$breed]',`adopted`='[$adopted]',`available`='[available]',`picture`='[$picture]' 
    

     WHERE animal_id = $animal_id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "animal has been updated";
        header("refresh:3;url= index.php");
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

        <input type="text" name="animal_id" value="<?php echo $row["animal_id"] ?>">
        <input type="text" name="name" value="<?php echo $row["name"] ?>">

        <input type="number" name="age" value="<?php echo $row["age"] ?>">
        <input type="text" name="kind" value="<?php echo $row["kind"] ?>">
        <input type="text" name="description" value="<?php echo $row["description"] ?>">
        <input type="number" name="size" value="<?php echo $row["size"] ?>">
        <input type="text" name="vaccinated" value="<?php echo $row["vaccinated"] ?>">
        <input type="text" name="breed" value="<?php echo $row["breed"] ?>">
        <input type="text" name="adopted" value="<?php echo $row["adopted"] ?>">
        <input type="text" name="available" value="<?php echo $row["available"] ?>">
        <input type="picture" name="picture" value="<?php echo $row["picture"] ?>">
        <input type="submit" name="submit" value="Update">

    </form>

</body>

</html>