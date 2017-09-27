<?php

  $obj = new main();

  class main {

    public function __construct() {
       $text = "program  started<br>";
       echo "$text";
       $text = "<h1>String Function Demonstration</h1><br>";
       stringFunctions::printThis($text);
       $text1 = "Sample string to work<br>";
       stringFunctions::printThis($text1);
       $text = "<hr><br>";
       stringFunctions::printThis($text);
       stringFunctions::otherfunctions();
       $text = "<h1>Array Function Demonstration-ARRAY</h1><br>";
       stringFunctions::printThis($text);
       $myArray = array(1,2,3,4,5);
       arrayFunctions::printArray($myArray);
       $text = "<hr><br>";
       stringFunctions::printThis($text);
    }

    public function __destruct() {
       $text = "program ended<br>";
       echo "$text";
    }
  }
  class stringFunctions {
     static public function printThis($text) {
        print($text);
     }

     static public function otherfunctions(){
        $text1 = "Sample string to work<br>";
	$text='<h1>To print length of string<h1><br>';
	stringFunctions::printThis($text);
	$len=strlen($text1);
	stringFunctions::printThis($len);
	$text = "<hr><br>";
	stringFunctions::printThis($text);

	 $text='<h1>To print number of words in string<h1><br>';
	 stringFunctions::printThis($text);
	 $len=str_word_count($text1);
	 stringFunctions::printThis($len);
	 $text = "<hr><br>";
         stringFunctions::printThis($text);

	  $text='<h1>To reverse  string<h1><br>';
	  stringFunctions::printThis($text);
	  $len=strev($text1);
	  stringFunctions::printThis($len);
	  $text = "<hr><br>";
	  stringFunctions::printThis($text);








     }
  }

  class arrayFunctions {
     static public function printArray($myArray) {
       print_r ($myArray);
     }
  }

?>
