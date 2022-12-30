<?php

class tabletas extends productos{ 
   public $OS; //Sistema operativo: ej Android 
   private $cap_min; 
   private $cap_max; 

   function __construct($nom,$cod,$precio,$sist,$min_c,$max_c){ 
      parent::__construct($nom,$cod,$precio); //no uso this porque genera recursividad. parent llama al padre, en este caso productoss
      $this->OS = $sist; 
      $this->cap_min = $min_c; 
      $this->cap_max = $max_c; 
   } 

   public function ver_tabletas(){ 
      if ($this->cap_min == $this->cap_max){  
         echo "<p>Capacidad de almacenamiento: ".$this->cap_min."</p>";  
          
         }else{ 
      echo "<p>Capacidad de almacenamiento desde " . $this->cap_min . " hasta ".$this->cap_max."</p>";  
         } 
      }

   public function final_prod(){ 
      echo "<p>Sistema operativo: " . $this->OS . "</p>"; 
      parent::final_prod(); //no uso this porque genera recursividad. parent llama al padre, en este caso productos 
   } 
} 

?>