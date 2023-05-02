<?php 
use App\Models\EmailModel;
use Core\DBConnection;

require '../vendor/autoload.php';
require '../core/helpers.php';
require '../app/routes.php';

if (file_exists(__DIR__ . '/../' . '.env')) {
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../' );
  $dotenv->load(__DIR__);
}

 // Run  bramus router
$router->run();
