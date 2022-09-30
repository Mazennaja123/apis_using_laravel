<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class algorithm_controller extends Controller
{
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Sort String case sensitive with numbers
    function get_sorted_string($unsorted_string){

                   $s1 =[];
                   $s2=[];
                   $i=0;
                   $size=strlen($unsorted_string);
                   for($i; $i<$size; $i++){
                          if($unsorted_string[$i].ord(0) > "a".ord(0) && $unsorted_string[$i].ord(0) <= "z".ord(0))
                                $s1.array_push($unsorted_string[$i]);
                          if ($unsorted_string[$i].ord(0) > "A".ord(0) && $unsorted_string[$i].ord(0) <= "Z".ord(0))
                                $s2.array_push($unsorted_string[$i]);
                      }
                  //sorting the arrays for further comparison
                  $s1.sort();
                  $s2.sort();

                  $j=0;
                  $i=0;
                  $k=0;
                  //Sort the arrays as needed in terms of case sensitivity
                  for($k=0;$k<$unsorted_string.count();$k++){

                          if($unsorted_string[$k].ord(0) > "a".ord(0) && $unsorted_string[$k].ord(0) <= "z".ord(0))
                           {
                                $unsorted_string[$k]=$s1[$i];
                                $i++;
                           }

                           elseif ($unsorted_string[$k].ord(0) > "A".ord(0) && $unsorted_string[$k].ord(0) <= "Z".ord(0))
                            {
                                 $unsorted_string[$k]=$s2[$j];
                                 $j++;
                            }
                  }

                  return $unsorted_string.join("");
                }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Place number values
    function place_number_value($number)
    {

        $final_result=[];
        $modulo_number=10;
        $size=strlen($number);
        //Go to each loop and subtract the thousands from the hundreds ,etc. Then save them in Final result array
        $i=1;
        for($i;$i<=$size;$i++){
          if($size==1 or $i==1)
              $final_result[$i-1]=$number%10^$i;
          elseif($size==2 or $i==2)
              $final_result[$i-1]=($number%10^$i)-($number%10^($i-1));
          else{
              for ($j=1; $j<$i ; $j++) {
                $final_result[$i-1]= ($number%10^$i)-($number%10^$j);
              }
          }
        }
          return response()->json([
              "status" => "Success",
              "number_places" => $final_result,
              "size"=>$size
          ]);

          }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //prefix notation
      function prefix_notation($notation)
      {

        $stack=[];
        $i=strlen($notation)-1;

        While($i>=0)
        {
            if (isOperator($notation[i])==false)
            {
                $stack.append($notation[i]);
                $i-=1;
            }
            else
                {
                  $eq="(" + $stack.pop() + $notation[i] + $stack.pop() + ")";
                }
        }
        return response()->json([
            "status" => "Success",
            "Prefix notation" => $stack.pop(),
        ]);



      }

      //check if it is an operator
    function isOperator($o)
      {
        if ( $o=="*" or $o=="+" or $o=="/" or $o=="^" or "(" or $o==")")
            return response()->json(True);

        else return response()->json(false);

      }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




}
