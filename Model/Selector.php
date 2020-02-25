<?php


class Selector extends Connection
{
    public function select(): array
    {
        //select rows from the db based on a given query
        $pdo = $this->openConnection();
        $sql = "SELECT * FROM table_student";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}