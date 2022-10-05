<!DOCTYPE html>



        <?php
        
        function connect_to_mysql(){
            
        $host='localhost';
        $user='root';
        $pass='';
        $db='personself';
        $mysql=new mysqli($host,$user,$pass,$db);
        echo $mysql->host_info;
        $formattable='<table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>family</th>
                <th>age</th>

            </tr>
            
            <tr>
                <th> %1$s</th>
                <th> %2$s</th>
                <th> %3$s</th>
                <th> %4$s</th>
            </tr>
            
            
        </table>';
        
        $name1=$_POST['name1'];
        $family1=$_POST['family'];
        $age=$_POST['age'];
        $insertquery="INSERT INTO info VALUES(NULL,'$name1','$family1','$age')";
        if($mysql->query($insertquery)=== true){
            echo 'success inset to DataBase....';
        } else {
            echo "<p>Error: </p>".$mysql->error;
}
        
//        $formatwrite='        <article >
//            <pre>id: %1$s</pre> 
//            <pre>name: %2$s</pre> 
//            <pre>family: %3$s</pre> 
//            <pre>age: %4$s</pre> 
//            
//        </article>';
        
        
//        $table=
        
        $result=$mysql->query('SELECT * FROM info ;');
//        $result= mysql_fetch_all($result);
        print_r($result);
        foreach ($result as $value) {
            echo '<pre>';
//            print_r($value);
            
    printf($formattable,
            $value['id'],
            $value['name'],
            $value['family'],
            $value['age'],
            
            
            
            );
            
        
            echo '</pre>';
        }
        
        }
        ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1 style="color:green" >Connect to My sql</h1>
        <form method="post" >
            <input type="text" placeholder="Enter Name...." name="name1">
              <input type="text" placeholder="Enter Family...." name="family">
               <input type="number" placeholder="Enter Age...." name="age">
              <input type="submit" value="Insert">
            
           
        </form>
        
        <?php connect_to_mysql(); ?>

    </body>
</html>
