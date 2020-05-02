<?php
    function palindrome($string){
        if($string  === strrev($string)){
            echo "TRUE";
        }else{
            echo "FALSE";
        }
    }

    palindrome("MALAM");
        
?>
