<?php
$conn = mysqli_connect('localhost', 'linda', 'test1234','animal-language-translator' );
//  $date = date_format('Y-m-d h:i:s', );
if(!$conn){
    die('connection error: ' . mysqli_connect_error());
}

?>