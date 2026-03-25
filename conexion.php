<?php

    function conexion(){

    $host = "host=dpg-d723d5lm5p6s73c44aa0-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=testsql_render";
    $user = "user=testsql_render_user";
    $password = "password=i51yNSaMUXFNtuvVQkOI7r4ifVje0Obr";

    $db = pg_connect("$host $port $dbname $user $password");

    return $db;
}
?>