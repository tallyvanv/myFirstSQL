<?php


class profileController
{
    public function render(array $GET, array $POST)
    {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->insert();
        }
        require "View/profilepage.php";
    }
}