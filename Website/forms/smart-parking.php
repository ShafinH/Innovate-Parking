<?php 


if(isset($_POST['submit'])){
    $to = $_POST['email']; 
    $from = "shafin1025@gmail.com"; 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Parking lot Availability";
    $message = "Hi, a spot(s) at your selected parking location has opened!";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
	
    mail($to,$subject,$message,$headers);
    }
	
?>