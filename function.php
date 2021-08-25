<?php


function connect()
{
     $password ="";
     $host = "localhost";
     $username = "root";
     $dsn = "mysql:host=$host; dbname=mywebsite; port=3308";
     $con = new PDO($dsn, $username, $password);
     return $con;
}
