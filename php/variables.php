<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP essentials.datatype, variables and validating strings</title>
</head>
<body>
    <?php
    print "hello world <br>";
    echo "Hello World <br>";
    $x="sthg";  //string data type
    $y=10;    //integer
    $z=30.37;   //float
    $a=true;    //boolean
    $d=false;
    $cars=array("volvo","toyota");  //array=multiple values in single variable
    $f=null;  //special DT that can have only one value null i.e no value is assigned to the variable
    echo "$x<br>","$z<br>","$a<br>","$d<br>","$y<br>","$f<br>";
    //To output the array values, you would need to use a loop or a function like print_r() or var_dump().
    print_r($cars);

    echo '<br> hello world <br>';
    echo 'i\'m here <br>';  //since ' acts as delimiter use backslash for it to part of string instead of ending the string

    echo trim("   hell o  <br>"); //removes whitespace from beginning and end of string not inbetween
    // ltrim(): removies whitespace from left side of string.
    //rtrim:removes whitespace from right side of string

    echo strlen($x)."<br>"; //length of string

    echo strcasecmp("HELLO","Hello world")."<br>"; //compares two string while ignoring the diff in capitalization.case insensitive
    /*If the two strings are equal, it returns 0.
    If the first string is less than the second string, it returns a negative integer.  note that ascii comparison is done. 
    If the first string is greater than the second string, it returns a positive integer.*/

    echo strcmp($x,"Sthg")."<br>"; //case sensitive comparison. Sthg is less than sthg in ascii order

    echo ucwords("hello there. <br>"); //uppercases the first letter of each word in string
    echo strtoupper("there there <br>"); //to uppercase
    echo strtolower("HERE here <br>"); //to loweracase
    echo (substr("i just want to sleeep",3,9))."<br>"; //extract part of string. start from 3 and lenght =9. note pos start from 0 and counts space. 
    echo substr("i just want to sleeep",-3, 2)."<br>"; //is start pos is neg, it means start 3 bytes from last and length of 2
    echo str_word_count("hello there")."<br>"; //count the number of words in string.
    echo strrev("reverse this!")."<br>"; //reverses the string
    echo strpos("hello world", "world")."<br>"; //searches for text within string. searches world in string.
    echo str_replace("world","shri","hello world")."<br>"; //world is to be replaces by shri in hello world.
    ?>
</body>
</html>