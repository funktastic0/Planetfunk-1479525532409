<?php
    $host = "us-cdbr-iron-east-04.cleardb.net";
    $user = "bf59282eb3a451";
    $password = "0ebce958";
    $database = "ad_bd99d9af32b649c";

    //Create connection
    $cn = new mysqli($host, $user, $password, $database);

    //Check connection
    if($cn->connect_error) {
        die("La conexión ha fallado: " . $cn -> connect_error);
    }

    mysqli_set_charset($cn, "utf8");

    //echo "Conexión establecida!!!";
?>
