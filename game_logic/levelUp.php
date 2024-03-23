<?php

    function levelUp($monExp){
        $baseThreshold = 100;
        $scalingFactor = 1.2;

        $baseMaxHPIncrease = rand(10,20);
        $baseAtkIncrease = rand(2,5);
        $baseDefIncrease = rand(2,5);
        $baseSpdIncrease = rand(2,5);

        //Player gains exp
        $_SESSION['player']['exp'] += $monExp;
        echo "<p>You've gained ".$monExp." exp!</p>";

        //Responsible for scaling
        $levelUpThreshold = $baseThreshold * pow($scalingFactor, $_SESSION['player']['lvl']-1);

        //Checks to see if player can level up
        while($_SESSION['player']['exp'] >= $levelUpThreshold){
            //Responsible for scaling
            $levelUpThreshold = $baseThreshold * pow($scalingFactor, $_SESSION['player']['lvl']-1);
            $prevLvl = $_SESSION['player']['lvl'];
            $_SESSION['player']['lvl']++;
            
            //increase stats and restore hp on level up
            $_SESSION['player']['maxHP'] += $baseMaxHPIncrease;
            $_SESSION['player']['hp'] = $_SESSION['player']['maxHP'];
            $_SESSION['player']['atk'] += $baseAtkIncrease;
            $_SESSION['player']['def'] += $baseDefIncrease;
            $_SESSION['player']['spd'] += $baseSpdIncrease;

            $_SESSION['player']['exp'] -= $levelUpThreshold;
            $_SESSION['player']['expThreshold'] = $levelUpThreshold;
            
            echo "<p>You Leveled up from ".$prevLvl." to ".$_SESSION['player']['lvl'].".</p>";
            echo "<p>You've recovered your HP.</p>";
            echo "<p>Your Stats increased.</p>";
        }
    }


?>