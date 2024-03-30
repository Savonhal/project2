<?php
    session_start();

    require 'game_logic/showStats.php';

    
    function encounter(){
        echo"<img src='./images/background/treasure.jpg' style='width:200px;length:100px'>";
                echo"<img class='pog' src='./images/encounters/Pot of Cavil A.png' style='width:200px;length:100px'>";
                echo"<p>
                    As you consume the rare edible items from the cache, a transformative energy surges through your body, igniting a primal fire within your veins. 
                    The dragon's breath elixir courses through your bloodstream, infusing you with a fiery vitality that seems to radiate from within.
                    Your muscles tense and bulge with newfound strength, as if forged in the heart of a blazing inferno. 
                    The crystallized wyrm scales dissolve on your tongue, leaving you feeling powerful and resilient.
                    As they you amidst the desolate landscape of Termina, you feel a connection to the ancient dragons of the divine Draconian Peaks, their presence echoing in the depths of your soul. 
                </p>";
                echo"<p> You have increased your Stats! </p>";
                $_SESSION['player']['maxHP'] += rand(50,100);
                $_SESSION['player']['hp'] = $_SESSION['player']['maxHP'];
                $_SESSION['player']['atk'] += rand(20,50);
                $_SESSION['player']['def'] += rand(20,50);
                $_SESSION['player']['spd'] += rand(20,50);
                echo"<p>Your Health Increased.</p>";
                echo"<p>Your attack increased.</p>";
                echo"<p>Your defense increased.</p>";
                echo"<p>Your speed increased.</p>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="textbox.css">
    <link rel="stylesheet" href="enemy.css">
    <link rel="stylesheet" href="encountersAnimation.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crimson+Text">
    <title>Exploring the Unknown</title>
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
            <h3>Encounter:</h3>
            <?= encounter() ?>
        </div>
        <div class="textbox forest3">
            <h2>Exploring the Unknown</h2>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src='./music/choushinkainoyuuei.mp3'>
            </audio>
            <p>
                Suddenly, a glint catches your eye amidst the shadows—a hidden cache of supplies nestled among the rocky outcrops.
                Curiosity piqued, you approach cautiously, wary of what secrets the cache may hold. 
                As you approach the cache, you hear a gruff voice emanating from within. 'Oi, what's this then? 
                Another lost soul wanderin' into ol' Pog's territory?' A lid pops off the cache, revealing a small pot nestled among the treasures.
                To your surprise, nestled within the cache, you discover a sentient, foul-mouthed pot named Pog.
            </p>
             <p>
                'I'm Pog, your friendly neighborhood pot, here to offer you a bit of help in this forsaken land.' 
                With a mischievous glint in his ceramic eyes, Pog continues, 'There's more to you than meets the eye, ain't there? But we'll save the introspection for another time. Right now, let's focus on gettin' you nice and strong.
                Reaching into the cache, Pog retrieves vials of shimmering potions and exotic treats. 
                'Here we have some dragon's breath elixir, guaranteed to make you feel like you've got fire in your veins. And don't forget these crystallized wyrm scales—eat 'em up, and you'll be tough as nails.
            </p>
            <p>
                With a hearty chuckle, Pog gestures towards the mountain range looming in the distance. 'Now, let's get a move on, shall we? 
                Them dragons ain't gonna fight themselves, and I've got a reputation to maintain as the best darn pot this side of the divine Draconian Peaks!'
            </p>
                
            <a href='events/beginnerEvent/dragonBeginner.php'><p>'Head to the Draconian Woodlands.'</p></a>
        </div>
        <div class="stats">
            <?= showStats() ?>
        </div>
    </div>
</body>
</html>