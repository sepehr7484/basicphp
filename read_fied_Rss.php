<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $feed='https://git.ir/linkedin-processing-data-sources-in-php/';
        $content=new SimpleXMLElement(file_get_contents($feed));
        
        echo '<pre>';
        
        print_r($content);
        echo '</pre>';
        ?>
        <hr><!-- comment -->
        <h1 style="color: red">   <?php echo $content->head->name; ?></h1>
    </body>
</html>
