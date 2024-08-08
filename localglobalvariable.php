<?php
    // local
    function getName() {
        $name = "Pritam Kumar Kundu";
        echo $name;
    }
    getName();

    echo "<br>";

    // global
    $nameTwo = "Pritam Kumar Kundu";
    function getNameTwo() {

    }
    echo $nameTwo;
    getNameTwo();

    echo "<br>";
    
    $nameThree = "Pritam Kumar Kundu";
    function getNameThree() {
        global $nameThree;
        echo "Local Variable: ", $nameThree;
    }
    echo "<br>";
    echo $nameThree;
    echo "<br>";
    getNameThree();
    echo "<br>";
    
    $nameFour = "Pritam Kumar Kundu";
    function getNameFour($nameFour) {
        echo "Local Variable: ", $nameFour;
    }
    echo "<br>";
    echo $nameFour;
    echo "<br>";
    getNameFour($nameFour);
    echo "<br>";
    
    $nameFive = "Pritam Kumar Kundu";
    function getNameFive() {
        global $nameFive;
        $nameFive = "Prity Rani Datta";
        echo "Local Variable: ", $nameFive;
    }
    getNameFive();
    echo "<br>";
    echo $nameFive;
    echo "<br>";
    echo "<br>";

    $nameSix = "Pritam";
    function test() {
        $nameSix = "Prity";
        echo $nameSix;

        function innerTest() {
            $nameSix = "Priya";
            echo $nameSix;
        }
    }
    test();
    echo "<br>";
    innerTest();
    echo "<br>";
    echo $nameSix;
    echo "<br>";
    echo "<br>";
    
    $nameSeven = "Pritam";
    function testOne() {
        $nameSeven = "Prity";
        echo $nameSeven;

        function innerTestOne() {
            global $nameSeven;
            echo $nameSeven;
        }
    }
    testOne();
    echo "<br>";
    innerTestOne();
    echo "<br>";
    echo $nameSeven;
    echo "<br>";
?>