<?php
$to="mishra.siddhant003@gmail.com";
$subject="Response form website";
$message="i am very thankful to you";
$header="from: mishra.adarsh2111@gmail.com";


if(mail($to, $subject, $message, $header)){
	echo "Mail send successfuly";
}
else{
	echo "cannot send mail";
}

?>
