<?php

session_start();
session_unset();
session_destroy();

$_SESSION['success'] = "You're loged out !";
header('location: index.php');