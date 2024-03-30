<?php 
    //left side of dragonRoute1 outcome
    session_start();

    require '../showStats2.php';
    require '../../game_logic/levelUp.php';
    require '../../game_logic/saveCharacterStats.php';

    $monster = [
        "name" => "Lesser Dragon",
        "hp" => 100 + round($_SESSION['player']['atk']*.3),
        "maxHP" => 100 + round($_SESSION['player']['atk']*.3),
        "atk" => 50 + round($_SESSION['player']['atk']*.1),
        "def" => 45 + round($_SESSION['player']['atk']*.2),
        "spd" => 85 + round($_SESSION['player']['atk']*.6),
        "monExp" => 320,
    ];

    //TODO Create battle sequence
    // Roll dice, loop or both?
    
    //Checks so see if player won the battle and then calls levelUp to check if player can level up
    //Also edit echo <p> under the if statement to give flavor text/aftermath of the battle
    $winBattle = true;
    function outcome(){
        global $winBattle;
        global $monster;
        if($winBattle){
            //echo the scenarion of battle and how the player defeated the monster.
            echo"<p>As you face off against the pack of lesser dragons, their reptilian eyes fixate on you with predatory intent. They move swiftly, darting in and out as they attempt to surround you. With each snarl, their sharp teeth glint in the sunlight, and their powerful wings create gusts of wind as they flap aggressively.</p>";
            echo"<p>You manage to keep your cool, wielding your weapon with precision as you fend off their attacks. Dodging and weaving, you anticipate their movements, striking whenever you find an opening. Your strikes land true, causing the smaller dragons to recoil and hiss in pain.</p>";
            echo"<p>Despite their ferocity, the lesser dragons begin to falter under your relentless assault. One by one, they retreat, sensing their imminent defeat. With a final, decisive blow, you dispatch the last remaining dragon, leaving the battlefield victorious.</p>";
            echo"<p>Pog cheers triumphantly, clapping you on the back with a grin. \"Well done, mate! That's how you handle a couple of pesky kobolds! They won't be botherin' us again anytime soon, that's for sure!\"</p>";
            levelUp($monster['monExp']);
            levelUp($monster['monExp']);
            levelUp($monster['monExp']);
            //echo where the player can go next
            echo"
                <ul>
                    <li><a href='../encounters/giantWormEncounter.php'>Continue exploring.</a></li>
                </ul>
            ";
        }else{
            //echo a description of how player was defeated/dead here
            echo"<p>
                The lesser dragons prove to be more formidable opponents than you initially anticipated. 
                Despite your best efforts to defend yourself, their coordinated attacks overwhelm you. 
                Their sharp claws tear through your defenses, leaving deep gashes in your armor.
            </p>";
            echo "<p>
                As you struggle to keep up with their relentless onslaught, you find yourself outnumbered and outmatched. 
                With each passing moment, your strength wanes, and the dragons press their advantage. 
                Despite your best efforts to fight back, you ultimately succumb to their ferocity, collapsing to the ground in defeat.
                With your vision growing dim, you watch helplessly as the lesser dragons circle around you, their triumphant roars echoing in your ears.
            </p>";
            echo "<p>You've died..</p>";
            echo"<img style='width:200px;length:100px' src='../../images/player/grave.png'>";
            saveCharacterStats('../../data.txt');
            echo"
                <ul>
                <li><a href='../../index.php'>Create a new Character?</a></li>
                </ul>
            ";
        }
    }

    //Copy and paste this for other files in the battleOutcome directory
    //Feel free to change rand values, $minimumDamage, and echo text to make it unique for some monsters 
    function battle(){
        global $winBattle;
        global $monster;
        echo"
        <div class='enemyStats tooltip'>
            <img class='enemyAnim1' src='../../images/enemy/lesser_dragon.jpg' style='width:200px;length:150px'alt='lesser_dragon picture'>
            <div class='right'>
                <h2>Lesser Dragon</h2>
                <h5>'Unlike their other kin, Lesser Dragons lack the intelligence that would qualify them as a sapient race. As such many other dragons view them no differently from other animals'</h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                    <p><img src='../../images/icons/katana.png'>Attack:".$monster['atk']."</p>
                    <p><img src='../../images/icons/shield.png'>Defense:".$monster['def']."</p>
                    <p><img src='../../images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                    <p><img src='../../images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
            </div>
        </div>
        <img  class='enemyAnim' src='../../images/enemy/lesser_dragon.jpg' style='width:200px;length:150px'alt='lesser_dragon picture'>
        <img  class='enemyAnim3' src='../../images/enemy/lesser_dragon.jpg' style='width:200px;length:150px;position:relative; left:70px;'alt='lesser_dragon picture'>
        ";
        echo"<h3> Battle Log: </h3>";
        $minimumDamage = 1;
        while(($monster['hp'] > 0) && ($_SESSION['player']['hp'] > 0)){
            $userRoll = rand(1,6) + $_SESSION['player']['spd'];
            $monsterRoll = rand(1,6) + $monster['spd'];
            
            if($userRoll >= $monsterRoll){
                //Player attacks monster first
                
                $playerDMG = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster['def'])) ,0);
                $monster['hp'] -= round($playerDMG);
                echo "<p>".$_SESSION['player']['name']." attacks ".$monster['name']." for ".$playerDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                if($monster['hp'] <= 0){
                    $winBattle = true;
                    echo "<p>One of the ".$monster['name']."s have died!\n</p>";
                    echo "<p>The other ".$monster['name']."s realizing their outmatched retreat one by one!</p>";
                    break;
                }
                
                $monDMG = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                $_SESSION['player']['hp'] -= round($monDMG);
                echo "<p>".$monster['name']." counters ".$_SESSION['player']['name']." for ".$monDMG.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                $monDMG2 = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                $_SESSION['player']['hp'] -= round($monDMG2);
                echo "<p>The second ".$monster['name']." counters ".$_SESSION['player']['name']." for ".$monDMG2.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                $monDMG3 = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                $_SESSION['player']['hp'] -= round($monDMG3);
                echo "<p>The third ".$monster['name']." counters ".$_SESSION['player']['name']." for ".$monDMG3.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                if($_SESSION['player']['hp'] <= 0){
                    $winBattle = false;
                    echo "<p>You've died..</p>";
                    break;
                }
                
            }else if($monsterRoll > $userRoll){
                //Monster attacks first
                $monDMG = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                $_SESSION['player']['hp'] -= round($monDMG);
                echo "<p>".$monster['name']." counters ".$_SESSION['player']['name']." for ".$monDMG.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                $monDMG2 = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                $_SESSION['player']['hp'] -= round($monDMG2);
                echo "<p>The second ".$monster['name']." counters ".$_SESSION['player']['name']." for ".$monDMG2.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                $monDMG3 = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                $_SESSION['player']['hp'] -= round($monDMG3);
                echo "<p>The third ".$monster['name']." counters ".$_SESSION['player']['name']." for ".$monDMG3.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                if($_SESSION['player']['hp'] <= 0){
                    $winBattle = false;
                    echo "<p>You've died..\n</p>";
                    break;
                }
                
                $playerDMG = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster['def'])) ,0);
                $monster['hp'] -= round($playerDMG);
                echo "<p>".$_SESSION['player']['name']." attacks ".$monster['name']." for ".$playerDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                if($monster['hp'] <= 0){
                    $winBattle = true;
                    echo "<p>The ".$monster['name']." has died!\n</p>";
                    echo "<p>The other ".$monster['name']."s realizing their outmatched retreat one by one!</p>";
                    break;
                }
            }
        }
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../textbox.css">
    <link rel="stylesheet" href="../../enemy.css">
    <link rel="stylesheet" href="../../encountersAnimation.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crimson+Text">
    <title>Lesser Dragon Encounter</title>
    <style>
        h2{
            font-family: 'Cardo';
        }
        p{
            font-family: 'Crimson Text';
        }
    </style>
</head>
<body>
    <div class="termina">
        <h1>Termina's Lament</h1>
    </div>
    <div class="box">
        <div class="battleBox">
            <h3>Encounter :</h3>
            <?= battle();?>
        </div>
        <div class="textbox peaks1">
            <h2>Battle with the Lesser Dragons</h2>
            <h3>Battle Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/sento.mp3" type="audio/mpeg">
            </audio>
    
            <p>
                With a screeching roar, the lesser dragons launch their attack, their claws slashing through the air as they descend upon the player and Seiryu with ruthless ferocity. 
                Caught off guard by the sudden onslaught, you react swiftly to defend yourself against the relentless assault of the creatures.
            </p>

            <?= outcome();?>
            
          
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='enemyAnim3_2' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='pog picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Dragonic Peaks but for what purpose?"</h5>
                    <p>"Keep dodgin', mate! We've almost got 'im on the ropes!"</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>