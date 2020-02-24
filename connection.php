<?php
function openConnection()
{
    // Try to figure out what these should be for you
    $dbhost = "localhost";
    $dbuser = "talisa";
    $dbpass = "wolfSucks69";
    $db = "becode";

    // Try to understand what happens here

    try {
        $pdo = new PDO('mysql:host=' . $dbhost . 'example.com;dbname=' . $db, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Setting Error Mode as Exception
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
 // Why we do this here
 return $pdo;
}