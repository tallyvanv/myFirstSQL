<?php
// Try to figure out what these should be for you
class Connection
{

    public function openConnection()
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

}

