<?php

  $obj = new main();

  class main {

    public function __construct() {
       $text = "program  started<br>";
       echo "$text";
      // $text = "<h1>String Function Demonstration</h1><br>";
     // $stringFunctions::printThis($text);
     // $text1 = "Sample string to work<br>";
     // stringFunctions::printThis($text1);
       stringFunctions::otherfunctions();
      $text = "<h1>Array Function Demonstration</h1><br>";
      stringFunctions::printThis($text);
      $myArray = array(3,2,1,5,4);
      arrayFunctions::printArray($myArray);
      arrayFunctions::otherfunctions();
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
	   $len=str_pad($text1,25,"_");
	   stringFunctions::printThis($len);
	   stringFunctions::printThisline();

     }
  }
  

  class arrayFunctions {
     static public function printArray($myArray) {
       print_r ($myArray);
     }

     static public function printThisline() {
        $text='<hr><br>';
	print($text);
	 }
	
	static public function otherfunctions(){
		$text='<h3>To sort array<h3><br>';
		 stringFunctions::printThis($text);
		$len=sort($myArray);
		arrayFunctions::printArray($len);
		arrayFunctions::printThisline();

		 $text='<h3>To reverse sort array<h3><br>';
		  stringFunctions::printThis($text);
		$len=rsort($myArray);
		arrayFunctions::printArray($len);
		arrayFunctions::printThisline();








	}



  }

?>
