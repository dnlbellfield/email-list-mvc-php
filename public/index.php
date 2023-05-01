<?php 
use App\Models\EmailModel;
use Core\DBConnection;

require '../vendor/autoload.php';
require '../core/helpers.php';
require '../app/routes.php';
// require '../app/views/index.view.php';


// $EmailModel = new EmailModel(DBConnection::start());

 // Run  bramus router
$router->run();