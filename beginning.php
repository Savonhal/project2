<?php
    session_start();
    

    function createCharacter($name){
        $_SESSION['player']['name'] = $name;
        $_SESSION['player']['hp'] = 100;
        $_SESSION['player']['atk'] = rand(5,15);
        $_SESSION['player']['def'] = rand(5,15);
        $_SESSION['player']['spd'] = rand(5,15);
    }

    function showStats(){
        echo"
        <h3>Character Stats:</h3>
        <h4>".$_SESSION['player']['name']."</h4>
        <ul>
            <li>Health Points (HP): ".$_SESSION['player']['hp'] . "</li>
            <li>Strength:".$_SESSION['player']['atk'] ."</li>
            <li>Strength:".$_SESSION['player']['def'] ."</li>
            <li>Speed:".$_SESSION['player']['spd']."</li>
        </ul>";
    }
    
    if(!isset($_SESSION['player'])){
        createCharacter($_GET['name']);
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="textbox.css">
    <title>The Beginning</title>
</head>
<body>
    <div class="visuals">

    </div>
    <div class="box">
        <div class="textbox caverns">
            <p>You awaken in a desolate land, shrouded in darkness. Your memories are fragmented, and the air is thick with a sense of dread.</p>
            <p>Desolation stretches out before you, a bleak expanse of twisted shadows and jagged silhouettes that claw at the edges of your vision. The landscape is barren, devoid of life or color, its desiccated soil cracked and parched beneath an indifferent sky.</p>
            <p>As you stand amidst the desolation, a sense of dread coils like a serpent within the pit of your stomach, its venomous whispers echoing in the recesses of your mind. </p>
            <p>You are alone, adrift in a sea of darkness and uncertainty, with no beacon to guide your way through the shadows that threaten to consume you whole.</p>
            <p>Your fingers instinctively reach out, grasping the worn hilt of a rusty sword and the battered surface of a weather-beaten shield. Though time and neglect have left their marks upon these implements of defense, they remain steadfast companions in this desolate land.</p>
            <p>With these humble tools in hand, you stand ready to face whatever challenges lie ahead, your grip firm and your resolve unyielding.</p>
            <p>Though the odds may be stacked against you, you are determined to carve a path through the shadows, one swing of your sword and one deft parry of your shield at a time.</p>
            <p>What will you do in this forsaken place?</p>
            <ul>
                <li><a href="explore.php">Explore the unknown</a></li>
                <li><a href="fight.php">Confront the darkness</a></li>
                <li><a href="rest.php">Seek solace in solitude</a></li>
            </ul>
        </div>
        <div class="stats">
            <?= showStats() ?>
        </div>
    </div>
   
    <?php ?>
</body>
</html>