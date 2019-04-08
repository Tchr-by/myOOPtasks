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
    <div class="container">

    <?php 
    spl_autoload_register(function ($classes) {
        include $classes . '.php';
    });

    $class = new myClass;
    $class->setValue();
    $class->getValue( $from_inp );


    
    ?>

    <br />Second-task <br />

    <?php
        $config = new baseClass( "Hello World!" );
        $nextClass = new connectClass( $config );
        
        print_r( $nextClass->val() );
    ?>


    <br />Self-education<br />

    <?php

    $human = [
        new emp('Ivan', 50),
        new emp('Petya', 17),
        new emp('Kostya', 22),
        new emp('Fedya', 16)
    ];
    
    foreach ($human as $rab) {
        echo $rab->info(). ' ' . $rab->getAge();
    }
    ?>
    </div>
</body>
</html>