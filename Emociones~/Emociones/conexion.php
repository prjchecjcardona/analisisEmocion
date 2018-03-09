<?php
/* Database connection settings */
$host = 'localhost';
$user = 'postgres';
$pass = ' ';
$db = "emociones";
$port= "5432";
$connect = pg_pconnect("host=$host port=$port dbname=$db user=$user password=$pass");
