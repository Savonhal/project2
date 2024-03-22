<?php

    function showStats(){
        echo"
        <h3>Character Stats:</h3>
        <h4>".$_SESSION['player']['name']."</h4>
        <ul>
            <li>LVL: ".$_SESSION['player']['lvl']."</li>
            <li>EXP: ".round($_SESSION['player']['exp'])."/".round($_SESSION['player']['expThreshold'])."</li>
            <li>HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP'] ."</li>
            <li>Attack:".$_SESSION['player']['atk'] ."</li>
            <li>Defense:".$_SESSION['player']['def'] ."</li>
            <li>Speed:".$_SESSION['player']['spd']."</li>
        </ul>";
    }

?>