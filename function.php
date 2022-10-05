<?php 
declare(strict_types=1);




//myfunc();
//func_argument(10);
//func_argument(10,4);
echo addNumbers(1.2, 5.2); 

function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}

function myfunc(){
   $lenght=20;
   $with=10;
   $perimeter=2*($lenght+$with);
   $area=$lenght*$with;
   echo "Perimeter : $perimeter <br>";
      echo "Area : $area <br>";
}
function func_argument($with,$zele=null){
    
    if($zele!=null){
        echo"Perimeter Square: ($with*$zele) = ".$with*$zele;
    }elseif ($zele==null) {
        echo"Area Square: ($with*$with) = ".$with*$with;
    }
    
}
