<?php 
use App\Models\EmailModel;
use Core\DBConnection;

require '../vendor/autoload.php';
require '../core/helpers.php';
require '../app/routes.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
// require '../app/views/index.view.php';


// $EmailModel = new EmailModel(DBConnection::start());

 // Run  bramus router
$router->run();
