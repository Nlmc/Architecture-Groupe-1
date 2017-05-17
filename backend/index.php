<?php
require_once 'database.php';
require_once 'class.php';
?>

<html>
<head>
    <title>Back Office</title>
</head>

<body>
    <br/><br/>
<?php

    $crud = new Crud();

    $query = "SELECT `id`, `num`, `annee`, `region`, `image` FROM `archi` ";
    $result = $crud->getData($query);
    // var_dump($result); ?>

    <table width='80%' border=0>

        <tr bgcolor='#CCCCCC'>
            <td>Numero</td>
            <td>Année</td>
            <td>Région</td>
            <td>Couverture</td>
        </tr>

    <?php foreach ($result as $key => $res) {
         echo "<tr>";
         echo "<td>".$res['num']."</td>";
         echo "<td>".$res['annee']."</td>";
         echo "<td>".$res['region']."</td>";
         echo "<td>".$res['image']."</td>";
         echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
         echo "<br/>";
     }
     ?>
   </table>

   <h2>Ajouter un Magazine</h2>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Numero</td>
                <td><input type="text" name="num"></td>
            </tr>
            <tr>
                <td>Anneée</td>
                <td><input type="text" name="annee"></td>
            </tr>
            <tr>
                <td>Région</td>
                <td><input type="text" name="region"></td>
            </tr>
            <tr>
                <td>Couverture</td>
                <td><input type="text" name="image"></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>
