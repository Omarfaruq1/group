<?php
$sql = $_REQUEST['sql'];
include("SYD_Class.php");
$coder = new sydClass();
$coder->operation($sql);
?>