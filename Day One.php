<?php
    function divisible($num){
        if(!preg_match('/^[0-9]*$/', $num)){  //makes sure the input of the function is a number
            echo "Your input should be a number";
        }else{
            for($i = 1; $i < $num; $i++){ //loops through to get the numbers
                if($num % $i == 0){
                    echo $i . "\n";
                }
            }
        }
    };

    divisible(35); //calls the function
?>
