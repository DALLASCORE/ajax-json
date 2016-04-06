<?php

    $firstname="Антон";
   
    
    if(preg_match("/^[А-Яа-яЁё]+$/", $firstname, $a) ) 
    {
     
     echo "good";
        
        $firstname=mb_strtoupper($firstname);
    }

        $number="ryiowerk";
        $numder=(int)$number;
        
    echo $number;
        
    if(preg_match("/^[0-9]+$/", $number) )
    {
     
     echo "good";
        }

?>