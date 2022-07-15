<?php
	 class Solution {
	    function intersection($nums1, $nums2)
	    {
	      if (is_null($nums1) || is_null ($nums2)) {
	        return [];
	      }
	      return array_unique(array_intersect($nums1, $nums2));
	    }
	 }
?>