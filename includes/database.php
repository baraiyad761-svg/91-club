<?php
include 'config.php';
$conn = new mysqli("localhost","root","","91club");
if($conn->connect_error){ die("DB Error"); }
?>
