<?php

session_start();

$conn = mysqli_connect(
    'pensive-lovelace-f0efe7.netlify.app',
    'juancarlossa',
    '',
    'php_mysql_crud',
) or die(mysqli_error($mysqli));
?>
