<?php
namespace App\Controllers;
use Core\DBConnection;
use App\Models\EmailModel;
use PDO;

class PageController {
  public function index(){

    $formError = false;
    $EmailModel = new EmailModel(DBConnection::start());

    view("index", [
      "name" => "Daniel",
      "totalEmails" => $EmailModel->totalEmails(),
      "formError" => $formError

      
    ]);
  }

  public function store(){
    // connection available in each if / else statement
    $EmailModel = new EmailModel(DBConnection::start());

    if ($_POST['email'] != "") {

      if ($EmailModel->insert($_POST['email'])) {
        redirect('http://localhost:8080/thank-you');
      } else {
        view("index", [
          "name" => "Daniel",
          "totalEmails" => $EmailModel->totalEmails(),
          "formError" => true,
          "formErrorMessage" => "There was an issue saving the data"
          
        ]);
      }

    } else {
      view("index", [
        "name" => "Daniel",
        "totalEmails" => $EmailModel->totalEmails(),
        "formError" => true,
        "formErrorMessage" => "Please add an email address to get started."
        
      ]);
    } 
  }
  public function thankyou(){
    view("thank-you");
  }


}