<?php
//Write a program to print all the LEADERS in an array. An element is leader if it is
// greater than all the elements to its right side. The rightmost element is always a leader.
// Create a new array with all the leaders from the input array.

// PHP Function to print
// leaders in an array 
function printLeaders($arr, $size)
{
    for ($i = 0; $i < $size; $i++)
    {
        for ($j = $i + 1;
             $j < $size; $j++)
        {
            if ($arr[$i] <=$arr[$j])
                break;
        } 
          
        // the loop didn't break
        if ($j == $size)
            echo($arr[$i] . " "); 
        }
}
  

// Driver Code
//
$arr = array(16, 17, 4, 3, 5, 2, 1, 2, 3, 4, 0);
$n = sizeof($arr);
printLeaders($arr, $n);