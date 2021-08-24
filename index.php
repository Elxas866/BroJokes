<?php

//include connect file
include('config/db_connect.php');


//write query for all jokes
$sql = 'SELECT nickname, joke FROM jokes';

//make query & get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$jokes = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BroJokes</title>
</head>
<body>

    <div class="topButtons">
        <div>
            <button id="Button" onclick="ToggleDarkmode()">Dark/Light</button>
        </div>
        <h4 class="logo">BJ</h4>
        <div>
            <button id="Button" onclick="postJoke()">Post your joke</button>
        </div>
    </div>

    
    <h1 class="header">BroJokes</h1>
    <div class="main">
        <div class="row">

            <?php foreach($jokes as $joke){ ?>

                <div id="joke">
                        <div class="card-content center">
                            <h5><?php echo htmlspecialchars($joke['nickname']); ?></h5>
                            <div><?php echo htmlspecialchars($joke['joke']);  ?></div>
                        </div>
                </div>

            <?php } ?>


        </div>
    </div>
    <div class="godown">
        <a href="#newest"><img id="arrowDown" src="./assets/arrow_down.png" alt="arow down"></a>
    </div>
    <div id="newest"></div>


    <script src="script.js"></script>
</body>
</html>