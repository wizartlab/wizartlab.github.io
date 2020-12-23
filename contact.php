<?php
// Contact subject
$subject = 'new message'; 
// Details
$message=$_POST['message'];

// Mail of sender
$mail_from=$_POST['email']; 
// From 
$header="from: ".$_POST['name']." <".$_POST['email'].">";

// Enter your email address
$to ="jasirfayaspb@gmail.com";

$send_contact=mail($to,$subject,$message,$header);

// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
    header('Location: index.html'); 
}    
else {
echo "ERROR";
}
?>