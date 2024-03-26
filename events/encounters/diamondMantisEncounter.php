<?php 

    session_start();

    require '../showStats2.php';

    function encounter(){
        $monster = [
            "name" => "Diamond Mantis",
            "hp" => 500,
            "maxHP" => 500,
            "atk" => 65,
            "def" => 80,
            "spd" => 65,
            "monExp" => 5000,
        ];
        echo"
            <div class='enemyStats tooltip'>
                <br>
                <img class='enemyAnim4' src='../../images/bosses/diamondMantis.jpg' style='width:250px;length:125px'alt='mantis picture'>
                    <div class='right'>
                        <h2>".$monster['name']."</h2>
                        <h5>
                            'Ruthless and Unrelenting, this apex predator normally stalks the dense and dark parts of the Draconian Woodlands in search for its favorite meal: Greater Insects.
                             However, it seems like this individual attacked the village directly.'
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
            Encased in a gleaming exoskeleton resembling diamond-like crystalline structures, the mantis possesses unparalleled durability, rendering it impervious to many conventional forms of attack. 
            This remarkable adaptation provides the mantis with unparalleled protection against a wide range of threats, rendering it virtually impervious to slashes, scratches, and even the most potent of venomous or acidic attacks. 
            Its exoskeleton also acts as a natural conductor, deflecting electric currents and further enhancing its resilience in the face of danger.
            This incredible resilience has allowed the Diamond Mantis to assume its role as a fearsome predator, shaping the very fabric of the Draconian Woodlands through its relentless predation. 
        </p>';
        echo '<p>
            "You know, if we play our cards right, that Diamond Mantis might just be the ticket to gettin\' on the lord of the woods\' good side. Who knows, maybe he\'ll even owe us a favor after this little skirmish." - Pog
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
    <title>Diamond Mantis Encounter</title>
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
        </div>
        <div class="textbox wood_village">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2: Route 1 BOSS)</h2>
            <h2>Showdown at Great Insect Village: <span class="boss">Diamond Mantis</span></h2>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/boss_encounter/shinigaminokoushin.mp3" type="audio/mpeg">
            </audio>
            <h4>
                "Indeed, while many of the Great insects of the Draconian Woodlands have undergone significant evolutionary changes over the millennia, the Diamond Mantis stands as a testament to the concept of "if it ain't broke, don't fix it." Unchanged and unyielding, this formidable predator has remained a lethal killing machine since time immemorial. 
                As the top predator in the region, the mantis's relentless predation has driven many of the Great insect species to evolve complex social behaviors and heightened intelligence as a means of survival.
                This has led to the development of intricate social hierarchies and communication systems among the insect communities, paving the way for the emergence of sapience in many of the Great Insect species of the Draconian Woodlands.  
            </h4>
            <p>
                A large mantis, descends from sky and into the middle of the village. 
                "A Dimaond Mantis has invaded!" a scopion hisses as alarms ring through out the village. 
                Diamond Mantises are usually be repelled and deterred by the various tools and traps that are set in and around the walls and lands that surround the village but it seems like this one has somehow gotten into the middl eof the village.
                The giant scorpions and spiders surround the Diamond Mantis in an effort to repel it but their attacks are ineffective. Without those tools and traps being readily accessable in the village, the village will be at it's mercy until those tools get to the middle of the village.
            </p>
            <p>
                As Pog watches the chaos unfold in the insect village, a sly grin spreads across his face, and a calculating gleam flickers in his eyes.
                "Now, now, ain't this a stroke of luck," he muses to himself, his lips curling into a smirk. "Helpin' out these bugs might just earn us a favor from ol' Stick-in-the-Mud himself. And we all know how much he loves bein' in debt to yours truly."
            </p>
            <p>
                As he watches the player dive into the fray with determination, Pog's thoughts turn to the lord of the woods and their storied history. Memories of past encounters and petty rivalries flood his mind, each one fueling his desire to come out on top in their ongoing game of one-upmanship.
            </p>
            <p>
                "Imagine the look on his face when he owes us one," Pog chuckles to himself, a wicked glint in his eye. "Oh, the possibilities... A favor from the lord of the woods could open doors we never even knew existed. All it takes is a little finesse, a touch of charm, and a whole lot of luck."
            </p>
            <p>
                With a confident swagger, Pog joins the fray, his mind already plotting his next move.
            </p>
            <ul>
                <li><a href="../battleOutcome/diamondMantisOutcome.php">Continue to battle </a></li>
            </ul>   
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"Well, well, would ya look at that beastie? That there's what we call a Diamond Mantis—a real piece of work, if ya ask me."</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>