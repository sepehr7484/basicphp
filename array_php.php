 <?php

//array_indexed();
//multi_array();
//combine_array();
function_all_array_section_2();
function array_indexed(){
    $car=array('BMW','BENLI','FORD','BENZ','VOLVO','FERARI');
    
    echo "$car[0] <br>";
    echo "$car[1] <br>";
    echo "$car[2] <br>";
    echo "$car[3] <br>";
    echo "$car[4] <br>";
    echo "$car[5] <br>";
   
    
    echo 'Lenght array : '. count($car);
    echo '<hr>';
    
    $lenarray= count($car);
    for($i=0;$i<$lenarray;$i++){
        echo "NAME CARS :  $car[$i] <br>";
    }
    
        echo '<hr>';
        
        
        echo '<h1>Run in Table</h1>';
         
       
        
        echo "<table >
  <tr>
    <th>index</th>
    <th>name</th>
    
  </tr>";
        
  for($i=0;$i<$lenarray;$i++){
 echo " <tr>
    <td>$i</td>
    <td>$car[$i]</td>
  </tr>
  
      ";   
    }
      
echo"<tr>
    <td>LENGHT Array => </td>
    <td>$lenarray</td>
  </tr>  
  </table>  ";
        
        
        
        
        
        
   
        
        
        
        
        
        
    
    
    
    
    
    
}
function array_Associative(){
    $newarray=array('code'=>'321','name'=>'sajjad','age'=>'27');
    foreach ($newarray as$vals => $val){
        echo '<pre>'.$vals.':'.'    '.$val.'</pre>';
    }
    
    
    
}


function multi_array(){
    $car=array(
                
        array ('id'=>325,'name'=>'VOLVO','year'=>2020,),
        array ('id'=>532,'name'=>'BENZ','year'=>2022,),
        array ('id'=>325,'name'=>'VOLVO','year'=>2020,),
        array ('id'=>896,'name'=>'BENLI','year'=>2019,)
        
    );
    
    
    $cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
    
  $lenarr= count($cars);
  for($row=0;$row<4;$row++){
      echo "<p> row number<b>$row</b> </p>";
      
      for($col=0;$col<3;$col++){
          
          echo '<ul>';
          
          echo '<li>'.$cars[$row][$col].'</li>';
          
         echo '</ul>';

      }
  }
    
    
    
    
    
  echo '<hr>';
    
    
    
    
    
    
    
    echo count($cars); 
    
//    echo '<pre>';
       var_dump($cars);
//     echo '</pre>';
     
     echo '<hr>';
     
     
     
}


function combine_array(){
    //ترکيب کردن دو ارايه باهم
    
    
    $name=array('sajjad','ali','vali');
    $job=array('WebDeveloper','Android Developer','Back End');
    

    
    $info=array_combine($job, $name);
    var_dump($info);
    echo '<hr>';
    $len= count($info);
    echo $len;
    print_r($info);
       echo '<hr>';
       
       foreach (array_combine($job, $name) as $job=>$name){
           
           echo"Job:$job =>  Name:$name <br>";
           
       }
    
    
   
    
}
function function_all_array_section_1(){
        $name=array('sajjad','ali','vali');
        $job1=array('Android','Web','Windows Form');
//    $job=array("job"=>"webDeveloper","job"=>"Android Developer","job"=>"Back End");
//       $job2=array("job"=>"FrontEnd","job"=>"DevOps","job"=>"Back End");
      $job=array("job1"=>"webDeveloper","job2"=>"Android Developer","job3"=>"Back End");
       $job2=array("job4"=>"FrontEnd","job5"=>"DevOps","job6"=>"Back End");
    
       var_dump(array_diff($job2,$job));
        echo '<hr>';
       print_r(array_diff($job2,$job));
            echo '<hr>';
       print_r(array_diff($job,$job2));
       echo '<hr> diference two array keyname<br>';
       print_r(array_diff_key($job,$job2));
       echo '<hr> diference two array keyname end value <br>';
        print_r(array_diff_assoc($job,$job2));
echo '<hr> diference two array intersect end value <br>';
        print_r(array_intersect($job,$job2));
        
        echo '<hr> diference one array Key <br>';
        print_r(array_keys($job));
        
        echo '<hr> Marge two array  <br>';
        print_r(array_merge_recursive($name,$job1));
        echo '<br>';
        print_r(array_merge($job,$job2));
        
         echo '<hr> pop: last delete  array  <br>';
         array_pop($job2);
         var_dump($job2);
         
         echo '<hr> push: last add  array  <br>';
         array_push($job1,'database');
         var_dump($job1);
        
//    print_r(array_diff($job,$job));
//    
//    
//    echo '<hr>';
//    
////    $difference= array_diff($job,$job2);
////    print_r($difference);
//    var_dump(array_diff($job,$job2));
 
    
    
}


function function_all_array_section_2(){
    
    $arrname=array('ali','reza','sara','vali');
    print_r(array_reverse($arrname));
    
}