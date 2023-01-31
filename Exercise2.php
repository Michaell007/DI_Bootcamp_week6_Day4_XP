<?php

    //Remove Specific Element
    $months = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
    
    $result = array_search("Mars", $months);
    if ($result) {
        array_splice($months, $result, 1);
    }

    foreach ($months as $key => $value) {
        echo $value."\n";
    }

?>