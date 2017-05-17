<?php
include_once("class.php");

$crud = new Crud();

if(isset($_POST['num']) && isset($_POST['annee']) && isset($_POST['region']) && isset($_POST['image']))
{
    $id = $crud->escape_string($_POST['id']);
    $num = $crud->escape_string($_POST['num']);
    $annee = $crud->escape_string($_POST['annee']);
    $region = $crud->escape_string($_POST['region']);
    $image = $crud->escape_string($_POST['image']);
    $sql = "UPDATE archi SET num='$num',annee='$annee',region='$region' WHERE id=$id";
    var_dump($sql);
    $result = $crud->execute("UPDATE archi SET num=$num,annee=$annee,region=$region WHERE id=$id");

    echo "<a href=index.php>home</a>";
}
