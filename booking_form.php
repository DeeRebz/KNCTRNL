<?php 

//if(isset($_POST['submit'])){
    $mail_to = "diane.rebisz@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Booking Request";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    
    $body_message = 'From: '.$name."\n";
    $body_message .= 'Email: '.$email."\n";
    $body_message .= 'Number: '.$number."\n";
    $body_message .= 'Message: '.$message."\n";
    
    $headers = "From: $name\r\n";
    
	$mail_status = mail($mail_to, $subject, $body_message, $headers);    

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thanks! We will contact you soon.');
		
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to info@KNCTRNL.com');
	</script>
<?php
}

?>

