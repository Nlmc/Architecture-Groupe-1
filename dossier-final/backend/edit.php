<?php
// including the database connection file
include_once("class.php");

$crud = new Crud();

//getting id from url
$id = $crud->escape_string($_GET['id']);

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM archi WHERE id=$id");

foreach ($result as $res) {
    $num = $res['num'];
    $annee = $res['annee'];
    $region = $res['region'];
    $image = $res['image'];
}
?>
<html>
<head>
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="form1" method="post" action="editaction.php">
        <table border="0">
            <tr>
                <td>Numero</td>
                <td><input type="text" name="num" value="<?php echo $num;?>"></td>
            </tr>
            <tr>
                <td>Année</td>
                <td><input type="text" name="annee" value="<?php echo $annee;?>"></td>
            </tr>
            <tr>
                <td>Region</td>
                <td><input type="text" name="region" value="<?php echo $region;?>"></td>
            </tr>
            <tr>
                <td>Couverture</td>
                <td><input type="text" name="image" value="<?php echo $image;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
