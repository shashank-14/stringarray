<?php

  $obj = new main();

  class main {

    public function __construct() {
        $i=0;
       $text = "program  started<br>";
       echo "$text";
       $text = "<h1>String Function Demonstration</h1><br>";
       stringFunctions::printThis($text);
       $text1 = "Sample string to work<br>";
       stringFunctions::printThis($text1);
       stringFunctions::printThis($text);
       stringFunctions::otherfunctions();
       $text = "<h1>Array Function Demonstration-ARRAY</h1><br>";
       stringFunctions::printThis($text);
       $myArray = array(1,2,3,4,5);
       arrayFunctions::printArray($myArray);
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
        
        if(i%2==0){
        {
          $text = "<hr><br>";
	        print($text);
        }
	
     }

     static public function otherfunctions(){
        $text1 = "Sample string to work";
	$text='<h1>To print length of string<h1><br>';
	stringFunctions::printThis($text);
	$len=strlen($text1);
	stringFunctions::printThis($len);

	 $text='<h1>To print number of words in string<h1><br>';
	 stringFunctions::printThis($text);
	 $len=str_word_count($text1);
	 stringFunctions::printThis($len);

	  $text='<h1>To reverse  string<h1><br>';
	  stringFunctions::printThis($text);
	  $len=strrev($text1);
	  stringFunctions::printThis($len);

	  $text='<h1>To convert string to uppercase<h1><br>';
	   stringFunctions::printThis($text);
	  $len=strtoupper($text1);
	  stringFunctions::printThis($len);

	  $text='<h1>To convert string to lowercase<h1><br>';
	  stringFunctions::printThis($text);
	  $len=strtolower($text1);
	  stringFunctions::printThis($len);

   	  $text='<h1>To repeat string function<h1><br>';
	  stringFunctions::printThis($text);
	  $len=str_repeat($text1);
	  stringFunctions::printThis($len);









     }
  }

  class arrayFunctions {
     static public function printArray($myArray) {
       print_r ($myArray);
     }
  }

?>
