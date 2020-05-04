<?php
    function mixedWords($word){
        $a = strtolower($word);
        $b = strtoupper($word);
        
        echo "($a, $b)";

    }

    mixedWords("stAndYouRfoRM");
?>
