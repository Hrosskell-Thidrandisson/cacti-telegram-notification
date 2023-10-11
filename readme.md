Telegram
- Create new bots with BotFather
- Create new group
- add new bot as administrator new group
- get Token bot
- get ID group

Save as telegram.php to your site.

Update $TG_apiToken, and $TG_chatid in telegram.php

Write custom text message in variable $TG_text. 

Test is http://yoursite/yourpath/telegram.php

Find admin_email funtion in yourpath/cacti/lib/funtions.php (about 4551 line)

Insert code after send_email.......; line

	$TG_apiToken = "your telegram token";
	$TG_chatid ="your chat id";
	$TG_text=$message;
	$response = file_get_contents("https://api.telegram.org/bot$TG_apiToken/sendMessage?chat_id=$TG_chatid&text=$TG_text");
