<?php

//opens a new file to write
$data_file = fopen("jokes.txt", "w");

$nickname = $_POST["nickname"];
$joke = $_POST["joke"];
$text_to_write = $nickname . " " . $joke;

//Write data to server side file
fwrite($data_file, $text_to_write);
fclose($data_file);