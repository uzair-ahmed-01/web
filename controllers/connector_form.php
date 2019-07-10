<?php

include_once '../database/gobal-db-config.php';
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}
echo 'connection Successfull';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $textarea = $_POST['textarea'];

    $query = "INSERT INTO web(title,textarea) VALUES('$title','$textarea')";
    if (mysqli_query($conn, $query)) {
        echo "records saved successfully";
    } else {
        echo 'not saved';
    }
    header("location:../public/list.php", 301);
}
?>