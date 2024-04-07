<?php 
    session_start();

    require '../showStats2.php';
    require '../../game_logic/levelUp.php';
    require '../../game_logic/saveCharacterStats.php';

    $monster = [
        "name" => "Merged Hell",
        "hp" => 150 + round($_SESSION['player']['atk']*.3),
        "maxHP" => 150 + round($_SESSION['player']['atk']*.3),
        "atk" => 45 + round($_SESSION['player']['atk']*.3),
        "def" => 100 + round($_SESSION['player']['atk']*.3),
        "spd" => 35,
        "monExp" => rand(300,400),
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
            echo"<p>As the battle reaches its climax, you unleash a barrage of attacks against the Merged Hell, your efforts driving the malevolent entity back with each passing moment. With a final, decisive blow, you strike a fatal blow against the swirling mass of souls, dispersing its essence into the ether with a deafening roar.</p>";
            echo"<p></p>";
            levelUp($monster['monExp']);


            //echo where the player can go next
            echo"
                <ul>
                    <li><a href='../place/dragonRoute2_2A.php'>You continue on your journey</a></li>
                </ul>
            ";
        }else{
            //echo a description of how player was defeated/dead here
            echo"<p>
                As the battle against the Merged Hell rages on, you and Pog find yourselves pushed to your limits, your strength flagging under the relentless assault of the malevolent entity. 
                Despite your best efforts, the sheer magnitude of the Merged Hell's power proves to be too much to overcome, and you soon find yourselves overwhelmed by its relentless onslaught.
                You've died..
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
            <img class='enemyAnim1'src='../../images/enemy/merged_hell.jpg' style='width:259px;length:150px'alt='worm picture'>
                <div class='right'>
                    <h2>".$monster['name']."</h2>
                    <h5>
                    'A being composed of rotting specters with lingering negative emotions who have all merged in order to relieve their loneliness. They soon form a negative cycle of cursing each other thus making them more deadlier as time goes one. 
                    
                    '
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
                echo "<p>".$_SESSION['player']['name']." attacks ".$monster['name']." for ".$playerDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                if($monster['hp'] <= 0){
                    $winBattle = true;
                    echo "<p>The ".$monster['name']." has died!\n</p>";
                    break;
                }
                
                $monDMG = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                $_SESSION['player']['hp'] -= round($monDMG);
                echo "<p>".$monster['name']." counters ".$_SESSION['player']['name']." for ".$monDMG.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
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
    <title>Battle with Merged Hell</title>
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
            <br>
            <?= battle();?>
        </div>
        <div class="textbox ghost_town">
            <h2>Battle with the Merged Hell</h2>
            <h4>Old Havenwood</h4>
            <h4>
               "Nestled within the depths of the Draconian Woodlands, Old Havenwood was once a thriving settlement teeming with life and vibrancy.
               Now, Old Havenwood stands as a haunting reminder of its former glory, its once bustling streets now overgrown with tangled vines and creeping ivy. The echoes of laughter and song have long since faded, replaced by an eerie silence broken only by the whispering winds and the occasional murmuring of the undead."
            </h4>
            <h3>Battle Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/boss_battle/raiu.mp3" type="audio/mpeg">
            </audio>
            
            <p>
                As you were ruminating on your thoughts after the specters, Pog's voice cuts through the eerie silence, his words tinged with apprehension. "Oi, mate, looks like we've got ourselves a bit of a situation," he says, gesturing towards the swirling mass of souls that looms before you.
                You follow Pog's gaze and feel a chill run down your spine as you behold the grotesque spectacle before you. The mass of writhing specters coalesce into a towering monstrosity, its form shifting and contorting with each passing moment.
            </p>
            <p>
                "This ain't lookin' too good, mate," Pog mutters, his eyes fixed on the swirling mass of souls before you. "That there's the Merged Hell—a foul creature born from the misery and despair of lost souls. Looks like these specters done merged together to form one big, angry spirit."
            </p>
            <p>
                Before you can react, the amorphous mass of souls coalesces into a towering monstrosity, its form twisted and contorted by the agony of countless tormented spirits. With a deafening roar, the Merged Hell looms over you and Pog, its spectral tendrils writhing hungrily as it prepares to unleash its wrath upon you.
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
                    <p>"Keep your guard up, mate! These spirits ain't playin' around!"</p>
                </div>
            </div>

        </div>
    </div>
</body>
</html>