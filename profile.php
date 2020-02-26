<?php
require 'Model/connection.php';
require 'Model/insert.php';
require 'Model/Selector.php';

require 'Controller/profileController.php';

$controller = new profileController();
$controller->render($_GET, $_POST);