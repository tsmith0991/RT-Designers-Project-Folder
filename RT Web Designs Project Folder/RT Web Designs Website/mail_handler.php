<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Amatic+SC|Fascinate+Inline|Pacifico|Permanent+Marker|Shadows+Into+Light');
	@import url(https://fonts.googleapis.com/css?family=Lato:100,300,400);
	p{
	font-family: 'Lato', sans-serif;
	color: #f4f4f4;
	text-shadow: 2px 2px 4px #000000;
	font-size: 16px;
	}
</style>
<p>
	<?php
	if( isset($_POST['name']) && isset($_POST['company']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['msg']) ){
		$name = $_POST['name']; // HINT: use preg_replace() to filter the data
		$company = $_POST['company'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$msg = nl2br($_POST['msg']);
		$to = "info@rtwebdesigners.com";	
		$from = $email;
		$subject = 'Contact Form Message';
		$message = '<b>Name:</b> '.$name.' <br><b>Company:</b> '.$company.' <br><b>Email:</b> '.$email.' <br><b>Phone:</b> '.$phone.' <p>'.$msg.'</p>';
		$headers = "From: $from\n";
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		if( mail($to, $subject, $message, $headers) ){
		echo "Thank You $name, your message has been sent, we will contact you within 24 hours.";
		} else {
		echo "The server failed to send the message. Please try again later.";
		}
	}
	?>
</p>