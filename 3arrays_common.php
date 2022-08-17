<?php
// Given 3 arrays in increasing order. Find the elements that are common in all the 3
// arrays.
// Input;
// Array1 = [10,11,12,13,14,15]
// Array2 = [12,13,14,15,16]
// Array3 = [14,15,16,17,18]
// PHP program to print common elements
// in three arrays
 
// This function prints common elements
// in ar1
function findCommon( $ar1, $ar2, $ar3,
                         $n1, $n2, $n3)
{
     
    // Initialize starting indexes for
    // ar1[], ar2[] and ar3[]
    $i = 0; $j = 0; $k = 0;
 
    // Iterate through three arrays while
    // all arrays have elements
    while ($i < $n1 && $j < $n2 && $k < $n3)
    {
         
        // If x = y and y = z, print any
        // of them and move ahead in all
        // arrays
        if ($ar1[$i] == $ar2[$j] &&
                      $ar2[$j] == $ar3[$k])
        {
            echo $ar1[$i] , " ";
            $i++;
            $j++;
            $k++;
        }
 
        // x < y
        else if ($ar1[$i] < $ar2[$j])
            $i++;
 
        // y < z
        else if ($ar2[$j] < $ar3[$k])
            $j++;
 
        // We reach here when x > y and
        // z < y, i.e., z is smallest
        else
            $k++;
    }
}
 
// Driver program to test above function
    $ar1 = array(10,11,12,13,14,15);
    $ar2 = array(12,13,14,15,16);
    $ar3 = array (14,15,16,17,18);
    $n1 = count($ar1);
    $n2 = count($ar2);
    $n3 = count($ar3);
 
    echo "Common Elements are ";
     
    findCommon($ar1, $ar2, $ar3,$n1, $n2, $n3);
     

?>