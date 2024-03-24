<?php
    session_start();

    require 'game_logic/showStats.php';

    $exploration_text = array(
        "As you find yourself near the looming mountain range of Termina, the air tingles with anticipation, whispering tales of ancient dragons that dwell within its rocky crags.",
        "As you stumble into a hidden cave, the darkness envelops you, and you find yourself descending deeper into the underworld of Termina. The air grows thick with an oppressive weight, and a sense of foreboding settles over you like a heavy cloak.",
        "As you find yourself deep within a dense forest, the shadows dance around you, weaving tales of mystery and danger.",
    );

    $random_index = array_rand($exploration_text);
    $event_description = $exploration_text[$random_index];

    function encounter(){
        global $exploration_text;
        global $random_index;

        switch($random_index){
            case 0:
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
                break;
            case 1:
                $monster = [
                    "name" => "Specter",
                    "hp" => 75,
                    "maxHP" => 75,
                    "atk" => 9,
                    "def" => 7,
                    "spd" => 9,
                    "monExp" => 200,
                ];    
                echo"
                <div class='enemyStats tooltip'>
                        <img class='enemyAnim'src='./images/enemy/specter.jpg' style='width:200px;length:100px'alt='specter picture'>
                        <div class='right'>
                            <h2>".$monster['name']."</h2>
                            <h5>
                            'These ethereal entities manifest as twisted echoes of their former selves, their spectral forms flickering with an eerie luminescence that pierces the darkness like a beacon of otherworldly dread.'
                            </h5>
                            <p><img src='images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                            <p><img src='images/icons/katana.png'>Attack:".$monster['atk']."</p>
                            <p><img src='images/icons/shield.png'>Defense:".$monster['def']."</p>
                            <p><img src='images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                            <p><img src='images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
                        </div>
                    </div>
                ";
                echo"<p>
                    'Driven by an insatiable hunger born of their unfulfilled desires or tragic demise, specters wander the shadowed paths of the world, their mournful cries echoing through the night like a lament for the lives they once knew.'
                </p>";
                break;
            case 2:
                $monster = [
                    "name" => "Kobold",
                    "hp" => 50,
                    "maxHP" => 50,
                    "atk" => 8,
                    "def" => 5,
                    "spd" => 13,
                    "monExp" => 200,
                ];
                echo"
                <div class='enemyStats tooltip'>
                        <img class='enemyAnim2'src='./images/enemy/kobold.jpg' style='width:200px;length:100px'alt='specter picture'>
                        <div class='right'>
                            <h2>".$monster['name']."</h2>
                            <h5>
                                'To encounter a kobold is to dance with danger, for they are not creatures of brute force but of guile. 
                                These diminutive creatures, often underestimated by the unwary, are the cunning survivors of the forest of Termina.'
                            </h5>
                            <p><img src='images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                            <p><img src='images/icons/katana.png'>Attack:".$monster['atk']."</p>
                            <p><img src='images/icons/shield.png'>Defense:".$monster['def']."</p>
                            <p><img src='images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                            <p><img src='images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
                        </div>
                    </div>
                ";
                echo"<p>
                    'In the gloom of the ancient ruins, where the air is thick with the scent of decay and the whispers of the long-forgotten, the kobolds toil.
                    They worship the shadows that cradle them, crafting shrines of bone and blood in the deepest recesses of their labyrinthine lairs. 
                    Their society is one of strict hierarchy, ruled by the strongest and the most cunning, where the weak serve the strong, and the strong serve only themselves.'
                </p>";
                break;
            default:
                break;
        }
    }

  
    function event(){
        //$random_event= rand(1,6);
        global $exploration_text;
        global $random_index;
        global $event_description;

        echo"<p>". $event_description."</p>";
        switch($random_index){
            case 0:
                echo"
                    <audio controls loop>
                        <source src='./music/choushinkainoyuuei.mp3'>
                    </audio>
                ";
                echo"<p>
                    Suddenly, a glint catches your eye amidst the shadows—a hidden cache of supplies nestled among the rocky outcrops.
                    Curiosity piqued, you approach cautiously, wary of what secrets the cache may hold. 
                    As you approach the cache, you hear a gruff voice emanating from within. 'Oi, what's this then? 
                    Another lost soul wanderin' into ol' Pog's territory?' A lid pops off the cache, revealing a small pot nestled among the treasures.
                    To your surprise, nestled within the cache, you discover a sentient, foul-mouthed pot named Pog.
                </p>";
                echo "<p>'I'm Pog, your friendly neighborhood pot, here to offer you a bit of help in this forsaken land.' 
                    With a mischievous glint in his ceramic eyes, Pog continues, 'There's more to you than meets the eye, ain't there? But we'll save the introspection for another time. Right now, let's focus on gettin' you nice and strong.
                    Reaching into the cache, Pog retrieves vials of shimmering potions and exotic treats. 
                    'Here we have some dragon's breath elixir, guaranteed to make you feel like you've got fire in your veins. And don't forget these crystallized wyrm scales—eat 'em up, and you'll be tough as nails.
                '</p>";
                echo "<p>With a hearty chuckle, Pog gestures towards the mountain range looming in the distance. 'Now, let's get a move on, shall we? Them dragons ain't gonna fight themselves, and I've got a reputation to maintain as the best darn pot this side of the divine Draconian Peaks!'</p>";
                
                echo"<a href='events/beginnerEvent/dragonBeginner.php'>
                        <p>With a hearty chuckle, Pog gestures towards the mountain range looming in the distance. 'Now, let's get a move on, shall we? Them dragons ain't gonna fight themselves, and I've got a reputation to maintain as the best darn pot this side of the Divine Draconian Peaks!'</p>
                    </a>";
                break;
            case 1:
                echo"<p>A cold wind whispers through the shadows, carrying with it the faint scent of decay.</p>";
                echo"
                    <audio controls loop>
                        <source src='./music/norowaretayakata.mp3'>
                    </audio>
                ";
                
                echo"<p>A spectral apparition materializes before you, its eyes burning with an otherworldly fire.</p>";
                echo"<p>You instinctively recoil, feeling the chill of its presence seeping into your bones.</p>";
                echo"<p>Every fiber of your being is poised for action, muscles coiled tight as bowstrings, ready to either confront the otherworldly entity or slip past it like a shadow in the night.</p>";
                echo"<p>As the specter's gaze locks onto you, you know that your journey through the depths of Termina has only just begun.</p>";
                
                echo"<a href='events/beginnerEvent/specterBeginner.php'><p>With courage in your heart and determination in your soul, you prepare to face whatever challenges lie ahead in this forsaken realm.</p></a>";
                break;
            case 2:
                echo"<p>A distant howl pierces the silence and rends through the tranquility, its mournful cry echoing across the desolate landscape</p>";
                echo"
                    <audio controls loop>
                        <source src='./music/mayonakanoongakushitsu.mp3'>
                    </audio>
                ";
                echo"<p> Suddenly, a glint of movement catches your eye—a flicker of shadow darting between the gnarled roots of a nearby tree. You freeze, heart pounding in your chest as you strain to discern the source of the disturbance.</p>";
                echo"<p>You brace yourself against the encroaching darkness, knowing that within its depths lies a creature driven by base instinct, its eyes gleaming with a predatory hunger that knows no mercy. </p>";
                echo"<p>And then you see it: a small figure emerges from the underbrush, its form hunched and scrawny, its eyes gleaming with a feral intensity. It is a kobold, its canine-like features twisted into a snarl of aggression as it fixes its gaze upon you.</p>";
                echo"<p>Despite its diminutive stature, there is an undeniable menace to the kobold's presence, a primal aura that speaks of cunning and savagery honed through countless generations of survival in the harsh wilderness.</p>";
                echo"<p>The kobold watches you with a mixture of defiance and hunger, its stance poised for attack as it waits for the first move to be made.</p>";
                
                echo"<a href='events/beginnerEvent/koboldBeginner.php'><p>You ready your weapon knowing that this encounter could turn deadly at any moment.</p></a>";
                break;
            default:
                break;
        }
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
<div class="box">
        <div class="battleBox">
            <h3>Encounter:</h3>
            <?= encounter() ?>
        </div>
        <div class="textbox forest3">
            <h2>Exploring the Unknown</h2>
            <?= event() ?>
        </div>
        <div class="stats">
            <?= showStats() ?>
        </div>
    </div>
</body>
</html>