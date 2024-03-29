<?php

function saveCharacterStats($filename) {
   
    $currentCharacter = [];


    if (file_exists($filename)) {
       
        $existingData = file_get_contents($filename);

        $currentCharacter = json_decode($existingData, true);
    }
    
    $currentCharacter[] = $_SESSION['player'];

    $jsonData = json_encode($currentCharacter, JSON_PRETTY_PRINT);

    $result = file_put_contents($filename, $jsonData);

    return $result !== false;
}








?>
