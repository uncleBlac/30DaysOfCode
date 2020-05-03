<?php
    function santa($siblings, $sweets){
        if($sweets % $siblings === 0){
            echo "give away";
        }else{
            echo "eat them yourselves";
        }
    }

    santa(3, 9);
    
?>
