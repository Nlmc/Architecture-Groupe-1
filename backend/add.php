<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("class.php");
include_once("validation.php");

$crud = new Crud();
// $validation = new Validation();

if(isset($_POST['num']) && isset($_POST['annee']) && isset($_POST['region']) && isset($_POST['image'])) {

  $num = $crud->escape_string($_POST['num']);
  $annee = $crud->escape_string($_POST['annee']);
  $region = $crud->escape_string($_POST['region']);
  $image = $crud->escape_string($_POST['image']);
  var_dump($num, $annee, $region, $image);
  $crud->execute("INSERT INTO archi(num,annee,region,image)
  VALUES($num, $annee, $region, $image)");

//display success message
  echo "<font color='green'>Data added successfully.";
  echo "<br/><a href='index.php'>View Result</a>";
    // }
  } else {
  echo "No data </br> <a href=index.php>Home</a>";

}
?>
</body>
</html>
