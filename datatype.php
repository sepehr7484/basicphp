<?php

//$number=133;
//$float=123.34;
//$bool=true;
//$arrays=array('sajjad',54,'Volvo');
//echo '<pre>';
//var_dump($arrays);
//echo '</pre>';
//var_dump($bool);
echo '<hr>';


class Car{
    public $color;
    public  $model;
    public $years;
    public function __construct($color,$model,$years){
        
        $this-> color=$color;
        $this->model=$model;
        $this->years=$years;
        

    }

  public  function  message(){
        
        return "my car is a".$this->color." ".$this->model."".$this->years;
    }
    
 
    }

 function callobj(){
   $myCar=new Car("BMW","Z4",'1998');
echo $myCar->message();
var_dump($myCar); die();  
 }
//var_dump($myCar->message);

$z='sajjad';
$z=null;
var_dump($z);



