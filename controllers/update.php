<?php
include_once '../database/gobal-db-config.php';
if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}
echo 'connection Successfull';
$id=$_GET['id'];
$title = $_POST['title'];
$textarea = $_POST['textarea'];
if (count($_POST) > 0) {
    mysqli_query($conn, "UPDATE web SET title='" . $_POST['title'] . "',textarea='" . $_POST['textarea'] . "' WHERE id= '" . $_GET['id'] . "'");
    $message = "";
    header("refresh:1;url=../public/list.php");
}
$result = mysqli_query($conn, "SELECT * FROM web WHERE id= '" . $_GET['id'] . "'");
$row = mysqli_fetch_array($result);
?>