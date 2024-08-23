<?php
const DB_USER = "root";
const DB_PASS = "";
const DB_NAME = "skills_24";
const DB_HOST = "localhost";
const DB_PORT = 3306;

try{
  $connect = new PDO(
    sprintf('mysql:host=%s;dbname=%s;port=%d;charset=utf8', 
          DB_HOST, DB_NAME, DB_PORT), 
          DB_USER,
          DB_PASS
  );
}catch(Exception $e){
  echo $e->getMessage();
  die();
}