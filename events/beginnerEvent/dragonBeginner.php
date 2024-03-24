<?php 
    session_start();

    require '../showStats2.php';
    require '../../game_logic/levelUp.php';

    $monster = [
        "name" => "Troll",
        "hp" => 150,
        "maxHP" => 150,
        "atk" => 45,
        "def" => 45,
        "spd" => 2,
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
            echo"<p>You dance around its attacks, using your agility to outmaneuver the lumbering beast while delivering precise strikes to its vulnerable points.</p>";
            echo"<p>With each exchange, the troll's strength begins to wane, its movements growing sluggish from the relentless assault. Sensing an opening, you unleash a flurry of strikes, each blow driving the creature closer to defeat.</p>";
            echo"<p>Finally, with a mighty swing of your sword, you deliver the decisive blow, cleaving through the troll's thick neck with a resounding crack. With a deafening roar, the creature collapses to the ground, defeated at last.</p>";
            echo"<p></p>";
            echo"<p></p>";
            levelUp($monster['monExp']);


            //echo where the player can go next
            echo"
                <ul>
                    <li><a href='../place/dragonRoute1.php'>Continue the fight</a></li>
                </ul>
            ";
        }else{
            //echo a description of how player was defeated/dead here
            echo"<p>
                Despite your best efforts, the troll proves to be an unrelenting foe, its massive strength and resilience overwhelming your defenses. 
                With each thunderous blow, you feel your strength waning, your body battered and bruised from the relentless assault.
                The troll's fury knows no bounds, its relentless onslaught driving you to the brink of exhaustion.
                With a final, bone-crushing blow, the troll delivers the decisive strike, sending you sprawling to the ground in defeat. 
                As darkness closes in around you, you can only watch helplessly as the troll looms over you, its victorious roar echoing in the desolate wilderness.
                You've died..
            </p>";
            echo"<img src='../../images/player/grave.jpg'>";
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
                <img class='enemyAnim4' src='../../images/enemy/troll.jpg' style='width:200px;length:100px'alt='kobold picture'>
                <div class='right'>
                    <h2>".$monster['name']."</h2>
                    <h5>
                        With skin as tough as stone and muscles like coiled steel, trolls possess a resilience that belies their brutish appearance. 
                        Their bodies, adorned with grotesque boils and scars, bear testament to the countless battles they have waged throughout the ages, each scar a mark of their indomitable strength and tenacity.
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
                $monster['hp'] -= $playerDMG;
                echo "<p>".$_SESSION['player']['name']." attacks ".$monster['name']." for ".$playerDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                if($monster['hp'] <= 0){
                    $winBattle = true;
                    echo "<p>The ".$monster['name']." has died!\n</p>";
                    break;
                }
                
                $monDMG = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                $_SESSION['player']['hp'] -= $monDMG;
                echo "<p>".$monster['name']." counters ".$_SESSION['player']['name']." for ".$monDMG.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                if($_SESSION['player']['hp'] <= 0){
                    $winBattle = false;
                    echo "<p>You've died..</p>";
                    break;
                }
                
            }else if($monsterRoll > $userRoll){
                //Monster attacks first
                $monDMG = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                $_SESSION['player']['hp'] -= $monDMG;
                echo "<p>".$monster['name']." counters ".$_SESSION['player']['name']." for ".$monDMG.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                if($_SESSION['player']['hp'] <= 0){
                    $winBattle = false;
                    echo "<p>You've died..\n</p>";
                    break;
                }
                
                $playerDMG = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster['def'])) ,0);
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
    <link rel="stylesheet" href="../../encountersAnimation.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crimson+Text">
    <title>Troll Encounter</title>
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
            <br>
            <h3>Encounter :</h3>
            <?= battle();?>
        </div>
        <div class="textbox forest3">
            <h2>Battle & Encounter with the Troll</h2>
            <h4>
                "While trolls are often depicted as brutish and aggressive, they possess a surprising depth of instincts honed by eons of existence in the untamed wilderness. 
                Masters of their domain, trolls roam the rugged terrain of Termina with a silent, watchful vigilance, their presence serving as a warning to those who would dare challenge their authority."
            </h4>
            <h3>Battle Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/sento.mp3" type="audio/mpeg">
            </audio>
            
            <p>
                As Pog and the player step out of the cache, they are suddenly startled by a deep, rumbling growl echoing from the shadows. 
                Emerging from the darkness comes a towering figure, its massive frame casting a long shadow over the barren landscape. 
                With each heavy footfall, the ground trembles beneath its weight, announcing the arrival of a fearsome troll..
            </p>
            <p>
                The troll's skin is a sickly shade of blue, marred by grotesque boils and scars from countless battles past. 
                Its eyes gleam with a primal intelligence, glinting with malice as it fixes its gaze upon Pog and the player.
            </p>
            <p>
                Pog quips, "Well, ain't you a sight for sore eyes! Looks like someone's been playin' with fire and got burned a few too many times!" 
                The troll's expression darkens at Pog's mockery, its temper flaring as it readies itself for combat.
                "That there's a troll, mate. Big, dumb, and not too bright, but don't let that fool ya. They're tough as nails and meaner than a sack of rabid wolves. Best watch your back around this one."
            </p>
            <p>
                As the troll charges forward with a thunderous roar, you stand your ground, your sword and shield at the ready. 
                With lightning reflexes, you dodge its swinging club and retaliate with a swift strike, your blade finding purchase in its thick, gnarled hide.
                The troll bellows in pain, but it is undeterred, launching a barrage of heavy blows in retaliation.
            </p>
            
            <?= outcome();?>
            
          
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='enemyAnim3' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Dragonic Peaks but for what purpose?"</h5>
                    <p>"You're not scared of that big lug, are ya? C'mon, show him what you're made of!"</p>
                </div>
            </div>

        </div>
    </div>
</body>
</html>