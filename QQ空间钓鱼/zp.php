<?php
header('content-type:image/jpg;');
$content=file_get_contents('1.jpg');
echo $content;
?>