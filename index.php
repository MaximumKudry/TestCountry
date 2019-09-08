<!DOCTYPE html>
<html>
<head>
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/test/database.php';
//include_once $_SERVER['DOCUMENT_ROOT'] . '/test/php.ini';

echo '<div id="main"><div id="heading">Название страны </div><br /><hr />';
$query = mysqli_query($link, "SELECT * FROM `country`");    
while($row = mysqli_fetch_array ($query))
{
    echo $row['name'].'<br /><hr />';
}
echo '</div>';
?>
    <div id="ForForm">
        <form method="POST" action="add.php">
        <input type="submit" id="submit" value="Добавить запись">
        </form>
    </div>
</body>
</html>