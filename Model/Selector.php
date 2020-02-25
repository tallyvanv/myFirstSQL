<?php


class Selector
{
    public function select(PDO $pdo, string $sql): array
    {
        //select rows from the db based on a given query
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}