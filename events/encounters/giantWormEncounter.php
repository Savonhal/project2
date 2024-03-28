<?php 
    session_start();

    require '../showStats2.php';
    
    function encounter(){
        $monster = [
            "name" => "Giant Worm",
            "hp" => 100 + round($_SESSION['player']['atk']*.3),
            "maxHP" => 100 + round($_SESSION['player']['atk']*.3),
            "atk" => 45 + round($_SESSION['player']['atk']*.3),
            "def" => 60 + round($_SESSION['player']['atk']*.3),
            "spd" => 40,
            "monExp" => 200,
        ];
        echo"
            <div class='enemyStats tooltip'>
                    <img class='enemyAnim2'src='../../images/enemy/greatInsect_worm.png' style='width:259px;length:150px'alt='worm picture'>
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
        echo'<p>
            "Keep your eyes peeled, my friend. Those mandibles look sharp enough to slice through steel. We\'ll need to be quick on our feet to avoid becoming worm food!"
        </p>';
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
    <title>Great Worm Encounter</title>
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
            <?= encounter();?>
        </div>
        <div class="textbox forest3">
            <h2>Encounter with Great Worm</h2>
            <h4>
                "In the depths of the Draconian Woodlands, a colossal creature known as the Great Worm lurks beneath the forest floor. 
                Resembling an oversized caterpillar, this massive worm boasts a thick, segmented body covered in tough, chitinous plates. 
                Its hide is a mottled combination of earthy browns and greens, camouflaging it effectively within the forest terrain.."
            </h4>
            <h3>Battle Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/norowaretayakata.mp3" type="audio/mpeg">
            </audio>
            
            <p>
                As you and Pog traverse through the dense undergrowth of the Draconian Woodlands, the air thick with humidity and the distant sounds of wildlife, an ominous rumbling echoes through the forest.
                Pog's keen senses immediately pick up on the disturbance, his expression shifting to one of cautious curiosity.
            </p>
            <p>
                "Oi, what's that racket?" Pog mutters, his eyes narrowing as he scans the surrounding foliage for signs of movement. 
                You follow his gaze, a sense of unease settling in the pit of your stomach as you brace yourself for whatever may lie ahead.
                Suddenly, the ground beneath your feet begins to tremble, the vibrations growing stronger with each passing moment. 
                A deep, guttural growl reverberates through the air, sending a chill down your spine as you realize the source of the disturbance.
            </p>
            <p>
                Emerging from the shadows of the forest, a massive creature slithers into view, its elongated form resembling that of a colossal caterpillar. Its segmented body is adorned with thick, chitinous plates, and its multiple pairs of sharp mandibles gnash hungrily as it catches sight of you and Pog.
            </p>
            <p>
                With a rumbling growl, the Great Worm lashes out, its gaping maw filled with rows of razor-sharp teeth. Pog's voice rings out in alarm as he urges you to take up arms against the monstrous foe.
            </p>
            
            <a href="../battleOutcome/giantWormOutcome.php">Confront the Worm.</a>
            
          
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='enemyAnim3' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Dragonic Peaks but for what purpose?"</h5>
                    <p>"Well, would you look at that! A colossal caterpillar lurking in the shadows. What's next, giant butterflies?"</p>
                </div>
            </div>

        </div>
    </div>
</body>
</html>