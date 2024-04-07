<?php 
    //left side of dragonRoute1 outcome
    session_start();

    require '../showStats2.php';
    require '../../game_logic/levelUp.php';
    require '../../game_logic/saveCharacterStats.php';
    $monster = [
        "name" => "Imp",
        "hp" => 10,
        "maxHP" => 10,
        "atk" => 9,
        "def" => 7,
        "spd" => 150,
        "monExp" => 50,
    ]; 

    $monster2 = [
        "name" => "Lesser Demon",
        "hp" => 100+ round($_SESSION['player']['atk']*.3),
        "maxHP" => 100+ round($_SESSION['player']['atk']*.3),
        "atk" => 70+ round($_SESSION['player']['atk']*.3),
        "def" => 50+ round($_SESSION['player']['atk']*.3),
        "spd" => 70,
        "monExp" => rand(150,200),
    ];

    $monster3 = [
        "name" => "Ushi-Oni",
        "hp" => 200+ round($_SESSION['player']['atk']*.3),
        "maxHP" => 200+ round($_SESSION['player']['atk']*.3),
        "atk" => 90 + round($_SESSION['player']['atk']*.3),
        "def" => 80 + round($_SESSION['player']['atk']*.3),
        "spd" => 80,
        "monExp" => rand(200,300) ,
    ];

    function encounter(){
        global $monster;
        global $monster2;
        global $monster3;  
        echo"
        <div class='enemyStats tooltip'>
                <img class='enemyAnim1'src='../../images/enemy/imp.png' style='width:100px;length:100px;position:relative; top:-30px'alt='imp picture'>
                <div class='right'>
                    <h2>".$monster['name']."</h2>
                    <h5>
                    'A small pathetic demon that is native to Termina's underworld. The only thing that is remarkable about them is their speed. They are often enlisted by stronger beings to act as scouts.'
                    </h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                    <p><img src='../../images/icons/katana.png'>Attack:".$monster['atk']."</p>
                    <p><img src='../../images/icons/shield.png'>Defense:".$monster['def']."</p>
                    <p><img src='../../images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                    <p><img src='../../images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
                </div>
            </div>
        "; 
        echo"
        <div class='enemyStats tooltip'>
                <img class='enemyAnim2'src='../../images/enemy/lesser_demon.png' style='width:150px;length:100px; position:relative;bottom:-170px;left:-150px;z-index:1;'alt='demon picture'>
                <div class='bottom' style='position:absolute;top:-50px;'>
                    <h2>".$monster2['name']."</h2>
                    <h5>
                    'The second most common type of demon in the underworld. These demons often come a variety of forms but they are characterized by more animal like features and lack of speech.'
                    </h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ".$monster2['hp']."/".$monster2["maxHP"]."</p>
                    <p><img src='../../images/icons/katana.png'>Attack:".$monster2['atk']."</p>
                    <p><img src='../../images/icons/shield.png'>Defense:".$monster2['def']."</p>
                    <p><img src='../../images/icons/sprint.png'>Speed:".$monster2['spd']."</p>
                    <p><img src='../../images/icons/medal-skull.png'>exp:".$monster2['monExp']."</p>
                </div>
            </div>
        <img class='enemyAnim2'src='../../images/enemy/lesser_demon.png' style='width:150px;length:100px;position:relative;left:20px;bottom:-180px;z-index:0'alt='demon picture'>
        ";   
        echo"
        <div class='enemyStats tooltip' style='position:relative; bottom:80px;left:70px;z-index:0;margin-bottom:-10px;'>
                <img class='enemyAnim4'src='../../images/enemy/ushioni.png' style='width:250px;length:100px;filter:brightness(50%)'alt=ushi-oni picture'>
                <div class='bottom' style='position:absolute;top:-50px;'>
                    <h2>".$monster3['name']."</h2>
                    <h5>
                    'A large demon with a face of a cow and the body of spider. Despite its appearance, this demon is actually amphibious and hunts near bodies of water. '
                    </h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ".$monster3['hp']."/".$monster3["maxHP"]."</p>
                    <p><img src='../../images/icons/katana.png'>Attack:".$monster3['atk']."</p>
                    <p><img src='../../images/icons/shield.png'>Defense:".$monster3['def']."</p>
                    <p><img src='../../images/icons/sprint.png'>Speed:".$monster3['spd']."</p>
                    <p><img src='../../images/icons/medal-skull.png'>exp:".$monster3['monExp']."</p>
                </div>
            </div>
        
        ";
    }

    //TODO Create battle sequence
    // Roll dice, loop or both?
    
    //Checks so see if player won the battle and then calls levelUp to check if player can level up
    //Also edit echo <p> under the if statement to give flavor text/aftermath of the battle
    $winBattle = true;
    $helpFlag = false;
    function outcome(){
        global $winBattle;
        global $helpFlag;
        global $monster;
        global $monster2;
        global $monster3;
        if($winBattle){
            //echo the scenarion of battle and how the player defeated the monster.
            if($helpFlag){
                echo"<p>Despite your best efforts, the demons prove too powerful, their relentless onslaught overwhelming you and Pog. As you struggle to fend off their attacks, you feel your strength waning, your limbs growing heavy with exhaustion. With a final, desperate gasp, you fall to your knees, the demons looming over you with cruel satisfaction.</p>";
                echo"<p>As the battle reaches its climax and it seems as though defeat is imminent, a sudden burst of magical energy fills the air, illuminating the darkness with its brilliance. Just when you thought all hope was lost, two mysterious strangers emerge from the light and appeared by your side.</p>";
                echo"<div style='display:flex'>
                            <img class='enemyAnim1' src='../../images/encounters/Aria.png' style='width:200px;length:100px'alt='aria picture'>
                            <img class='enemyAnim2' src='../../images/encounters/Elara.png' style='width:200px;length:100px'alt='elara picture'>
                </div>";
                echo"<p>One figure, with delicate wings shimmering with otherworldly energy, unleashes a barrage of magical attacks upon the demons. Bolts of arcane energy crackle through the air, searing the flesh of the Lesser Demons and causing the Ushi-oni to recoil in pain.</p>";
                echo"<p>The other figure, with a serene countenance a stark contrast to the chaos around her, focuses her healing magic on you. Her staff glows with a soft, soothing light as she banishes your wounds and revitalizes your spirit, ensuring that you remain standing in the face of overwhelming adversity.</p>";
                echo"<p>Together, the three of you fight with renewed determination, each contributing your unique talents and abilities to the fray. As the battle rages on, the demons find themselves increasingly outmatched, their strength waning with each passing moment.</p>";
                echo"<p>Finally, with a final, decisive blow, you strike down the last of the demons, sending it crashing to the ground in a defeated heap. With the echoes of battle fading into silence, you turn to thank your unexpected allies, gratitude shining in your eyes.</p>";
            }
           
            levelUp($monster2['monExp']);
            levelUp($monster2['monExp']);
            levelUp($monster3['monExp']);
            //echo where the player can go next
            echo"
                <ul>
                    <li><a href='../place/dragonRoute2_2B.php'>As the dust settles, the two figures turn to you and introduces themselves.</a></li>
                </ul>
            ";
        }else{
            //echo a description of how player was defeated/dead here
            echo "<p>
                Despite your best efforts, the demons prove too powerful, their relentless onslaught overwhelming you and Pog. 
                As you struggle to fend off their attacks, you feel your strength waning, your limbs growing heavy with exhaustion. 
                With a final, desperate gasp, you fall to your knees, the demons looming over you with cruel satisfaction. 
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
        global $monster2;
        global $monster3;
        global $helpFlag;
        echo"<h3> Battle Log: </h3>";
        $minimumDamage = 1;
        
        while((($monster2['hp'] > 0) || ($monster3['hp'] > 0)) && ($_SESSION['player']['hp'] > 0)){
            $userRoll = rand(1,6) + $_SESSION['player']['spd'];
            $monsterRoll = rand(1,6) + $monster2['spd'];
            
            if($userRoll >= $monsterRoll){
                //Player attacks monster first
                $playerDMG = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster2['def'])) ,0);
                $playerDMG2 = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster3['def'])) ,0);
                $ariaDMG = round(($_SESSION['player']['atk'] + rand(3, 10)) * (100/(100+$monster3['def'])) ,0);
                
                
                if($monster2['hp'] > 0){
                    $monster2['hp'] -= round($playerDMG);
                    echo "<p>".$_SESSION['player']['name']." attacks ".$monster2['name']." for ".$playerDMG.". ".$monster2['name']." HP: ".$monster2['hp']."/".$monster2['maxHP']."\n</p>";
                    if($helpFlag){
                        $monster2['hp'] -= round($ariaDMG);
                        echo "<p> Aria attacks ".$monster2['name']." for ".$ariaDMG.". ".$monster2['name']." HP: ".$monster2['hp']."/".$monster2['maxHP']."\n</p>";
                    }
                    if($monster2['hp'] <= 0){
                        echo "<p>You killed both of the ".$monster2['name']."s in quick succession!\n</p>";   
                    }
                }
                if($monster3['hp'] > 0){
                    $monster3['hp'] -= round($playerDMG2);
                    echo "<p>".$_SESSION['player']['name']." attacks ".$monster3['name']." for ".$playerDMG2.". ".$monster3['name']." HP: ".$monster3['hp']."/".$monster3['maxHP']."\n</p>";
                    if($helpFlag){
                        $monster3['hp'] -= round($ariaDMG);
                        echo "<p> Aria attacks ".$monster3['name']." for ".$ariaDMG.". ".$monster3['name']." HP: ".$monster3['hp']."/".$monster3['maxHP']."\n</p>";
                    }
                    if($monster3['hp'] <= 0){
                        echo "<p>You killed the ".$monster3['name']."!\n</p>";   
                    }
                }
                if($monster2['hp'] <= 0 && $monster3['hp'] <= 0){
                    $winBattle = true;
                    echo "<p>The cowardly ".$monster['name']." runs away!</p>";
                    break;
                }
               
                //monsters attacks second
                if($_SESSION['player']['hp'] > 0){
                    $monDMG2 = round(($monster2['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                    $_SESSION['player']['hp'] -= round($monDMG2);
                    echo "<p>The  ".$monster2['name']." attacks ".$_SESSION['player']['name']." for ".$monDMG2.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                }
                if($_SESSION['player']['hp'] <= $_SESSION['player']['hp']*.5){
                    if($helpFlag == false){
                        echo"<p>Aria and Elara appear!</p>";
                        echo"<div style='display:flex'>
                            <img class='enemyAnim1' src='../../images/encounters/Aria.png' style='width:200px;length:100px'alt='aria picture'>
                            <img class='enemyAnim2' src='../../images/encounters/Elara.png' style='width:200px;length:100px'alt='elara picture'>
                        </div>";
                    }
                    $helpFlag = true;
                    echo"<p>Elara appears and heals you for ".round($_SESSION['player']['maxHP']*.5)." HP!<p>";
                    $_SESSION['player']['hp'] += round($_SESSION['player']['maxHP']*.5);
                }
                if($_SESSION['player']['hp'] > 0){
                    $monDMG3 = round(($monster3['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                    $_SESSION['player']['hp'] -= round($monDMG3);
                    echo "<p>The ".$monster3['name']." counters ".$_SESSION['player']['name']." for ".$monDMG3.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                }
                if($_SESSION['player']['hp'] <= $_SESSION['player']['hp']*.5){
                    if($helpFlag == false){
                        echo"<p>Aria and Elara appear!</p>";
                        echo"<div style='display:flex'>
                            <img class='enemyAnim1' src='../../images/encounters/Aria.png' style='width:200px;length:100px'alt='aria picture'>
                            <img class='enemyAnim2' src='../../images/encounters/Elara.png' style='width:200px;length:100px'alt='elara picture'>
                        </div>";
                    }
                    $helpFlag = true;
                    echo"<p>Elara appears and heals you for ".round($_SESSION['player']['maxHP']*.5)." HP!<p>";
                    $_SESSION['player']['hp'] += round($_SESSION['player']['maxHP']*.5);
                }
                
               
            }else if($monsterRoll > $userRoll){
                //Monster attacks first
                if($_SESSION['player']['hp'] > 0){
                    $monDMG2 = round(($monster2['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                    $_SESSION['player']['hp'] -= round($monDMG2);
                    echo "<p>The  ".$monster2['name']." attacks ".$_SESSION['player']['name']." for ".$monDMG2.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                }

                if($_SESSION['player']['hp'] <= $_SESSION['player']['hp']*.5){
                    if($helpFlag == false){
                        echo"<p>Aria and Elara appear!</p>";
                        echo"<div style='display:flex'>
                            <img class='enemyAnim2' src='../../images/encounters/Aria.png' style='width:200px;length:100px'alt='aria picture'>
                            <img class='enemyAnim2' src='../../images/encounters/Elara.png' style='width:200px;length:100px'alt='elara picture'>
                        </div>";
                    }
                    $helpFlag = true;
                    echo"<p>Elara appears and heals you for ".round($_SESSION['player']['maxHP']*.5)." HP!<p>";
                    $_SESSION['player']['hp'] += round($_SESSION['player']['maxHP']*.5);
                }
                
                if($_SESSION['player']['hp'] > 0){
                    $monDMG3 = round(($monster3['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                    $_SESSION['player']['hp'] -= round($monDMG3);
                    echo "<p>The ".$monster3['name']." counters ".$_SESSION['player']['name']." for ".$monDMG3.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                    
                }

                if($_SESSION['player']['hp'] <= $_SESSION['player']['hp']*.5){
                    if($helpFlag == false){
                        echo"<p>Aria and Elara appear!</p>";
                        echo"<div style='display:flex'>
                            <img class='enemyAnim1' src='../../images/encounters/Aria.png' style='width:200px;length:100px'alt='aria picture'>
                            <img class='enemyAnim2' src='../../images/encounters/Elara.png' style='width:200px;length:100px'alt='elara picture'>
                        </div>";
                    }
                    $helpFlag = true;
                    echo"<p>Elara appears and heals you for ".round($_SESSION['player']['maxHP']*.5)." HP!<p>";
                    $_SESSION['player']['hp'] += round($_SESSION['player']['maxHP']*.5);
                }
                
                //player attacks second
                $playerDMG = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster2['def'])) ,0);
                $playerDMG2 = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster3['def'])) ,0);
                $ariaDMG = round(($_SESSION['player']['atk'] + rand(3, 10)) * (100/(100+$monster3['def'])) ,0);
                
                
                if($monster2['hp'] > 0){
                    $monster2['hp'] -= round($playerDMG);
                    echo "<p>".$_SESSION['player']['name']." attacks ".$monster2['name']." for ".$playerDMG.". ".$monster2['name']." HP: ".$monster2['hp']."/".$monster2['maxHP']."\n</p>";
                    if($helpFlag){
                        $monster2['hp'] -= round($ariaDMG);
                        echo "<p> Aria attacks ".$monster2['name']." for ".$ariaDMG.". ".$monster2['name']." HP: ".$monster2['hp']."/".$monster2['maxHP']."\n</p>";
                    }
                    if($monster2['hp'] <= 0){
                        echo "<p>You killed both of the ".$monster2['name']."s in quick succession!\n</p>";   
                    }
                }
                if($monster3['hp'] > 0){
                    $monster3['hp'] -= round($playerDMG2);
                    echo "<p>".$_SESSION['player']['name']." attacks ".$monster3['name']." for ".$playerDMG2.". ".$monster3['name']." HP: ".$monster3['hp']."/".$monster3['maxHP']."\n</p>";
                    if($helpFlag){
                        $monster3['hp'] -= round($ariaDMG);
                        echo "<p> Aria attacks ".$monster3['name']." for ".$ariaDMG.". ".$monster3['name']." HP: ".$monster3['hp']."/".$monster3['maxHP']."\n</p>";
                    }
                    if($monster3['hp'] <= 0){
                        echo "<p>You killed the ".$monster3['name']."!\n</p>";   
                    }
                }
                if($monster2['hp'] <= 0 && $monster3['hp'] <= 0){
                    $winBattle = true;
                    echo "<p>The cowardly ".$monster['name']." runs away</p>";
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
    <title>Battle with Demons</title>
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
            <?=encounter()?>
            <div style='position:relative; top:-90px'><?= battle()?></div>
        </div>
        <div class="textbox ghost_town">
            <h2>Battle with the Demons</h2>
            
            <h3>Battle Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/kiheisen.mp3" type="audio/mpeg">
            </audio>
            <h4>
                "Minions of the Oni brothers, these rag tag group of demons are strong enough to be recognized by the brothers."
            </h4>
            <p>
                You and Pog confront the group of demons, tension crackles in the air like lightning before a storm. 
                The imp, perched atop a gnarled root, cackles with glee, its eyes glinting with mischief as it sizes you up. 
                The lesser demons, goat-headed and imposing, flex their sinewy muscles, their four arms twitching in anticipation. 
                Beside them, the Ushi-oni snarls and skitters eagerly , its cow-headed visage twisted into a grotesque snarl.
            </p>
            <p>
                The first strike comes from the Ushi-Oni, its massive form hurtling toward you with frightening speed. Ducking beneath its slashing claws, you retaliate with a flurry of strikes, aiming for its vulnerable underbelly.
                Meanwhile, the Lesser Demons close in, their multiple arms lashing out in a frenzied assault. You deftly parry their blows, though each strike threatens to overwhelm you.
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