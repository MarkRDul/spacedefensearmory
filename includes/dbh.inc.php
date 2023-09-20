<?php

$serverName="localhost";
$dbUser="root";
$dbPass="";
$dbName="space_defense_armory";

$conn = mysqli_connect($serverName, $dbUser, $dbPass, $dbName);

if (!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}