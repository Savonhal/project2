<?php 
    session_start();

    require '../showStats2.php';
    require '../../game_logic/levelUp.php';
    require '../../game_logic/saveCharacterStats.php';

    $monster = [
        "name" => "Specter",
        "hp" => 50,
        "maxHP" => 50,
        "atk" => 9,
        "def" => 7,
        "spd" => 9,
        "monExp" => 100,
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
            echo"<p>You dance around the specters, dodging their fierce attacks and retaliating with strikes of your own.</p>";
            echo"<p>Within a decisive burst, you deliver the finishing strikes, your sword piercing through each specters incorporeal body with a burst of blinding light. With a haunting wail, the specters dissipates into the ether.</p>";
            echo"<p>As the echoes of battle fade into silence, you stand victorious amidst the remnants of your spectral foes, watching the remaining specters retreat.</p>";
            echo"<p>The battle ws surprisingly easy? You must be getting stronger from you previous encounters...</p>";

            levelUp($monster['monExp']);
            levelUp($monster['monExp']);
            levelUp($monster['monExp']);

            //echo where the player can go next
            echo"
                <ul>
                    <li><a href='../battleOutcome/mergedSoulsOutcome.php'>But before you could ruminate on your growing power, the remaining specters suddenly merged together...</a></li>
                </ul>
            ";
        }else{
            //echo a description of how player was defeated/dead here
            echo"<p>
                Despite your best efforts to evade, you find yourself overwhelmed by the relentless onslaught, your shield buckling under the force of the spectral attacks.
                With each passing moment, your strength begins to wane, your movements growing sluggish as exhaustion takes its toll. The specters presses their advantage, their attacks growing more ferocious with every passing moment.
                Desperation sets in as you realize the futility of your efforts.
                With a final, bone-chilling wail, the specters unleash a devastating attack, their ghostly energy engulfing you in a blinding maelstrom of pain and despair.
                You have died...
            </p>";
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
                <img class='enemyAnim'src='../../images/enemy/specter.jpg' style='width:200px;length:100px'alt='specter picture'>
                <div class='right'>
                    <h2>".$monster['name']."</h2>
                    <h5>
                    'These ethereal entities manifest as twisted echoes of their former selves, their spectral forms flickering with an eerie luminescence that pierces the darkness like a beacon of otherworldly dread.'
                    </h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                    <p><img src='../../images/icons/katana.png'>Attack:".$monster['atk']."</p>
                    <p><img src='../../images/icons/shield.png'>Defense:".$monster['def']."</p>
                    <p><img src='../../images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                    <p><img src='../../images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
                </div>
            </div>
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
                echo "<p>".$_SESSION['player']['name']." attacks a ".$monster['name']." for ".$playerDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crimson+Text">
    <title>Battle with the Specters</title>
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
        <div class="textbox ghost_town">
            <h2>Encounter with the Specters</h2>
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2 2)</h2>
            <h2>Old Havenwood</h2>
            <h4>
               "Nestled within the depths of the Draconian Woodlands, Old Havenwood was once a thriving settlement teeming with life and vibrancy.
               Now, Old Havenwood stands as a haunting reminder of its former glory, its once bustling streets now overgrown with tangled vines and creeping ivy. The echoes of laughter and song have long since faded, replaced by an eerie silence broken only by the whispering winds and the occasional murmuring of the undead."
            </h4>
            <h3>Battle Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/sento.mp3" type="audio/mpeg">
            </audio>
            
            <p>
                The specters lets out a chilling wail, its unearthly voice reverberating through the air like a banshee's lament. 
                Wisps of ethereal energy lash out at you, but you deflect them with your shield.
            </p>
            <p>
                With a defiant shout, you charge forward, your sword held aloft and your shield raised in defense.
                With a swift strike of your sword, you lunge at the specters, your blade cutting through their ghostly form with a satisfying hiss.
                The specters recoil, their translucent body flickering with agitation as it lashes out with renewed fury. 
            </p>
            <?= outcome();?>
            
          
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='enemyAnim3' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='pog picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"I don't have a good feeling about this one.."</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>