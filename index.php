<?php
require 'Model/connection.php';
require 'Model/insert.php';

require "Controller/homepageController.php";

$controller = new homepageController();
$controller->render($_GET, $_POST);

