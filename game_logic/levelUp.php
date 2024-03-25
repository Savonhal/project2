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
        $levelUpThreshold = $baseThreshold * round(pow($scalingFactor, $_SESSION['player']['lvl']-1));

        //Checks to see if player can level up
        while($_SESSION['player']['exp'] >= $levelUpThreshold){
            //Responsible for scaling
            $levelUpThreshold = $baseThreshold * round(pow($scalingFactor, $_SESSION['player']['lvl']-1));
            $prevLvl = $_SESSION['player']['lvl'];
            $_SESSION['player']['lvl']++;
            
            //increase stats and restore hp(40%) on level up
            $_SESSION['player']['maxHP'] += $baseMaxHPIncrease + round($_SESSION['player']['lvl']*0.5);
            $recoveredHP = (round($_SESSION['player']['maxHP'] * .4) + $_SESSION['player']['hp']) >  $_SESSION['player']['maxHP'] ?  
                $_SESSION['player']['maxHP']-$_SESSION['player']['hp'] : round($_SESSION['player']['maxHP'] * .4);
            $_SESSION['player']['hp'] += $recoveredHP;
            $_SESSION['player']['atk'] += $baseAtkIncrease + round($_SESSION['player']['lvl']*0.5);
            $_SESSION['player']['def'] += $baseDefIncrease + round($_SESSION['player']['lvl']*0.5);
            $_SESSION['player']['spd'] += $baseSpdIncrease + round($_SESSION['player']['lvl']*0.5);

            $_SESSION['player']['exp'] -= max($levelUpThreshold,0);
            $_SESSION['player']['expThreshold'] = $levelUpThreshold;
            
            echo "<p>You Leveled up from ".$prevLvl." to ".$_SESSION['player']['lvl'].".</p>";
            echo "<p>You've recovered ".$recoveredHP."  HP.</p>";
            echo "<p>Your Stats increased.</p>";
        }
    }


?>