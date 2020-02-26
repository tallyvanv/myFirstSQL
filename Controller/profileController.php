<?php


class profileController
{
    public function render(array $GET, array $POST)
    {
        $user = $this->select();
        require "View/profilepage.php";
    }

    private function select()
    {
        $connection = new Connection();
        $pdo = $connection->openConnection();
        $sql = $pdo->prepare("SELECT * FROM table_student WHERE id=:id");
        $sql->execute(['id'=>$_GET['user']]);
        return $sql->fetch();
    }
}