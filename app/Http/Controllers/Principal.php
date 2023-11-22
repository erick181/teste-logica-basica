<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    

    public function multiplos(){

$m3 = 3;
$m5 = 5;

        for($i = 1; $i<= 50; $i++){

            if($m3 == $i && $m5 == $i){
                echo "FizzBuzz </br>";
                $m3 = $i + 3;
                $m5 = $i + 5;
            }
            elseif($m3 == $i){
                echo "Fizz </br>";
                $m3 = $i + 3;
            }
            elseif($m5 == $i){
                echo "Buzz </br>";
                $m5 = $i + 5;
            }else{
                echo $i . "</br>";
            }

        }

    } 

public function fibonacci(){
    
    $numeros = array(40);
    
    for($i = 0;$i<= 40; $i++){
        if($i < 2){
            $numeros[$i] = $i;         
        } else{
            $numeros[$i] = $numeros[$i - 1] + $numeros[$i - 2]; 
        }
            if($i == 40){
                echo $numeros[$i];
            }else{
                echo $numeros[$i] . ",";
            }
       
    }


}


}
