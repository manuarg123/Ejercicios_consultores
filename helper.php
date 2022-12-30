<?php
class helper{

    public $number_1; 
    public $number_2;
    public $array_number;
    public $array_to_cut;
    public $clean_array;
    public $multi_array;
    public $string_to_check;
    public $palindrome_check;
    public $array_of_numbers;

    function __construct($num_1 = 0,$num_2 = 0){
            $this->number_1 = $num_1;
            $this->number_2 = $num_2; 
    }

    /**
     * Getters and Setters
     */
    public function getArrayOfNumbers(){
        return $this->array_of_numbers;
    }
    
    public function setArrayOfNumbers(array $array){
        $this->array_of_numbers[] = $array;
    }

    public function setArrayToCut(array $array){
        $this->array_to_cut = $array;
    }
    
    public function getArrayToCut(){
        return $this->array_to_cut;
    }

    public function getMultiArray(){
        return $this->multi_array;
    }
    
    public function setMultiArray(array $array){
        $this->multi_array[] = $array;
    }

    public function addNumber($number){
        $this->array_number[] = $number;
    }
    
    public function getArrayNumber(){
        return $this->array_number;
    }

    public function getStringToCheck(){
        return $this->string_to_check[0];
    }
    
    public function setStringToCheck($string){
        $this->string_to_check[] = $string;
    }

    public function getPalindromeCheck(){
        return $this->palindrome_check;
    }
    
    public function setPalindromeCheck($string){
        $this->palindrome_check = $string;
    }

    /**
     * Métodos para las consignas 
     */

    //Para multiplicar los números sin usar el operador
    public function multiplicacion(){
    $result = 0;
    $i = 1;
    
        while ($i <= $this->number_2) {
        $result+=$this->number_1;
        $i++;
        }
        
    return $result;
    } 
    
    /**
     * Para quitar determinados valores del array
     */
    public function cleanArray(array $array){
        foreach($array as $value){
            if($value != false && $value != undefined && $value != null && $value != 0 || ($value == true && $value != undefined)){
                $this->clean_array[] = $value;
            }
        }
        return $this->clean_array;
    }  
    
    /**
     * Para transformar un array multidimensional a un array simple
     */
    public function multiToSingleArray(array $array){
        $result = [];
        
        foreach($array as $key => $value){
            if(is_array($value)){
                $result = array_merge($result, $this->multiToSingleArray($value));
            } else {
                $result = array_merge($result,  array($key=>$value));
            }
        }
        return $result;
    }

    /**
     * Para obtener la palabra más repetida y la cantidad de veces que se repite
     */
    public function getStringChecked($string){
        $string_count = [
                'letter_repeated' => '',
                'count_repeated' => 0
            ];  
        
        $array_string = explode(" ", $string);
        
        $valores=array_count_values($array_string);
        arsort($valores);
        
        $number = 0;
        $key_string = "";
        $i = 0;
        
        //El método array_count_values siempre acomoda el elemento más repetido al principio del array, por eso toma por defecto el primer valor como el más repetido
        foreach ($valores as $key => $value) {
            if($i == 0){
                $number = $value;
                $key_string = $key;
                $i++;
            }
        }
    
        $string_count["letter_repeated"] = $key_string;
        $string_count["count_repeated"] = $number;
        
        return $string_count;
    }
    
   
    
    /**
     * Recibe una palabra o frase y determina si es un palindromo con true o false
     * 
     */
    function getPalindromo($string)
    {
        $string_explode = explode(" ", strtolower($string));
        
        foreach($string_explode as $word)
        {
            trim($word);
            $nuevo .= $word; 
        }
        
        //Compara la cadena con su igual pero dada vuelta
        if($nuevo == strrev($nuevo))
        {
            return true;
        }
        else {
            return false;
        }
    }     
    
    /**
     * Recibe un array de números y devuelve el de mayor valor
     */
    public function getLargeNumber(array $array){
        $large_number = 0;
        foreach ($array as $number) {
            if ($number > $large_number) {
                $large_number = $number;
            }
        }

        return $large_number;
    }   
 }
 ?>