<?php	

//include connect file
include('config/db_connect.php');

//check if there
if(empty($_POST['nickname']) or empty($_POST['joke'])) {
    echo 'Bitte fülle alles aus!';
} else {
    //create variables
    $nickname = $_POST['nickname'];
    $joke = $_POST['joke'];

    $nickname = mysqli_real_escape_string($conn, $_POST['nickname']);
    $joke = mysqli_real_escape_string($conn, $_POST['joke']);

    //crate sql
    $sql = "INSERT INTO jokes_de(nickname, joke) VALUES('$nickname', '$joke')";

    //save to db
    if(mysqli_query($conn, $sql)){
        //success
        //redirect to index page if done
        header('Location: index_de.php');
    } else {
        //error
        echo 'query error: ' . mysqli_error($conn);
    }
}