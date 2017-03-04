<?php
session_start();

$_SESSION["a"] = 1;
$_SESSION["name"] = "mamada";
echo $_SESSION["a"];

$_SESSION["a"]+=1;




?>