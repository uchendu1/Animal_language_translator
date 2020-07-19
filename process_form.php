
<?php
include_once('connect.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sql = "INSERT INTO `language-translator`(`id`, `email`, `created_at`) VALUES ('','".$_POST['email']."','')";
    if(mysqli_query($conn, $sql)){
    	$to = $_POST['email'];
		$subject = "Pet Language Translator Early Access";
		$txt = "You just sign up for early access! Thanks.";
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <lindatochukwu30@gmail.com>' . "\r\n";
		if (mail($to,$subject,$txt,$headers)) {
			 echo "<script>alert('You have successfully signed up.')</script>";
		}
		       
    }else{
        die('Error capturing mail');
    }
}
