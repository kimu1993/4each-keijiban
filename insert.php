<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","root");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
        values(
        '".$_POST['handlename']."',
        '".$_POST['title']."',
        '".$_POST['comments']."'
        );");
header("Location:http://localhost/4each_keijiban/index.php");
?>

<!doctype HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>お問合せフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
        
        <h1>お問合せフォーム</h1>
        <p>お問合せありがとうございました。<br>３営業日以内に担当者よりご連絡差し上げます。</p>
    </body>


</html>