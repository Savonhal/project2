<?php 
    session_start();

    require '../../game_logic/showStats.php';
    require '../../game_logic/levelUp.php';

    $monster = [
        "name" => "Specter",
        "hp" => 50,
        "maxHP" => 50,
        "atk" => 9,
        "def" => 7,
        "spd" => 9,
        "monExp" => 200,
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
            echo"<p>You dance around the specter, dodging its spectral attacks and retaliating with strikes of your own. Each blow chips away at its ethereal form, driving it back with every swing of your sword.</p>";
            echo"<p>Finally, with a final, decisive blow, you deliver the finishing strike, your sword piercing through the specter's incorporeal body with a burst of blinding light. With a haunting wail, the specter dissipates into the ether.</p>";
            echo"<p>As the echoes of battle fade into silence, you stand victorious amidst the remnants of the spectral foe.</p>";
            echo"<p></p>";

            levelUp($monster['monExp']);


            //echo where the player can go next
            echo"
                <ul>
                    <li><a href='explore.php'>Continue</a></li>
                    <li><a href='rest.php'>Seek solace in solitude</a></li>
                </ul>
            ";
        }else{
            //echo a description of how player was defeated/dead here
            echo"<p>
                Despite your best efforts to evade, you find yourself overwhelmed by the relentless onslaught, your shield buckling under the force of the spectral attacks.
                With each passing moment, your strength begins to wane, your movements growing sluggish as exhaustion takes its toll. The specter presses its advantage, its attacks growing more ferocious with every passing moment.
                Desperation sets in as you realize the futility of your efforts.
                With a final, bone-chilling wail, the specter unleashes a devastating attack, its ghostly energy engulfing you in a blinding maelstrom of pain and despair.
                You have died...
            </p>";
            echo"
                <ul>
                    <li><a href='index.html'>Create a new Character?</a></li>
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
                <img src='../../images/enemy/specter.jpg' style='width:200px;length:100px'alt='specter picture'>
                <div class='right'>
                    <h2>".$monster['name']."</h2>
                    <h5>
                    'These ethereal entities manifest as twisted echoes of their former selves, their spectral forms flickering with an eerie luminescence that pierces the darkness like a beacon of otherworldly dread.'
                    </h5>
                    <p>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                    <p>Attack:".$monster['atk']."</p>
                    <p>Defense:".$monster['def']."</p>
                    <p>Speed:".$monster['spd']."</p>
                    <p>exp:".$monster['monExp']."</p>
                </div>
            </div>
        ";

        $minimumDamage = 1;
        while(($monster['hp'] > 0) && ($_SESSION['player']['hp'] > 0)){
            $userRoll = rand(1,6) + $_SESSION['player']['spd'];
            $monsterRoll = rand(1,6) + $monster['spd'];
            
            if($userRoll >= $monsterRoll){
                //Player attacks monster first
                $playerDMG = max($_SESSION['player']['atk'] + rand(1, 6) - $monster['def'], $minimumDamage);
                $monster['hp'] -= $playerDMG;
                echo "<p>".$_SESSION['player']['name']." attacks ".$monster['name']." for ".$playerDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                if($monster['hp'] <= 0){
                    $winBattle = true;
                    echo "<p>The ".$monster['name']." has died!\n</p>";
                    break;
                }
                
                $monDMG = max($monster['atk'] + rand(1, 6) - $_SESSION['player']['def'], $minimumDamage);
                $_SESSION['player']['hp'] -= $monDMG;
                echo "<p>".$monster['name']." counters ".$_SESSION['player']['name']." for ".$monDMG.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                if($_SESSION['player']['hp'] <= 0){
                    $winBattle = false;
                    echo "<p>You've died..</p>";
                    break;
                }
                
            }else if($monsterRoll > $userRoll){
                //Monster attacks first
                $monDMG = max($monster['atk'] + rand(1, 6) - $_SESSION['player']['def'], $minimumDamage);
                $_SESSION['player']['hp'] -= $monDMG;
                echo "<p>".$monster['name']." counters ".$_SESSION['player']['name']." for ".$monDMG.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                if($_SESSION['player']['hp'] <= 0){
                    $winBattle = false;
                    echo "<p>You've died..\n</p>";
                    break;
                }
                
                $playerDMG = max($_SESSION['player']['atk'] + rand(1, 6) - $monster['def'], $minimumDamage);
                $monster['hp'] -= $playerDMG;
                echo "<p>".$_SESSION['player']['name']." attacks ".$monster['name']." for ".$playerDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                if($monster['hp'] <= 0){
                    $winBattle = true;
                    echo "<p>The ".$monster['name']." has died!\n</p>";
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
    <title>Document</title>
</head>
<body>
    
    <div class="box">
        <div class="battleBox">
            <h3>Battle Log:</h3>
           
            
                
                
            
            <?= battle();?>
        </div>
        <div class="textbox caverns">
            <p>
                The specter lets out a chilling wail, its unearthly voice reverberating through the air like a banshee's lament. 
                Wisps of ethereal energy lash out at you, but you deflect them with your shield, the ancient metal groaning under the strain.
            </p>
            <p>
                With a defiant shout, you charge forward, your rusty sword held aloft and your battered shield raised in defense.
                With a swift strike of your sword, you lunge at the specter, your blade cutting through the ghostly form with a satisfying hiss.
                The specter recoils, its translucent body flickering with agitation as it lashes out with renewed fury.
            </p>
            <?= outcome();?>
            
          
        </div>
        <div class="stats">
            <?= showStats(); ?>
        </div>
    </div>
</body>
</html>