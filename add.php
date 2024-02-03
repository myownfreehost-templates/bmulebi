<?php
$text = $_POST['text'];
$fp = fopen('data.txt', 'w');
fwrite($fp, $text);
fclose($fp);
?>
<html>
<?php
header('Location: index.php');
exit;
?>
