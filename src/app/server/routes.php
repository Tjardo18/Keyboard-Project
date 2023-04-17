<?php

include "./router/router.php";
include "controllers/ConnectController.php";

$router = new Bramus\Router\Router();

$connection = new ConnectController();

$router->get("/", function () use ($connection) {
   $connection->setDatabase("skck");

   $dataset = $connection->execute("SELECT * FROM users");
   var_dump($dataset);
});