<?php

    function rest(){
        //Fully restore player hp to max
        $_SESSION['player']['hp'] =  $_SESSION['player']['maxHP'];
        echo "<p>You recovered all of your HP!</p>";
    }


?>