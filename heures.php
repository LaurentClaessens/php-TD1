<?php
 echo 'Bonjour, il est ',date("H"), " heures " ,date("m")," minutes" ; 
?>            

<?php   
    $d = getdate();
    $hour = $d['hours'];
    $minute = $d['minutes'];
    echo "$hour";
    echo "$minute ";
    if ($hour<12)
    {
        echo "$hour", "avant";
    }
    else
    {
        echo "$hour", "après";
    }
?>            
