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
    $meals=array("breakfast" => ["walnut","coffee"],
                "lunch" =>["rice","daal"],
                "dinner" => ["chicken","rice"]);
                print_r($meals);
                sort($meals); 
                echo "<br>"; //sorts array by its element in ascending order
                print_r($meals);  //after sorting
                echo "<br>";

    $luches=[["chicken","eggplant","rice"],
                  ["eggplants","tofu"],
                  ["sthg","sthg"]
                  ];
                  print_r($luches);
                  asort($luches); //sorts  array by element value in descending order together w their values
                  echo "<br>";
                  print_r($luches);
                  echo "<br>";

    $flavors=array("japanese" => array("hot" => "wasabi", "salty" => "soy sauce"),
                    "chinese" => array("hot"=> "mustard", "pepper-salty"=>"pickly ash") );
                    print_r($flavors);
                    echo "<br>";
                    ksort($flavors);  //sort array by keys in ascending order
                    //krsort(): sorts array  by keys in descending order
                    print_r($flavors);
                    echo "<br>";

    //looping through arrays: foreach($array_name as $keys => $value)
    $colors=array("breakfast"=> "toast",
                  "lunch"=>"cashew nuts",
                  "dinner"=>"chicken");
                  foreach($colors as $key => $value){
                    echo "key is " .$key." and value is ".$value."<br>";
                  }

 echo count($colors)."<br>";
 echo sizeOf($flavors)."<br>";    //tells the number of elements  in array.

 echo array_key_exists("breakfast",$colors)."<br>"; //array_key_exists(key,array_name) :returns true(1) if element w provided key exists in provided array otherwise undefined

 echo in_array("toast",$colors)."<br>"; //in_array(value, array_name):returns T(1) if finds element w given value. case -sensitive.

 echo array_search("toast",$colors)."<br>"; //similar  to in_array  but if it finds then returns element key instead of true

 unset($colors["lunch"]); // is used to destroy a variable. unset($array_name["key"])
 echo "after unsetting:";
 print_r($colors);
 echo"<br>";

 $string= implode(',', $luches); //syntax implode (seperator, array_name): makes string by combinig all the values putting delimiter in between
echo $string;
echo "<br>";

$sthg="what, is this even";
$array=explode(",",$sthg);    //breaks string into array
print_r($array);
echo"<br>";


?>


    
</body>
</html>