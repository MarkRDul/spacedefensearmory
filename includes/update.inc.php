<?php
    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    $pass=array();
    $str="";
    foreach ($_GET as $k=>$v){
        if (($k=="axiom" || $k=="fcl" || $k=="mec" || $k=="pp") && $v>=0 && $v<=4){
            $pass[$k]=$v;
        }
    }
    if (count($pass)>0){
        $str=mon_update($conn, $pass);
    }
    return $str;