<?php 
    //left side of dragonRoute1 outcome
    session_start();

    require '../showStats2.php';
    require '../../game_logic/levelUp.php';

    $monster = [
        "name" => "Kobold",
        "hp" => 70,
        "maxHP" => 70,
        "atk" => 10,
        "def" => 5,
        "spd" => 25,
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
            echo"<p>But you refuse to yield, your determination fueling your every move. With each clash of steel, you press forward, gradually gaining ground against your elusive foes.</p>";
            echo"<p>With each swing of your weapon and deft maneuver, you gradually gain the upper hand, forcing the kobolds onto the defensive.</p>";
            echo"<p>With a final, decisive strike, you incapacitate one of the kobolds, leaving it sprawled on the forest floor, defeated. The remaining kobold, seeing its companion defeated, lets out a panicked yelp and flees into the shadows, disappearing into the depths of the forest.</p>";
            echo"<p>Pog cheers triumphantly, clapping you on the back with a grin. \"Well done, mate! That's how you handle a couple of pesky kobolds! They won't be botherin' us again anytime soon, that's for sure!\"</p>";
            levelUp($monster['monExp']);
            levelUp($monster['monExp']);

            //echo where the player can go next
            echo"
                <ul>
                    <li><a href='../place/dragonRoute2_1.php'>Continue exploring.</a></li>
                </ul>
            ";
        }else{
            //echo a description of how player was defeated/dead here
            echo"<p>
                With coordinated strikes and relentless aggression, the kobolds overwhelm you, leaving you battered and bruised on the forest floor.
                You attempt to raise your shield in defense, but the blow comes too fast, striking you squarely in the chest and knocking you off balance.
                Despite your best efforts, you find yourself unable to keep up with the their lightning-fast movements.
                With a final, decisive blow, their swords find their mark, piercing through your defenses and delivering a devastating strike.
                As darkness envelops your vision, you hear their triumphant howls echoing in the distance. 
                You have died...
            </p>";
            echo"<img style='width:200px;length:100px' src='../../images/player/grave.jpg'>";
            echo"
                <ul>
                li><a href='../../index.php'>Create a new Character?</a></li>
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
                <img class='enemyAnim3' src='../../images/enemy/kobold.jpg' style='width:200px;length:100px'alt='kobold picture'>
                <div class='right'>
                    <h2>".$monster['name']."</h2>
                    <h5>
                        'To encounter a kobold is to dance with danger, for they are not creatures of brute force but of guile. 
                        These diminutive creatures, often underestimated by the unwary, are the cunning survivors of the forest of Termina.'
                    </h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                    <p><img src='../../images/icons/katana.png'>Attack:".$monster['atk']."</p>
                    <p><img src='../../images/icons/shield.png'>Defense:".$monster['def']."</p>
                    <p><img src='../../images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                    <p><img src='../../images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
                </div>
            </div>
            <img class='enemyAnim3_2' src='../../images/enemy/kobold.jpg' style='width:200px;length:100px'alt='kobold picture'>
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
                    echo "<p>The other ".$monster['name']." scampers away yelping!</p>";
                    break;
                }
                
                $monDMG = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                $_SESSION['player']['hp'] -= round($monDMG);
                echo "<p>".$monster['name']." counters ".$_SESSION['player']['name']." for ".$monDMG.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                $monDMG2 = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                $_SESSION['player']['hp'] -= round($monDMG2);
                echo "<p>The second ".$monster['name']." counters ".$_SESSION['player']['name']." for ".$monDMG2.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
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
                    echo "<p>The other ".$monster['name']." scampers away yelping!</p>";
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
    <title>Kobold Encounter</title>
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
        <div class="textbox thicket">
            <h2>Battle with the Kobold</h2>
            <h3>Battle Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/sento.mp3" type="audio/mpeg">
            </audio>
    
            <p>
                The air crackles with tension as the two groups size each other up, each anticipating the other's next move.
                With a sudden burst of speed, the kobolds lunges forward, their swords slashing through the air with razor-sharp precision. 
                You react instinctively, parrying the attacks with your shield and countering with a swift strike of your sword.
            </p>
            <p>
                The kobolds dance nimbly around you, their movements fluid and unpredictable. 
                They feint and dodge, darting in and out of the shadows with uncanny agility, making it difficult for you to land a solid blow.
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