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
        $levelUpThreshold = $baseThreshold * (pow($scalingFactor, $_SESSION['player']['lvl']-1));

        //Checks to see if player can level up
        while($_SESSION['player']['exp'] >= $levelUpThreshold){
            //Responsible for scaling
            $levelUpThreshold = $baseThreshold * (pow($scalingFactor, $_SESSION['player']['lvl']-1));
            $prevLvl = $_SESSION['player']['lvl'];
            $_SESSION['player']['lvl']++;
            
            echo "<p>You Leveled up from ".$prevLvl." to ".$_SESSION['player']['lvl'].".</p>";

            //restore hp(40%) on level up
            $recoveredHP = (round($_SESSION['player']['maxHP'] * .4) + $_SESSION['player']['hp']) >  $_SESSION['player']['maxHP'] ?  
                $_SESSION['player']['maxHP']-$_SESSION['player']['hp'] : round($_SESSION['player']['maxHP'] * .4);
            $_SESSION['player']['hp'] += $recoveredHP;
            echo "<p>You've recovered ".$recoveredHP."  HP.</p>";

            echo "<p>Your Stats increased.</p>";
            //increase hp stat
            $hpGain = $baseMaxHPIncrease + round($_SESSION['player']['lvl']*0.5);
            $prevHP = $_SESSION['player']['maxHP'];
            $_SESSION['player']['maxHP'] += $hpGain;
            echo "<p>Max HP: ". $prevHP." -> ". $_SESSION['player']['maxHP']."</p>";

            //increase attack
            $atkGain = $baseAtkIncrease + round($_SESSION['player']['lvl']*0.5);
            $prevAtk = $_SESSION['player']['atk'];
            $_SESSION['player']['atk'] += $atkGain;
            echo "<p>Attack: ". $prevAtk." -> ". $_SESSION['player']['atk']."</p>";

            $defGain = $baseDefIncrease + round($_SESSION['player']['lvl']*0.5);
            $prevDef = $_SESSION['player']['def'];
            $_SESSION['player']['def'] += $defGain;
            echo "<p>Defense: ". $prevDef." -> ". $_SESSION['player']['def']."</p>";

            $spdGain = $baseSpdIncrease + round($_SESSION['player']['lvl']*0.5);
            $prevSpd =$_SESSION['player']['spd'];
            $_SESSION['player']['spd'] += $spdGain;
            echo "<p>Speed: ". $prevSpd." -> ". $_SESSION['player']['spd']."</p>";

            
            //$_SESSION['player']['exp'] -= max($levelUpThreshold, 0);
            $_SESSION['player']['exp'] = max($_SESSION['player']['exp']-$levelUpThreshold, 0);

            $_SESSION['player']['expThreshold'] = $levelUpThreshold;
            
            
            
        }
    }


?>