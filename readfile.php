<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       echo 'Hi sajjad <hr>';
       
       
       echo file_get_contents('123.txt');
       
       
       echo '<hr>';
       foreach (file('123.txt') as $line => $text) {
           if(strlen(trim($text))>0){
              echo "<p> #$line:   $text  </p>"; 
           } else {
               echo 'Not Find Word.....';
           }
           
       }
        ?>
        <hr><!-- comment -->
        
        <?php
        $fp= fopen('123.txt', 'r');
        if($fp){
            while (($buffer= fgetc($fp))!==false){
                echo "$buffer                   .......   ";
            }
        }
        
  
        
        ?>
        
        
        <hr><!-- comment -->
        <?php
        
              $urls='https://gist.githubusercontent.com/JohannesMilke/d53fbbe9a1b7e7ca2645db13b995dc6f/raw/eace0e20f86cdde3352b2d92f699b6e9dedd8c70/books.json';
        $djson= json_decode(file_get_contents($urls));
        
        
        echo '<pre>';
        print_r( $djson);
            echo '</pre>';
            
            echo '<hr>';
            
            $format='<div><img src="%1$s" title="%2$s" alt="%3$s" /></div>';
            print_r($format,
                    $djson->urlImage,
                    $djson->title,
                    $djson->id,
                    );
            
            
            
        ?>
        
        
        
        
    </body>
    
</html>
