<?php

  $obj = new main();

  class main {

    public function __construct() {
      //  $i=0;
       $text = "program  started<br>";
       echo "$text";
      // $text = "<h1>String Function Demonstration</h1><br>";
      // stringFunctions::printThis($text);
      // $text1 = "Sample string to work<br>";
      // stringFunctions::printThis($text1);
       stringFunctions::otherfunctions();
      // $text = "<h1>Array Function Demonstration-ARRAY</h1><br>";
      // stringFunctions::printThis($text);
      // $myArray = array(1,2,3,4,5);
      // arrayFunctions::printArray($myArray);
       //stringFunctions::printThis($text);
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

	static public function printThisline() {
	       $text='<hr><br>';
	       print($text);
	 }
	
     

     static public function otherfunctions(){
        $text1 = "Sample string to work";
	$text='<h3>To print length of string<h3><br>';
	stringFunctions::printThis($text);
	$len=strlen($text1);
	stringFunctions::printThis($len);
	stringFunctions::printThisline();
	

	 $text='<h3>To print number of words in string<h3><br>';
	 stringFunctions::printThis($text);
	 $len=str_word_count($text1);
	 stringFunctions::printThis($len);
	 stringFunctions::printThisline();


	  $text='<h3>To reverse  string<h3><br>';
	  stringFunctions::printThis($text);
	  $len=strrev($text1);
	  stringFunctions::printThis($len);
	  stringFunctions::printThisline();


	  $text='<h3>To convert string to uppercase<h3><br>';
	   stringFunctions::printThis($text);
	  $len=strtoupper($text1);
	  stringFunctions::printThis($len);
	  stringFunctions::printThisline();


	  $text='<h3>To convert string to lowercase<h3><br>';
	  stringFunctions::printThis($text);
	  $len=strtolower($text1);
	  stringFunctions::printThis($len);
	  stringFunctions::printThisline();

   	  $text='<h3>To repeat string function<h3><br>';
	  stringFunctions::printThis($text);
	  $len=str_repeat($text1,3);
	  stringFunctions::printThis($len);
	  stringFunctions::printThisline();

	  $text='<h3>To compare string<h3><br>';
	  $tesxt2='Hi';
	  stringFunctions::printThis($text);
	  $len=strcmp($text1,$text2);
	  stringFunctions::printThis($len);
	  stringFunctions::printThisline();

	  $text='<h3>To replace string<h3><br>';
	  stringFunctions::printThis($text);
	  $len=str_replace("Sample","example",$text1);
	  stringFunctions::printThis($len);
	  stringFunctions::printThisline();

	   $text='<h3>To explode string<h3><br>';
	   stringFunctions::printThis($text);
	   print_r(explode(" ",$text1));
	  stringFunctions::printThisline();

	   $text='<h3>To pad string<h3><br>';
	   stringFunctions::printThis($text);
	   $len=str_pad($text1,25,"-",str_pad_left);
	   stringFunctions::printThis($len);
	   stringFunctions::printThisline();

     }
  }
  

  class arrayFunctions {
     static public function printArray($myArray) {
       print_r ($myArray);
     }
  }

?>
