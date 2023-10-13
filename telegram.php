<?php
/*Telegram notification for cacti. 
 
 Insert function send_telegram to /cacti/lib/functions.php and /cacti/plugin/monitor/poller.php

 in /cacti/lib/functions.php find admin_email function and after send_mail line (about line 4551) insert send_telegram($message);

 in plugin/monitor/poller.php find process_reboot_email function after process_send_email line (about line 390) instert: send_telegram($status . ' ' . $toutput);
 and process_email funtions after process_send_email line (about line 568) insert: send_telegram($status . ' ' . $toutput); */


send_telegram("hi world");

function send_telegram($tg_text){
	
	$TG_apiToken = "6516941144:AAEbB3sJOiz3iTIEwzzkhIZzZMQphk6yVa0"; /* your telegram apiToken*/
	$TG_chatid ="-4020774188"; /* your telegram chatid*/
	$TG_message=$tg_text; 
	$response = file_get_contents("https://api.telegram.org/bot$TG_apiToken/sendMessage?chat_id=$TG_chatid&text=$TG_message");
}    
?>

<html>
<body>   
 
</body>
</html>
