<?php
	 function getConcatenation($nums) {
	   $length = count($nums);
	   for ($i = 0; $i < count ($nums); $i++) {
	     $nums[$length + $i] = $nums[$i];
	   }
	 return $nums;
	 }
?>