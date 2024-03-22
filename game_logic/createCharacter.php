<?php

    function createCharacter($name){
        $_SESSION['player']['name'] = $name;
        $_SESSION['player']['lvl'] = 1;
        $_SESSION['player']['exp'] = 0;
        $_SESSION['player']['expThreshold'] = 100 * pow(1.2, 1-1);
        $_SESSION['player']['maxHP'] = 100;
        $_SESSION['player']['hp'] = 100;
        $_SESSION['player']['atk'] = rand(5,15);
        $_SESSION['player']['def'] = rand(5,15);
        $_SESSION['player']['spd'] = rand(5,15);
    }


?>