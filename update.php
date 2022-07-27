<?php
require_once "db_connect.php";

$book_library = $_GET["id"];
$sql = "SELECT * FROM book_library WHERE id = $book_library";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

//$sql = "INSERT INTO `book_libary`(`author_first_name`, `author_last_name`, `id`, `image`, `isbn`, `publisher_Adress`, `publisher_name`, `publish_date`, `short_description`,`status`, `title`, `type`,)
if (isset($_POST["submit"])) {

    $title = $_POST["title"];
    $image = $_POST["image"];
    $isbn = $_POST["isbn"];
    $short_description = $_POST["short_description"];
    $type = $_POST["type"];
    $author_first_name = $_POST["author_first_name"];
    $author_last_name = $_POST["author_last_name"];
    $publisher_name = $_POST["publisher_name"];
    $publisher_address = $_POST["publisher_address"];
    $publish_date = $_POST["publish_date"];
    $status = $_POST["status"];

    $sql = "UPDATE `book_library`, SET `title`='[$title]',`image`='[$image]',`isbn`='[$isbn]',`short_description`='[$short_description]',`type`='[$type]',`author_first_name`='[$author_first_name]',`author_last_name`='[$author_last_name]',`publisher_name`= '[$publisher_name]',`publisher_address`='[$publisher_address]',`publish_date`='[publish_date]',`status`='[$status]' 
    
    WHERE 1, WHERE id = $book_library";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "book_library has been updated";
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

        <input type="text" name="id" value="<?php echo $row["id"] ?>">
        <input type="text" name="title" value="<?php echo $row["title"] ?>">
        <input type="image" name="image" value="<?php echo $row["image"] ?>">
        <input type="number" name="isbn" value="<?php echo $row["isbn"] ?>">
        <input type="text" name="short_description" value="<?php echo $row["short_description"] ?>">
        <input type="text" name="type" value="<?php echo $row["type"] ?>">
        <input type="text" name="author_first_name" value="<?php echo $row["author_first_name"] ?>">
        <input type="text" name="author_last_name" value="<?php echo $row["author_last_name"] ?>">
        <input type="text" name="publisher_name" value="<?php echo $row["publisher_name"] ?>">
        <input type="text" name="publisher_address" value="<?php echo $row["publisher_address"] ?>">
        <input type="text" name="publish_date" value="<?php echo $row["publish_date"] ?>">
        <input type="text" name="status" value="<?php echo $row["status"] ?>">
        <input type="submit" name="submit" value="Update">

    </form>
</body>

</html>