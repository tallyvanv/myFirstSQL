<?php
// Try to figure out what these should be for you


function openConnection()
{
    $dbhost = "localhost";
    $dbuser = "talisa";
    $dbpass = "wolfSucks69";
    $db = "student_schema";


    $pdo = new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Setting Error Mode as Exception
    return $pdo;
}

function select(PDO $pdo, string $sql): array
{
    //select rows from the db based on a given query
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}