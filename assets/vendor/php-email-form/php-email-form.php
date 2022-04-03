<?php 
if(isset($_POST['submit'])){
    $to = "niteshsaini2402@gmail.com"; // this is your Email address
    $from_email = $_POST['email']; // this is the sender's Email address
    $from_name = $_POST['name'];
    $subject = $_POST['subject']
    $message = $from_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from_email;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>