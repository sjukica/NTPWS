<?php
session_start();
$_SESSION['user']['valid'] = 'false';
echo 'Logout complete!';
header("Location: index.php?navigation=0");
