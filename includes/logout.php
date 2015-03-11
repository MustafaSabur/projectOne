<?php
require 'core.php';
session_destroy();
header('Location: '.$_SERVER['HTTP_REFERER']);
?>