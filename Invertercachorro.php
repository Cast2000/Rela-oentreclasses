<?php 

require_once 'Bob.php';

class Invertido extends Cachorro{
  
  public function __construct(){
    echo("Tigre nasceu\n");
  }
  
  
  public function latir(){
    echo("meaw meaw\n");
  }
  
  
  
}


?>
