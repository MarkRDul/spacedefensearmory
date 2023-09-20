<?php

function getMonitor($conn){
    $res = [];
    $sql = "SELECT * FROM monitor;";
    if (mysqli_multi_query($conn, $sql)){
        do {
            // Store first result set
            if ($result = mysqli_store_result($conn)) {
                while ($row = mysqli_fetch_row($result)) {
                    array_push($res, $row);
                }
                mysqli_free_result($result);
            }
            //Prepare next result set
        } while (mysqli_next_result($conn));
    }
    return $res;
}

function mon_update($conn, $pass){
    $sql="UPDATE monitor SET ";
    foreach ($pass as $k=>$v){
        $sql.=$k."=".$v.", ";
    }
    $sql=substr($sql, 0, -2).";";
    mysqli_query($conn, $sql);
}

function getWeapon($conn, $weapon){
    $res = [];
    $sql = "SELECT * FROM weapons WHERE id=".$weapon;
    if (mysqli_multi_query($conn, $sql)){
        do {
            // Store first result set
            if ($result = mysqli_store_result($conn)) {
                while ($row = mysqli_fetch_row($result)) {
                    array_push($res, $row);
                }
                mysqli_free_result($result);
            }
            //Prepare next result set
        } while (mysqli_next_result($conn));
    }
    return $res;
}