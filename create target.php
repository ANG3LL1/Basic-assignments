<?php
	 function createTargetArray ($nums , $index) {
	     
	     $target = [];
	     $i = 0;
	     
	     foreach ($index as $key => $val) {
	       array_splice ($target, $val, 0, $nums[$i]); 
	       $i++; 
	     }
	     return $target;
	 }
	   
?>


