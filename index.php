<?php

//include connect file
include('config/db_connect.php');


//write query for all jokes
$sql = 'SELECT nickname, joke FROM jokes';

//make query & get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$jokes = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($jokes);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BroJokes</title>
</head>
<body>
    <div id="postJokeBTNDiv">
        <button id="postJokeBTN" onclick="postJoke()">Post your joke</button>
    </div>
    <h1 class="header">BroJokes</h1>
    <div class="main">
        <div id="joke">
            <h3>nickname</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ex suscipit dicta excepturi impedit alias.</p>
        </div>
        <div id="joke">
            <h3>nickname</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ex suscipit dicta excepturi impedit alias.</p>
        </div>
        <div id="joke">
            <h3>nickname</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ex suscipit dicta excepturi impedit alias.</p>
        </div>
        <div id="joke">
            <h3>nickname</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ex suscipit dicta excepturi impedit alias.</p>
        </div>
        <div id="joke">
            <h3>nickname</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ex suscipit dicta excepturi impedit alias.</p>
        </div>
    </div>
</body>
</html>