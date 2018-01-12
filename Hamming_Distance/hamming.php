<?php

/*
 * In information theory, the Hamming distance between two strings of equal length is the number 
 * of positions at which the corresponding symbols are different.
 *
 * Examples - The Hamming distance between:
 *
 * "karolin" and "kathrin" is 3.
 * 1011101 and 1001001 is 2.
 * 2173896 and 2233796 is 3.
 *
 */


function distance($a, $b)
{
	    
	 if (strlen($a) != strlen($b)){
	     throw new InvalidArgumentException('DNA strands must be of equal length.');
				            }

	else{   

	     $dh = 0;
	     $a1 = str_split($a);
	     $b1 = str_split($b);

	     
	     for($i=0; $i < count($a1); $i++){

	  	if($a1[$i] != $b1[$i]){
			
			$dh++;																									       	}
																
				}




					 				
	}	

	 return $dh;
		     
}
