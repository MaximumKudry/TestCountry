<!DOCTYPE html>
<html>
<head>
    <title>Обработчик</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/test/database.php';

if (isset($_POST['text'])) 
    {
    $name = htmlspecialchars($_POST['text']); 
    if ($name == '') 
    {
        unset($name);
        echo '<div id="main">Вы забыли ввести название страны</div>';
        echo '
        <div id="ForForm">
            <form method="POST" action="add.php">
            <input type="submit" id="submit" value="Ввести название страны еще раз">
            </form>
        </div>';
    } else 
    {
        $query = "INSERT INTO `country` (`name`) VALUES (?)";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_bind_param($stmt, "s", $name);
        if (mysqli_stmt_execute($stmt) == 'true') 
        {
            echo '<div id="main">Запись добавлена</div>';
        } else 
        {
            echo '<div id="main">Запись не добавлена</div>';
        }  
        mysqli_stmt_close($stmt);                            
    }    
    }              
?>

    <div id="ForForm">
        <form method="POST" action="index.php">
        <input type="submit" id="submit" value="Вернуться на главную страницу">
        </form>
    </div>
</body>
</html>