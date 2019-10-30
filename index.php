<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Someone";
        echo "Hello Wolrd";
        echo "<h1>Hey $name there</h1>";
        //echo str_replace();
        echo substr("asdfghjkl",3,2);
        //echo strtolower;
        //echo strtoupper;
        //pow abs sqrt round floor ceil min max 
        

        ?>
        <form action="index.php" method="get">
            <input type="text" name="asd">
            <input type="submit">
        </form>
        <?php
            echo $_GET["asd"]
        ?>
        <form action="index.php" method="post">
            post : <input type="text" name="post">
            <input type="submit">
        </form>
        <?php
            echo $_POST["post"];
        ?>
        <?php
            $friends = array("1","adfasf","fdfdfd");
            echo $friends[0];
            function sayHi($name){
                echo "Hi $name";
            }
            sayHi("Jim ");
        ?>
        <?php
         include "header.html";
        ?>
        <?php
            $name = "hey name";
            include "footer.php"
        ?>
        <?php
            class Book {
                var $name;
                var $author;
            }
            $neverland =new Book();
            $neverland->name = "bookN";
            $neverland->author ="authorWho";
            echo $neverland->name;
            echo "<br>";
            echo $neverland->author;
        ?>
        <?php
            
            class Bookie {
                var $name;
                function __construct($aName){
                    $this->name = $aName;
                    echo "New Book";
                }
                function startWithLetter($aLetter){
                    echo "in";
                    echo strtolower($this->name[0])===strtolower($aLetter);
                }
            }
            $book1 = new Bookie("hope");
            echo $book1->name;
            echo "<br>";
            $book1->startWithLetter("h");
            echo "<br>";
            $book1->startWithLetter("p");
            ?>
            <?php
                class Movie {
                    private $name;
                    function __construct($aName){
                        $this->name = $aName;
                    }
                    function setName($aName){
                        $this->name = $aName;
                    }
                    function getName(){
                        return $this->name;
                    }
                }
                $aMovie = new Movie("A day");
                echo $aMovie->getName();
                $aMovie->setName("A night");
                echo $aMovie->getName();
            ?>

            <?php
                class Computer{
                    function compute(){
                        echo "computing";
                    }
                }
                class Mac extends Computer {
                    function compute(){
                        echo "Fast Computing";
                    }
                }
                $myMac = new Mac();
                $myMac->compute();
            ?>
</body>
</html>