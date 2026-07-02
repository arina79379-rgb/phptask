<?php
$result = array("text" => $_GET["text"], "length" => strlen($_GET["text"]));
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результат</title>
    <h1>Результат</h1>
</head>
<body>

<p>Текст: <?php echo $result["text"]; ?></p>
<p>Длина строки: <?php echo $result["length"]; ?></p>

<pre>
<?php print_r($result); ?>
</pre>

</body>
</html>