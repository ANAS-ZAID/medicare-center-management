<?php function words(string $word, int $len=0 , string $end='...'){
    if (strlen($word) < $len) {
       echo $word ;
       echo $end ='';
    }else {
        for ($i=0; $i <$len ; $i++) { 
           echo $word[$i] ;
        }
        echo $end;
    }
    
}