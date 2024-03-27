<?php 
    session_start();

    require '../showStats2.php';
    require '../../game_logic/levelUp.php';

    $monster = [
        "name" => "Giant Worm",
        "hp" => 150 + round($_SESSION['player']['atk']*.3),
        "maxHP" => 150 + round($_SESSION['player']['atk']*.3),
        "atk" => 45 + round($_SESSION['player']['atk']*.3),
        "def" => 60 + round($_SESSION['player']['atk']*.3),
        "spd" => 40,
        "monExp" => 250,
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
            echo"<p>With each coordinated strike, you and Pog chip away at the Great Worm's defenses, exploiting its sluggish movements to your advantage. As the creature thrashes and writhes, you maintain your focus, dodging its snapping jaws and retaliating with precise, well-timed attacks. Pog's quick wit and strategic guidance prove invaluable, as he directs you to exploit the creature's weak points.</p>";
            echo"<p>Finally, after a fierce battle of attrition, you deliver a decisive blow that strikes true, severing one of the worm's vital segments. With a deafening roar, the creature recoils, its movements growing increasingly erratic as it struggles to maintain its balance. Sensing an opportunity, you press the attack, driving your weapon deep into the creature's exposed flesh.</p>";
            echo"<p>With a final, shuddering convulsion, the Great Worm collapses to the forest floor, its massive form quivering in defeat. Exhausted but victorious, you and Pog share a moment of relief amidst the aftermath of the battle. </p>";
            echo"<p></p>";
            levelUp($monster['monExp']);


            //echo where the player can go next
            echo"
                <ul>
                    <li><a href='../place/dragonRoute2_1.php'>You continue on your journey</a></li>
                </ul>
            ";
        }else{
            //echo a description of how player was defeated/dead here
            echo"<p>
                Despite your best efforts, the Great Worm proves to be an overwhelming opponent, its sheer size and strength dwarfing your own. With each thunderous strike of its powerful mandibles, the creature inches closer, its massive form casting a menacing shadow over you.
                As the battle reaches its climax, a deafening roar fills the air, signaling the creature's final, devastating attack. With a sickening crunch, its jaws clamp down around you, crushing bone and rending flesh with merciless force.
                You've died..
            </p>";
            echo"<img style='width:200px;length:100px' src='../../images/player/grave.png'>";
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
            <img class='enemyAnim4'src='../../images/enemy/greatInsect_worm.png' style='width:259px;length:150px'alt='worm picture'>
                <div class='right'>
                    <h2>".$monster['name']."</h2>
                    <h5>
                    'The Great Worm primarily feeds on plant matter and smaller creatures that wander into its territory. 
                    However, when provoked or threatened, it becomes a formidable adversary, capable of unleashing devastating attacks with its powerful jaws and thrashing body.'
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
    <title>Battle with Great Worm</title>
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
        <div class="textbox forest3">
            <h2>Battle with Great Worm</h2>
            <h4>
                "In the depths of the Draconian Woodlands, a colossal creature known as the Great Worm lurks beneath the forest floor. 
                Resembling an oversized caterpillar, this massive worm boasts a thick, segmented body covered in tough, chitinous plates. 
                Its hide is a mottled combination of earthy browns and greens, camouflaging it effectively within the forest terrain.."
            </h4>
            <h3>Battle Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/sento.mp3" type="audio/mpeg">
            </audio>
            
            <p>
                As the Great Worm rears its massive form before you, a sense of dread coils in the pit of your stomach.
                With a sudden lurch, the Giant Worm lunges forward, its gaping maw poised to strike. 
            </p>
            <p>
                In the chaos of the moment, you and Pog find yourselves momentarily caught off guard. The Great Worm's massive bulk crashes down upon you, its grinding jaws threatening to rend flesh from bone. 
                Desperately, you raise your weapon, your silver sword glinting in the dappled light as you brace for the inevitable clash.
            </p>
            <p>
                With a swift motion, you strike out at the Great Worm, your blade biting deep into its sinewy hide. 
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
                    <p>"Watch out for those jaws! One wrong move, and we'll be nothing but worm bait."</p>
                </div>
            </div>

        </div>
    </div>
</body>
</html>