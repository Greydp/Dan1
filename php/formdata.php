<?php

$result = mail ("osgo_dp@ukr.net","От osgo.dp.ua","Получено сообщение от $_POST[fio] \ne-mail $_POST[email] \nТекст сообщения $_POST[text1]");

if ("result") {echo "Ваше сообщение успешно отправлено";}
else {echo "Ошибка ! Сообщение не отправлено !";}
header("Refresh: 3;URL=http://www.osgo.dp.ua/content/kontakt.html");

?>