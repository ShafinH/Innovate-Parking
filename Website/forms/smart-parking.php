<?php 


if(isset($_POST['submit'])){
    $to = $_POST['email']; // this is your Email address
    $from = "shafin1025@gmail.com"; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Parking lot Availability";
    $message = "Hi, a spot(s) at your selected parking location has opened!";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
	
    mail($to,$subject,$message,$headers);
    }
	
?>