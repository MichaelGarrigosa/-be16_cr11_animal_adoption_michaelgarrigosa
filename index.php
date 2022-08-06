<!DOCTYPE html>
<?php
require_once "db_connect.php";

$sql = "SELECT * FROM `animal`";
$result = mysqli_query($conn, $sql);
$body = "";
//$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);mysqli_fetch_assoc()
if (mysqli_num_rows($result) == 0) {
    $body = "No results";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        // $picture = "image/" . $row['picture'];
        // var_dump($picture);
        $body .= "<div class='card' style='width: 18rem;'>
  <div class='card-body'>
  <h5 class='card-title'> {$row["name"]} {$row["age"]} {$row["kind"]} {$row["description"]}</h5>
  {$row["size"]} {$row["vaccinated"]} {$row["breed"]} {$row["adopted"]}  {$row["available"]}


  <p class='card-text'>{$row["name"]}</p>;
  <p class='card-text'>{$row["age"]}</p>;
  <p class='card-text'>{$row["kind"]}</p>;
  <p class='card-text'>{$row["description"]}</p>;
  <p class='card-text'>{$row["size"]}</p>;
  <p class='card-text'>{$row["vaccinated"]}</p>;
  <p class='card-text'>{$row["breed"]}</p>;
  <p class='card-text'>{$row["adopted"]}</p>;
  <p class='card-text'>{$row["available"]}</p>;
  <p class='card-text'><img src='image/{$row["picture"]}' width='100%'></p>;
    
  
  <a href='details.php?animal={$row["animal_id"]}' class='btn btn-primary'>Details</a>
  <a href='update.php?animal={$row["animal_id"]}' class='btn btn-warning'>Update</a>
  <a href='delete.php?animal={$row["animal_id"]}' class='btn btn-danger'>Delete</a>
  </div>
</div>";
    }
}
// <img src='BE16_cr11_animal_adoption_michaelgarrigosa/-be16_cr11_animal_adoption_michaelgarrigosa/image/{$row['picture']}' alt='...'>

mysqli_close($conn);
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