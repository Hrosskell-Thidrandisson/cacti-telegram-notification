<?php
	/*Telegram notification for cacti. Find admin_email function, send_mail line (/cacti/lib/functions.php about 4551 line) and instert*/
	$TG_apiToken = "your token";
	$TG_chatid ="your chat id";
	/*$TG_text=$message;  */
	$TG_text="testing"; 
	$response = file_get_contents("https://api.telegram.org/bot$TG_apiToken/sendMessage?chat_id=$TG_chatid&text=$TG_text");
    
?>

<html>
<body>   
 
</body>
</html>
