<?php 
$controllerName = ucfirst(($_REQUEST ['controller'] ?? 'Welcome') . 'Controller');
echo $controllerName;

// require "./Controllers/${controllerName}.php";
require "../Controllers/UserController.php";