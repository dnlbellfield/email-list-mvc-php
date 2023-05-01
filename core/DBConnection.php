<?php
namespace Core;
use PDO;


class DBConnection{
  public static function start() {
    try {
      return $pdo = new PDO("{$_ENV['DB_CONNECTION']}:host={$_ENV['DB_HOST']};PORT={$_ENV['DB_PORT']};dbname={$_ENV['DB_DATABASE']}",$_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
    } catch(PDOException $e) {
      dd($e->getMessage());
    } 
    
  }
}