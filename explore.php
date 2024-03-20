<?php
    session_start();

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

  
    function event(){
        //$random_event= rand(1,6);
        $exploration_text = array(
            "You tread cautiously through the darkness, every step echoing ominously in the desolate void.",
            "A cold wind whispers through the shadows, carrying with it the faint scent of decay.",
            "A distant howl pierces the silence and rends through the tranquility, its mournful cry echoing across the desolate landscape",
        );

        $random_index = array_rand($exploration_text);
        $event_description = $exploration_text[$random_index];
        echo"<p>". $event_description."</p>";
        switch($random_index){
            case 0:
                echo"<p>You stumble upon a hidden cache of supplies, providing a brief respite from the encroaching darkness.</p>";
                echo"<img src='./images/background/treasure_cache.jpg'>";
                echo"<p>A sense of relief washes over you, infusing your weary frame with renewed vigor. Each morsel consumed grants you vitality, knitting wounds and fortifying your resolve.</p>";
                echo"<p> Your muscles tense with newfound power, your movements honed with sharpened precision. </p>";
                if(!$_SESSION['player']['hp'] === 100){
                    $_SESSION['player']['hp'] += 30;
                    echo"<p>You've restored some health</p>";
                }
                $_SESSION['player']['atk'] += rand(1,10);
                $_SESSION['player']['def'] += rand(1,10);
                $_SESSION['player']['spd'] += rand(1,10);
                echo"<p>Your attack increased.</p>";
                echo"<p>Your defense increased.</p>";
                echo"<p>Your speed increased.</p>";
                echo"<p>You emerge from the cache, heart steeled and spirit ablaze, ready to confront the perils that await beyond.</p>";
                break;
            case 1:
                echo "<img src='./images/enemy/specter.jpg' style='width:200px;length:100px' alt='specter picture'>";
                echo"<p>A spectral apparition materializes before you, its eyes burning with an otherworldly fire.</p>";
                echo"<p>You instinctively recoil, feeling the chill of its presence seeping into your bones.</p>";
                echo"<p>Every fiber of your being is poised for action, muscles coiled tight as bowstrings, ready to either confront the otherworldly entity or slip past it like a shadow in the night.</p>";
                echo"<p>You attempt cautiously navigate around it, avoiding its gaze.</p>";
                echo"<a href='./events/specter.php'><p>Did you succeed?</p></a>";
                echo"<p></p>";
                echo"<p></p>";
                break;
            case 2:
                echo"<p> Suddenly, a glint of movement catches your eye—a flicker of shadow darting between the gnarled roots of a nearby tree. You freeze, heart pounding in your chest as you strain to discern the source of the disturbance.</p>";
                echo"<p>You brace yourself against the encroaching darkness, knowing that within its depths lies a creature driven by base instinct, its eyes gleaming with a predatory hunger that knows no mercy. </p>";
                echo"<p>And then you see it: a small figure emerges from the underbrush, its form hunched and scrawny, its eyes gleaming with a feral intensity. It is a kobold, its canine-like features twisted into a snarl of aggression as it fixes its gaze upon you.</p>";
                echo"<img src='./images/enemy/kobold.jpg' style='width:200px;length:100px'alt='kobold picture'>";
                echo"<p>Despite its diminutive stature, there is an undeniable menace to the kobold's presence, a primal aura that speaks of cunning and savagery honed through countless generations of survival in the harsh wilderness.</p>";
                echo"<p>The kobold watches you with a mixture of defiance and hunger, its stance poised for attack as it waits for the first move to be made.</p>";
                echo"<a href='./events/kobold.php'><p>You ready your weapon knowing that this encounter could turn deadly at any moment.</p></a>";
                echo"<p></p>";
                echo"<p></p>";
                break;
            default:
                break;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="textbox.css">
    <title>Exploring the Unknown</title>
</head>
<body>
<div class="box">
        <h2>Exploring the Unknown</h2>
        
        <div class="textbox">
            <?= event() ?>
        </div>
        <div class="stats">
            <?= showStats() ?>
        </div>
    </div>
</body>
</html>