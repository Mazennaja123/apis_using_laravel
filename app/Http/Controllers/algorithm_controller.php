<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class algorithm_controller extends Controller
{

    //Sort String case sensitive with numbers
    function get_sorted_string($unsorted_string){

                   $s1 =[];
                   $s2=[];
                   $i=0;
                   $size=strlen($unsorted_string);
                   for($i; $i<$size; $i++){
                          if($unsorted_string[$i].charCodeAt(0) > "a".charCodeAt(0) && unsorted_string[$i].charCodeAt(0) <= "z".charCodeAt(0))
                                $s1.push($unsorted_string[$i]);
                          if ($unsorted_string[$i].charCodeAt(0) > "A".charCodeAt(0) && unsorted_string[$i].charCodeAt(0) <= "Z".charCodeAt(0))
                                $s2.push($unsorted_string[$i]);
                      }
                  //sorting the arrays for further comparison
                  $s1.sort();
                  $s2.sort();

                  $j=0;
                  $i=0;
                  $k=0;
                  //Sort the arrays as needed in terms of case sensitivity
                  for($k=0;$k<$unsorted_string.count();$k++){

                          if($unsorted_string[$k].charCodeAt(0) > "a".charCodeAt(0) && $unsorted_string[$k].charCodeAt(0) <= "z".charCodeAt(0))
                           {
                                $unsorted_string[$k]=$s1[$i];
                                $i++;
                           }

                           elseif ($unsorted_string[$k].charCodeAt(0) > "A".charCodeAt(0) && $unsorted_string[$k].charCodeAt(0) <= "Z".charCodeAt(0))
                            {
                                 $unsorted_string[$k]=$s2[$j];
                                 $j++;
                            }
                  }

                  return $unsorted_string.join("");
                }


}
