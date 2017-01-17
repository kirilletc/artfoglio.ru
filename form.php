<?
if (isset($_POST['author'])) {$author = $_POST['author'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['tel'])) {$tel = $_POST['tel'];}
if (isset($_POST['text'])) {$text = $_POST['text'];}

if (empty($author))
{
echo "<b>Не указано имя!<p>";
echo "<a href=contact.html>Вернуться к заполнению формы</a>";
exit;
} 
else 
if (empty($email))
{
echo "<b>Не указан e-mail!<p>";
echo "<a href=contact.html>Вернуться к заполнению формы</a>";
exit;
}
else 
if (empty($tel))
{
echo "<b>Контактный телефон не указан!<p>";
echo "<a href=contact.html>Вернуться к заполнению формы</a>";
exit;
}
else 
if (empty($text))
{
echo "Сообщение не написано!<p>";
echo "<a href=contact.html>Вернуться к заполнению формы</a>";
exit;
}
else
$kuda='info@artfoglio.ru';//куда отправлять почту?
$zagolovok='CООБЩЕНИЕ С САЙТА ARTFOGLIO.RU';
$headers='Content-type: text; charset="utf-8"';
$message = "Имя пославшего: $author \nЭлектронный адрес: $email \nТелефон: $tel\nСообщение: $text";
$send = mail ($kuda, $zagolovok, $message, $headers);
if ($send == 'true')
{
echo "<b>Спасибо за отправку вашего сообщения!<p>";
echo "<a href=index.html>Нажмите,</a> чтобы вернуться на главную страницу";
}
else 
{
echo "<p><b>Ошибка. Сообщение не отправлено!";
}
?>
</body>
</html>
