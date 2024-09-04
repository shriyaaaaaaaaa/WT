<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php functions</title>
</head>
<body>
    <h1>functions are block of statements that can be used repeatedly in a program</h1>
    <?php
    //1. calling a function: function can be defined before or after they are called.
    function greet(){
        echo "just peeking throug here nvm <br>";
    }
    greet();
    echo "welcome, webtech is on the way to finish <br>";
    message();
    function message(){
        echo "hi nits alchi nagara huss sidyo aba <br>";
    }

    //2. passing args to function
    function add($a,$b){  //func with 2 parameters
        $sum = $a + $b;
        echo"the sum is $sum <br>";
    }
    //calling the func and passing 2 args
    add(5,7);

    //3. default values for func parameter
    function sayhello($nmae="damn!"){
        echo "hello $nmae <br>";
    }
    sayhello("subodh");
    sayhello(); //passing no value. so this takes default args i.e  damn

    //4.returning values from functions: return keyword is used to return value back to part of program it was called from
    function cube($n) {
    return $n*$n*$n;       //or $z=$n*$n*$n; and return $z;
    }
    echo "cube of 3 is:".cube(3);


    ?>

    
</body>
</html>