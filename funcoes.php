<?php

function com(){
    try {
        $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
       
      } catch(PDOException $e) {
        die('Error: ' . __FILE__ . $e->getMessage());
      }
        
      if(!$pdo){
        die('Error: ' . 'conexao nula');
      }

      return $pdo;
      
}