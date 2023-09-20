<?php
    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    $res=getMonitor($conn);
    return $res;
