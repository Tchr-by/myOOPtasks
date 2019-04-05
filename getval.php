<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

    <?php 
    require_once('classes.php');
    require_once('classes2.php');

    $class = new myClass;

    $class->setValue();
    $class->getValue( $from_inp );
    $class->deleteValue();

    
    ?>

    ВТОРОЕ ЗАДАНИЕ <br />

    <?php
        $config = new firstClass( "ПЕРЕДАЕТ!" );
        $nextClass = new connect( $config );
        
        print_r( $nextClass->val() );
    ?>
</body>
</html>