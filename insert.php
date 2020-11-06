<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=php_exercise; host=localhost;", "root", "mysql");

$pdo->exec("insert into contactform(name, mail, age, comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");
?>


<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style_mail_confirm.css">
		<title>お問い合わせフォームを作る</title>
	</head>

	<body>
		<h1>お問い合わせフォーム</h1>
		
		<div class="confirm">
			<p>お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
			</p>
		</div>
	</body>
</html>