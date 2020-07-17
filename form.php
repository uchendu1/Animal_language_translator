


 <?php
$conn = mysquli_connect('localhost', 'linda', 'test1234','language-translator' );
 
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}

$sql = 'SELECT id, email FROM animal_languagea-translator';
$result = mysqli_query($conn, $sql);
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysql_free_result($result);

mysql_close($conn);
print_r($pizzas);

?>


<?php
$data = json_decode(file_get_contents('php://input'), true);
$email =  $data['email'];

// create database connection and insert data

// Send an email to that email address

echo "Thanks for signing up, check your email for updates"

?>





