<?php
    /*This version of showStats exists so that the images in the stats can properly appear in the events directory*/
    function showStats(){
        echo"
        <h3>Character Stats:</h3>
        <h4>".$_SESSION['player']['name']."</h4>
        <p>LVL: ".$_SESSION['player']['lvl']."</p>
        <p>EXP: ".round($_SESSION['player']['exp'])."/".round($_SESSION['player']['expThreshold'])."</p>
        <p><img src='../../images/icons/hearts.png'> HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP'] ."</p>
        <p><img src='../../images/icons/katana.png'> Attack:".$_SESSION['player']['atk'] ."</p>
        <p><img src='../../images/icons/shield.png'>Defense:".$_SESSION['player']['def'] ."</p>
        <p><img src='../../images/icons/sprint.png'>Speed:".$_SESSION['player']['spd']."</p>";
    }

?>