<?php

include("../infra/db/connect.php");
include("../public/component/verificacao.php");


$id = $_GET["id"];

$sql = "DELETE FROM usuario WHERE id = $id ";

if ($conn->query($sql) === TRUE) {
    header("Location: home.php");
    exit();
} else {
    echo "<script> alert('Deu errado!');</script>";
    header("Location: home.php");
    exit();
}