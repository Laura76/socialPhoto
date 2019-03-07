<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
try { $dbh = new PDO('sqlite:itlife365.com'); echo 'Create Db ok' ; $dbh->exec("CREATE TABLE itlife365(id integer,name varchar(255))"); echo 'Create Table itlife365 ok<BR>'; $dbh->exec("INSERT INTO itlife365 values(1,'itlife365.com')"); echo 'Insert Data ok<BR>'; $dbh->beginTransaction(); $sth = $dbh->prepare('SELECT * FROM itlife365'); $sth->execute(); $result = $sth->fetchAll(); print_r($result); $dsn=null; } catch (PDOException $e) { echo 'Connection failed: ' . $e->getMessage(); $dsn = null; } ?>
</body>
</html>