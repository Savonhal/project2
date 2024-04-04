<?php 
    //left side of dragonRoute1 outcome
    session_start();

    require '../showStats2.php';
    require '../../game_logic/levelUp.php';
    require '../../game_logic/saveCharacterStats.php';
    $monster = [
        "name" => "Illuyanka",
        "hp" => 1500+ round($_SESSION['player']['lvl']*2),
        "maxHP" => 1500+ round($_SESSION['player']['lvl']*2),
        "atk" => 190 + round($_SESSION['player']['lvl']*2),
        "def" => 150 + round($_SESSION['player']['lvl']*2),
        "spd" => 175 + round($_SESSION['player']['lvl']*2),
        "monExp" => rand(3000,4000),
    ];


    function encounter(){
        global $monster;
        
        echo"
            <div class='enemyStats tooltip'>
                <br>
                <img class='enemyAnim4' src='../../images/bosses/false_celestial_dragon.jpg' style='width:200px;length:125px'alt='mantis picture'>
                    <div class='right' style='top: 140px;  background-color: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5))'>
                        <h2 class='boss'>".$monster['name']."</h2>
                        <h5>
                            'The dragon who had stolen Seiryu's orb and claimed its powers for himself. But it seems as though his control and new form is still rather unstable.'
                        </h5>
                        <p><img src='../../images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                        <p><img src='../../images/icons/katana.png'>Attack:".$monster['atk']."</p>
                        <p><img src='../../images/icons/shield.png'>Defense:".$monster['def']."</p>
                        <p><img src='../../images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                        <p><img src='../../images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
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
        
        if($winBattle){
            //echo the scenarion of battle and how the player defeated the monster.
            if($helpFlag){
                echo"<p>As Illuyanka prepares to deliver the final blow, a large ball of light strikes Illuyanka head on causing the massive serpentine dragon to falter mid air.</p>";
                echo"<p>But then you see it. The person who was responsible for that attack.</p>";
                echo"<div style='display:flex'>
                            <img class='enemyAnim1' src='../../images/encounters/Sansara.png' style='width:200px;length:100px'alt='aria picture'>
                </div>";
                echo"<p>On the top of False Celestial Dragon's head, a mysterious stranger stood. In one hand they wielded a strange staff and in the other the glowing red orb that was once in Illuyanka's grasp.</p>";
                echo"<p>With a sudden swing of their staff, the stranger bonked Illuyanka and propelled themselves backwards towards your direction.</p>";
                echo"<p>But before Illuyanka could even regain his composure, the stranger, with a deft flick of the wrist, threw the orb towards Seiryu and immediately healed you.</p>";
                echo"<p>The panic on Illuyanka's face was palpable as he soon realizes the gravity of the situation. He lashes out with renew anger at the stranger but they nimbly dodge the assault and countered with an attack of their own.</p>";
                echo"<p>With one swing of their staff, the stranger sent Illuyanka flying off before following up with a barrage of light flying towards the False Celestial Dragon's way.</p>";
                echo"<p>Before the balls of light could find their target, Illuyanka once again glowed purple and unleashed a volley of lightning to meet the barrage of light.</p>";
                echo"<p>Wincing in pain, Illuyanka soon realized that the divine energy that suffused his body was slowly starting to reject him as he no longer held the orb.</p>";
                echo"<p>Surging once more in lightning and wind, Illuyanka once again prepares for one last massive attack as he coils in the air and lets out a deafening roar. The lightning, more fierce and hotter than before, coalescence it self around Illuyanka as he charges towards the you and the stranger.</p>";
                echo"<p>As Illuyanka's body becomes a hot streak of purple and light, the stranger readies themselves into a stance and tells you to prepare for their signal.</p>";
                echo"<p>An aura of blue and white engulfed the stranger and their staff, as streaks of blue lightning start to emanate from their body. Their staff, glowing with a faint cool glow, was soon the epicenter of a large storm that engulfed the battlefield as wind and lightning started to converge into the head of the staff.</p>";

                echo"<p>With a sudden leap and a heavy swing, the stranger soon met Illuyanka's attack with their own, stopping the False Celestial Dragon right in its track.</p>";
                echo"<p>
                    A brilliant ball of purple and blue can be seen radiating from the Divine Draconian Peaks and in its epicenter, two figures can be seen in a fierce stalemate. 
                    Illuyanka's body could barely hold on as the immense force produced in the clash threatened to wipe the whole peak away and the stranger grimaced in pain as the resulting collision was also painful for them.
                </p>";
                echo"<p>\"Now!\", stranger yelled still holding on to their staff as they bare the full force of Illuyanka's suicidal attack.</p>";
                echo"<p>Finally, with a final, decisive blow, you strike down the Illuyanka, sending his body crashing to the ground. His form flickers and fade as the divine energy from within his body start to consume him. 
                     As the thunder storm subsides and skies begin to clear, you turn to the stranger and ask who they are.</p>";
            }
           
            levelUp($monster['monExp']);
            //echo where the player can go next
            echo"
                <ul>
                    <li><a href='../encounters/sansaraEncounter.php'>The stranger reveals their name.</a></li>
                </ul>
            ";
        }else{
            //echo a description of how player was defeated/dead here
            echo "<p>
                Illuyanka's relentless assault proves too much to bear. Despite your best efforts, you find yourself overwhelmed by his sheer power and ferocity. With a final, devastating blow, Illuyanka strikes you down, leaving you battered and broken upon the rocky ground. 
                As darkness closes in around you, you can only watch helplessly as the stranger fights False Celestial Dragon alone...
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
        global $helpFlag;
        echo"<h3> Battle Log: </h3>";
        $minimumDamage = 1;
        
        while(($monster['hp'] > 0) && ($_SESSION['player']['hp'] > 0)){
            $userRoll = rand(1,6) + $_SESSION['player']['spd'];
            $monsterRoll = rand(1,6) + $monster['spd'];
            
            if($userRoll >= $monsterRoll){
                //Player attacks monster first
                $playerDMG = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster['def'])) ,0);
                $sansaraDMG = round(($_SESSION['player']['atk']*1.5 + rand(10, 20)) * (100/(100+$monster['def'])) ,0);
                
                
                if($monster['hp'] > 0){
                    $monster['hp'] -= round($playerDMG);
                    echo "<p>".$_SESSION['player']['name']." attacks ".$monster['name']." for ".$playerDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                    if($helpFlag){
                        $monster['hp'] -= round($sansaraDMG);
                        echo "<p> The stranger attacks ".$monster['name']." for ".$sansaraDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                       
                    }
                }
                
                if($monster['hp'] <= 0){
                    $winBattle = true;
                    echo "<p>".$monster['name']." has been slain!</p>";
                    break;
                }
               
                //monsters attacks second
                if($_SESSION['player']['hp'] > 0){
                    $monDMG = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                    $_SESSION['player']['hp'] -= round($monDMG);
                    echo "<p>".$monster['name']." attacks ".$_SESSION['player']['name']." for ".$monDMG.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                }
                if($_SESSION['player']['hp'] <= $_SESSION['player']['hp']*.5){
                    if($helpFlag == false){
                        echo"<p>A mysterious figure has appeared!</p>";
                        echo"<div style='display:flex'>
                            <img class='enemyAnim1' src='../../images/encounters/Sansara.png' style='width:200px;length:100px'alt='aria picture'>
                        </div>";
                        echo"<p>The stranger use this opportunity to steal the orb!</p>";
                        echo"<p>The stranger threw the orb to Seiryu!</p>";
                    }
                    $helpFlag = true;
                    if($helpFlag){
                        echo"<p>The mysterious person heals you for ".round($_SESSION['player']['maxHP']*.5)." HP!<p>";
                        $_SESSION['player']['hp'] += round($_SESSION['player']['maxHP']*.5);
                    }
                }
                
                
               
            }else if($monsterRoll > $userRoll){
                //Monster attacks first
                if($_SESSION['player']['hp'] > 0){
                    $monDMG = round(($monster['atk'] + rand(1, 6)) * (100/(100+$_SESSION['player']['def'])), 0);
                    $_SESSION['player']['hp'] -= round($monDMG);
                    echo "<p>".$monster['name']." attacks ".$_SESSION['player']['name']." for ".$monDMG.". ".$_SESSION['player']['name']." HP: ".$_SESSION['player']['hp']."/".$_SESSION['player']['maxHP']."\n</p>";
                }

                if($_SESSION['player']['hp'] <= $_SESSION['player']['hp']*.5){
                    if($helpFlag == false){
                        echo"<p>A mysterious figure has appeared!</p>";
                        echo"<div style='display:flex'>
                            <img class='enemyAnim1' src='../../images/encounters/Sansara.png' style='width:200px;length:100px'alt='aria picture'>
                        </div>";
                        echo"<p>The stranger use this opportunity to steal the orb!</p>";
                        echo"<p>The stranger threw the orb to Seiryu!</p>";
                    }
                    $helpFlag = true;
                    if($helpFlag){
                        echo"<p>The mysterious person heals you for ".round($_SESSION['player']['maxHP']*.5)." HP!<p>";
                        $_SESSION['player']['hp'] += round($_SESSION['player']['maxHP']*.5);
                    }
                    
                }
                
               
                
                //player attacks second
                $playerDMG = round(($_SESSION['player']['atk'] + rand(1, 6)) * (100/(100+$monster['def'])) ,0);
                $sansaraDMG = round(($_SESSION['player']['atk']*1.5 + rand(10, 20)) * (100/(100+$monster['def'])) ,0);
                
                
                if($monster['hp'] > 0){
                    $monster['hp'] -= round($playerDMG);
                    echo "<p>".$_SESSION['player']['name']." attacks ".$monster['name']." for ".$playerDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                    if($helpFlag){
                        $monster['hp'] -= round($sansaraDMG);
                        echo "<p> The stranger attacks ".$monster['name']." for ".$sansaraDMG.". ".$monster['name']." HP: ".$monster['hp']."/".$monster['maxHP']."\n</p>";
                        
                    }
                    
                }
                
                if($monster['hp'] <= 0){
                    $winBattle = true;
                    echo "<p> ".$monster['name']." has been slain!</p>";
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
    <title>Battle with Illuyanka</title>
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
            <h3>Encounter: </h3>
            <?= encounter() ?>
            <?= battle() ?>
        </div>
        <div class="textbox peaks1">
            <h2>To the Divine Draconian Peaks: On the Divine Draconian Peaks (BOSS)</h2>
            <h2>BOSS ENCOUNTER:</h2>
            <h2><span class="boss">The False Celestial, Illuyanka</span></h2>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/boss_battle/ryunomai.mp3" type="audio/mpeg">
            </audio>
            <h4>
                As the thunderstorm rages overhead, you and Seiryu prepare to face off against Illuyanka, the False Celestial Dragon who has stolen the power of the orb. The air crackles with tension as you prepare to do battle, each of you determined to emerge victorious.
            </h4>
            <p>
                As the battle with Illuyanka begins, the very air crackles with energy, the ground trembling beneath your feet. Illuyanka's sinister aura radiates outwards, casting a dark shadow over the desolate peaks.
                With a deafening roar, Illuyanka launches himself at you, his serpentine body undulating gracefully as he circles above you. 
                Illuyanka wastes no time in unleashing his newfound powers upon you. With a flick of his tail, he sends a shockwave rippling through the earth, causing the ground to tremble beneath your feet. You dodge the attack narrowly, feeling the rush of air as it passes dangerously close.
            </p>

            <p>
                Illuyanka's eyes narrow as he focuses his gaze upon you, his body coiling with anticipation. With a roar that echoes across the peaks, he summons forth tendrils of dark energy, lashing out at you with ferocious intensity. 
                You raise your weapon, deflecting the onslaught with skill and precision, but you can feel the strain of the battle weighing heavily upon you.
            </p>
            <p>
                The False Celestial Dragon's movements are fluid and graceful, his serpentine form twisting and turning with deadly accuracy. 
                He darts through the air with unnatural speed, striking at you from all angles with razor-sharp claws and searing breath. 
                Each blow lands with bone-crushing force, threatening to overwhelm you with sheer power.
            </p>
            <p>
                The very earth trembles beneath the force of his attacks, rocks shattering and splintering as they collide with the ground. Illuyanka's movements are fluid and graceful, his serpentine form weaving effortlessly through the chaos of battle.
            </p>
            <p>
                As the battle rages on, Illuyanka's presence looms larger than ever, casting a shadow over the landscape. His attacks grow more frenzied, more relentless, as he seeks to crush you before his power becomes ever more unstable.
            </p>
            <p>
                But then it finally happened. Illuyanka body starts to glow a fiendish purple as he begins to use his newly acquired powers. Purple electricity crackled in the air as with a mighty roar, the False Celestial Dragon was engulfed by a violent column of air.
                With in the turbulent gale that had swallowed Illuyanka, a pair piercing red eyes can be seen staring intently at you. With a second roar, the maelstrom of wind that covered Illuyanka rapidly expanded as malevolent purple lightning surged forth towards you.
                As you frantically dodged the incoming bolts of lightning while braving the intense gale, Illuyanka finally makes his move. His body, radiating with an intense purple, violently starts to release lightning in every direction. 
                Wherever a lightning bolt struck, the ground cracked and shattered. Wherever the purple light expanded, an immense heat soon follows and boils the air that it comes into contact with.
                Under this immense display of power, you can't help but flinch against the ensuing forces that radiated from Illuyanka's coiled body. 
            </p>
            <p>
                But the most frightening thing however was that this wasn't an attack. It was simply the build up. As if time has stopped itself, the world soon slowed down as Illuyanka unleashes his true attack.
                Like a spear, Illuyanka's iridescent body surged forward bringing with him the mass of lightning and plasma that engulfed him. Boulders, trees, cliffs, it didn't matter. The mass of energy that emanated from
                Illuyanka's body bore through everything that stood in his way. At the very last second, you were able to dodge the incoming attack but at a cost. The immense heat and lightning that emanated from the attack has left you exhausted and badly wounded.
            </p>
            <p>
                Illuyanka's body slowly begins to lose his purple aura as he soon turns around to inspect the carnage that his attack inflicted. Amongst the now barren and crater filled landscape, he spots you struggling and covered in wounds.
            </p>
            <?= outcome(); ?>
            

        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog(<span class="divine">Seiryu</span>)</h2>
                    <h5>"Celestial Dragon Seiryu, Guardian of the Divine Draconian Peaks. 
                        He serves his lord, the Dragon God Bahamut, and protects the realm of the Divine Draconian Peaks alongside its other guardians.
                        After returning from the Divine Convention and parting ways with his lord, a rebellion sparked and forces Seiryu to make an ultimatum.
                        He shoulders the weight of his decision to this very day."
                    </h5>
                    <p>"Is that who I think it is?!"</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>