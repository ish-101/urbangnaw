<?php

error_reporting(0);


if (($_POST['email'] != "" && $_POST['name'] != "" && $_POST['rating']) && (($_POST['rating'] >= 1) && ($_POST['rating'] <= 5)))
{

	require 'mail.php';


	$name = $_POST['name'];
	$email = $_POST['email'];
	$rating = $_POST['rating'];
	if ($_POST['description'])
	{
		$description = $_POST['description'];
	}
	else
	{
		$description = "";
	}


	$to = "ishpreet2000@gmail.com";

	$subject = "Gnaw Review - " . $name . " - " . $rating . "/5";

	$message = "<b>Name: </b>" . $name .
				"<br/><b>E-Mail: </b>" . $email .
				"<br/><b>Rating: </b>" . $rating . "/5" .
				"<br/><br/>" . $description;

	ishmail($to, $email, $subject, $message);

	


	$temp = $to;
	$to = $email;
	$email = $temp;

	$subject = "Thanks for the Review - Gnaw";

	$message = "Hi " . $name . "!<br/><br/>" .
				"I am Ishpreet from Gnaw. Thanks for reviewing us.<br/>" .
				"You rated us " . $rating . " out of 5.<br/>";
	if ($rating < 3)
	{
		$message .= "Sorry, your bad experience and I hope you didn't rate us so low just because I sent you food memes instead of real food, since this is just a demo website.<br/>";
	}
	else
	{
		$message .= "Thanks for the great rating.<br/>";
	}

	$message .= "This was a bot message, and I'll reply to you soon. I might even put your review in the Testimonials if you allow me to.<br/><br/>" .
				"Regards,<br/>" . 
				"Ishpreet Singh Bhasin<br/>" .
				"CEO, Gnaw";

	ishmail($to, $email, $subject, $message);



}
else
{
	echo "h@x";
}

?>