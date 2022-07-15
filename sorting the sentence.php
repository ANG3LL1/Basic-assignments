<?php
	 function sortTheSent ($s){
	   $string_array = array(explode ("", $s ));
	   $sentence_arr = array();
	      
	      foreach ($string_array[0] as $value) {
	        $int_array = substr($value, -1);
	        $sentence_arr [$int_array] = str_replace ($value, "", -1);
	      }
	      $sentence = [];
	 }
	  foreach ($sentence_arr as $index => $val) {
	    $sentence [ $index - 1] = $val;
	  }
	  $sentence = [];
	  $limit = count ($sentence);
	  
	   for ($i = 0; $i < $limit; ++$i) {
	     if ($i == $limit)
	     {
	       $sentence [$i] = $sentence [$i];
	       break;
	     }
	     $sentence[$i] = $sentence[$i];
	   }
	   $results = implode("" , $sentence);
	   return $results;
	   
   
?>