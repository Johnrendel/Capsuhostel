<?php

include 'config.php';

$id = $_GET['id'];

$deletesql = "DELETE FROM webbooking WHERE id = $id";

$result = mysqli_query($conn, $deletesql);

header("Location:index.php");

?>