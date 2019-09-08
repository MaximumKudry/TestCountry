<!DOCTYPE html>
<html>
<head>
    <title>Добавить запись</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/test/database.php'; ?>
<div id="main">
<form method="POST" action="add_info.php">
    <input type="text" id="input" name="text" placeholder="Введите страну">
    <input type="submit" id="submit" name="submit" value="Добавить">
</form>
</div>
</body>
</html>