<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array php</title>
</head>
<body>
    <?php
    // creating an array
    $fruits = array("apple", "banana", "cherry");  //use array language construct
    $fruit=["apple","banana","cherry"]; //or use sq. bracket.
    print_r($fruits);
    echo "<br>";
    print_r($fruit);
    echo "<br>";

    // types of array.
    //a. indexed or numerical array
    $cars=["volvo","toyota","BMW"];   //or assign manually like $car[0]="volvo"; $car[1]="toyota; $car[2]="BMW";
    $arraylen=count($cars);  //returns length of cars array
    for($x=0;$x<$arraylen;$x++){
        echo $cars[$x]."<br>";
    }
   

    //b. associative array: every value can be assigned w a user-defined key of string value
    $age=array("peter"=>"18",       //or assign $age["peter"]="18";
                "rani"=>"10",                  //  $age["rani"]="10";
                "john"=>"15");   
    echo "peter is" .$age["peter"]. " years old <br>";

    //c. multidimensional array:array of arrays. $arrayname=array(array());
?>


    
</body>
</html>