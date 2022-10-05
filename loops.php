
<?php

//for_loops();
//dowhile_loop();
//while_loop();
//for_loop2();

//foreach_loop();

array_call_loops();


function array_call_loops(){
    
    $indexname=array('alireza','hosein','reza','vali','ghani');
    $arraylenght= count($indexname);
    echo 'Lenght:'.$arraylenght.'<hr>';
    for($i=0;$i<$arraylenght;$i++){
        
        echo "<pre>".$indexname[$i]."</pre>";
    }
    
    
    
    
}

function dowhile_loop(){
    $x2=1;
    
    do{
    echo "Number : $x2 <br>"; 
        $x2++;
        
    }while ($x2<=20);
    
}

function while_loop(){
   
$x1=1;
while ($x1<=50){
    if($x1%2==0){
        echo"<h2> Number even: $x1  </h2>";
     
    }
        if($x1%2==1){
        echo"<h4> Number odd: $x1  </h4>";
       
    }
    $x1++;
}

}


function for_loops(){
    $number=50;
    for($count1=2;$count1<=$number;$count1++){
        
        $isprime=true;
        for ($count2=2;$count2<$count1;$count2++){
            
            if($count1%$count2==0){
                $isprime=false;
            }
            
        }
        if($isprime==true){
            echo $count2.'<br>';
        }
        
        
    }
}


function for_loop2(){
    for ($x=1;$x<=15;$x++){
        if($x==10){
            break;
        }
        echo "number:   $x <br>";
    }
    
}



function foreach_loop(){
    
    $listitem=array('sajjad','reza','ali','vali','hasan');
    
    $listinfo=array('id'=>23,'name'=>'sajjad','age'=>27);
    
    
    foreach ($listitem as $val){
        echo "Name : $val <br>";
    }
    echo '<hr>';
    
    foreach ($listinfo as $value => $val){
        echo "key : $value => Value: $val <br>";
    }
    
    
}