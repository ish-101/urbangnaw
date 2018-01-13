<?php

error_reporting(0);



if ($_POST['email'] != "" && $_POST['cost'] > 0)
{

	require 'mail.php';


	$email = $_POST['email'];
	$cost = $_POST['cost'];
	$to = "ishpreet2000@gmail.com";

	$subject = "Gnaw Order - " . $email . " - Rs." . $cost;

	$message = 	"<b>E-Mail: </b>" . $email .
				"<br/><b>Cost: </b>" . $cost;

	ishmail($to, $email, $subject, $message);	


	$temp = $to;
	$to = $email;
	$email = $temp;

	$subject = "Order Placed - Gnaw";

	$message = "Your Order worth Rs." . $cost . " was placed. But as this is just a demo website, we won't be able to deliver your food. Don't worry, here's Rs." . $cost . " worth of food memes.<br/><br/><img src='http://ang.is-best.net/memes/meme1.jpg'><br/><img src='http://ang.is-best.net/memes/meme2.jpg'>";

	ishmail($to, $email, $subject, $message);



}
else
{
	echo "h@x";
}

?>