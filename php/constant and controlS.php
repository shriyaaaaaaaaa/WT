<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constants php</title>
</head>
<body>
    <h3>constants are name or identifier that can't be changed during execution of script</h3>
    <!--define(name,value,case insensitive): it is case sensitive by default-->
    <?php
    define("MESSAGE","HELLO THERE!<br>"); //creates constant with case sensitive name. ie MESSAGE and message are diff.
    echo MESSAGE;

   // define("msg", "hi hi hi",true); //creates constant with case insensitive name i.e MSG msg all same
    //echo msg;    

    //const keyword is case sensitive always. adn faster than define(). defines constant at compile time.
    const MSG="language construct not a function"."<br>";
    echo MSG;
    ?>

    <!--some control structure-->
    <?php
    for($n=1;$n<=10;$n++){
        echo $n."<br/>";
    }

    for($j=1;$j<=3;$j++){
        for($k=1;$k<=3;$k++){
            echo $j." ".$k."<br>";
    }
}
      // class and objects
      class books{
        public $title;    //members of class books
        public $author;
      }
      //creating three objects  of books
      $physics=new books();
      $chemistry=new books();
      $biology=new books();

        $physics->title = "Physics Book";
        $physics->author = "John Doe";

        $chemistry->title = "Chemistry Book";
        $chemistry->author = "Jane Doe";

        $biology->title = "Biology Book";
        $biology->author = "Bob Smith";

        // print the values
        echo $physics->title . " by " . $physics->author . "\n"."<br>";
        echo $chemistry->title . " by " . $chemistry->author . "\n"."<br>";
        echo $biology->title . " by " . $biology->author . "\n";

    ?>
</body>
</html>