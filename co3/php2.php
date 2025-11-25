<?php
    $number=153;
    $num_array=str_split(strval($number));

    $sum=0;

    for($i=0;$i<count($num_array);$i++){
        $sum+=(int)$num_array[$i]**3;
    }

    if($sum==$number){
        print("it is a amstrong number");
    }else{
        print("it is not a amstrong number");
    }

