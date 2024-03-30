<?php 
    //left side of dragonRoute1 outcome
    session_start();

    require '../showStats2.php';
    require '../../game_logic/levelUp.php';
    require '../../game_logic/saveCharacterStats.php';
    

    $monster = [
        "name" => "Walking Bushes",
        "hp" => 70 + round($_SESSION['player']['atk']*.3),
        "maxHP" => 70 + round($_SESSION['player']['atk']*.3),
        "atk" => 3 + round($_SESSION['player']['atk']*.3),
        "def" => 15,
        "spd" => 40,
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
            echo"<p>With swift strikes and well-timed dodges, you manage to outmaneuver the animated shrubbery. Utilizing your skills and weapons effectively, you deal precise blows to each of the walking bushes, gradually wearing them down.</p>";
            echo"<p>Pog, although unable to participate directly in the battle, offers strategic advice and encouragement from the sidelines. With his guidance and your determination, you successfully defeat the walking bushes. As the last bush collapses to the ground, its movements cease, and the forest falls silent once more.</p>";
            echo"<p>With the threat neutralized, you and Pog take a moment to catch your breath, knowing that you've emerged victorious against the unusual foes.</p>";
            echo"<p>Pog cheers triumphantly, clapping you on the back with a grin. \"Well done, mate! You gave those shrubbery a good ole' trimming! They won't be botherin' us again anytime soon, that's for sure!\"</p>";
            levelUp($monster['monExp']);
            levelUp($monster['monExp']);

            //echo where the player can go next
            echo"
                <ul>
                    <li><a href='../encounters/treantEncounter.php'>Continue exploring.</a></li>
                </ul>
            ";
        }else{
            //echo a description of how player was defeated/dead here
            echo"<p>
                Despite your best efforts, the battle against the walking bushes takes a turn for the worse. The agile movements of the animated shrubbery prove difficult to anticipate, and their thorny attacks land with surprising force. 
                As you struggle to fend off the relentless assault, you find yourself gradually overwhelmed by the sheer numbers and ferocity of the walking bushes.
                In the end, despite your valiant efforts, the walking bushes prove too formidable.
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
                    <img class='enemyAnim3'src='../../images/enemy/walkingBush.jpg' style='width:200px;length:100px'alt='bush picture'>
                    <div class='right'>
                        <h2>".$monster['name']."</h2>
                        <h5>
                            'Strange plants that posses the ability to walk. 
                             Unlike other living plants like carnivorous man-eating plants, these plants lack a mouth and are surprisingly agile.'
                        </h5>
                        <p><img src='../../images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                        <p><img src='../../images/icons/katana.png'>Attack:".$monster['atk']."</p>
                        <p><img src='../../images/icons/shield.png'>Defense:".$monster['def']."</p>
                        <p><img src='../../images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                        <p><img src='../../images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
                    </div>
            </div>
            <img class='enemyAnim3'src='../../images/enemy/walkingBush.jpg' style='width:200px;length:100px'alt='bush picture'>
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
                    echo "<p>The other ".$monster['name']." was struck at the same time and died!</p>";
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
                    echo "<p>The other ".$monster['name']." was struck at the same time and died!</p>";
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
    <title>Walking Bush Encounter</title>
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
        <div class="textbox forest2">
            <h2>Battle with the WAlking Bushes</h2>
            <h3>Battle Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/sento.mp3" type="audio/mpeg">
            </audio>
    
            <p>
                The walking bushes sway ominously, their thorny limbs poised for attack, while the walking root inches closer, its tangled mass writhing with malicious intent.
                Reacting swiftly, you draw your weapon and brace yourself for battle. With a determined glare, you charge forward, aiming to strike down the nearest walking bush before it can retaliate. 
                Your blade slices through the foliage, but the resilient plant creature continues its advance, its thorns grazing your skin.
            </p>
            <p>
                With each strike, you chip away at the plant creatures' defenses, but they prove to be resilient adversaries, fueled by an otherworldly vitality.
            </p>
            <?= outcome();?>
            
          
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='enemyAnim3_2' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='pog picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"Keep dodgin', mate! We've almost got 'im on the ropes!"</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>