<?php
    $string="ajay";
    $string_arr=str_split($string);
    $reversed=[];

    for($i=count($string_arr)-1;$i>=0;$i--){
        array_push($reversed,$string_arr[$i]);
    }

    if ($string_arr==$reversed) {
       print("It is a palindrome string");
    }else{
        print("It is not a palindrome string");
    }
