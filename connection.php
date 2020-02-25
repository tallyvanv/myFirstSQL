<?php
    // Try to figure out what these should be for you
    $dbhost = "localhost";
    $dbuser = "talisa";
    $dbpass = "wolfSucks69";
    $db = "student_schema";

    // Try to understand what happens here
    try {
        $pdo = new PDO('mysql:host=' . $dbhost.';dbname=' . $db, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Setting Error Mode as Exception
        echo 'het lukte';
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

    var_dump($pdo);
 // Why we do this here
