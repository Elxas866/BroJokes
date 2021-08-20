<?php	

//include connect file
include('config/db_connect.php');

//create variables
$nickname = $_POST['nickname'];
$joke = $_POST['joke'];

$nickname = mysqli_real_escape_string($conn, $_POST['nickname']);
$joke = mysqli_real_escape_string($conn, $_POST['joke']);

//crate sql
$sql = "INSERT INTO jokes(nickname, joke) VALUES('$nickname', '$joke')";

//save to db
if(mysqli_query($conn, $sql)){
    //success
    //redirect to index page if done
    header('Location: index.php');
} else {
    //error
    echo 'query error: ' . mysqli_error($conn);
}