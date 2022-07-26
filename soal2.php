<?php
// PHP program to implement
// recursive Binary Search
  
// A recursive binary search
// function. It returns location
// of x in given array arr[l..r] 
// is present, otherwise -1
function binarySearch($arr, $l, $r, $x, $c)
{
if ($r >= $l)
{
        $mid = ceil($l + $c + ($r - $l) / 2);
  
        if ($arr[$mid] == $x) 
            return floor($mid);
   
        if ($arr[$mid] > $x) 
            return binarySearch($arr, $l, 
                                $mid - 1, $x, $c);

        return binarySearch($arr, $mid + 1, 
                            $r, $x, $c);
}
  
return -1;
}
  
// Driver Code
$arr = array(1, 1, 1, 0 , 1, 1);
$n = count($arr);
$x = 1;
$c = 1;
$result = binarySearch($arr, 0, $n - 1, $x, $c);
if(($result == -1))
echo "Element is not present in array";
else
echo "Element is present at index ",
                            $result;

?>