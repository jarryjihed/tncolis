<?php
session_start();
$_SEESION = array();
session_unset();
session_destroy();
header('Location: index.php');
exit();
?>
