<?php

session_start();

$conn = mysqli_connect(
    'juank-portfolio.herokuapp.com',
    'juancarlossa',
    '',
    'php_mysql_crud',
) or die(mysqli_error($mysqli));
?>
