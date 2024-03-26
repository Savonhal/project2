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
                        <h2 class='boss'>".$monster['name']."</h2>
                        <h5>
                            'Ruthless and Unrelenting, this apex predator normally stalks the dense and dark parts of the Draconian Woodlands in search for its favorite meal: Greater Insects.'
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
        <div class="textbox thicket">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2: Route 1 BOSS)</h2>
            <h2>BOSS ENCOUNTER: <span class="boss">Diamond Mantis</span></h2>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/boss_encounter/shinigaminokoushin.mp3" type="audio/mpeg">
            </audio>
            <h4>
                "Indeed, while many of the Great insects of the Draconian Woodlands have undergone significant evolutionary changes over the millennia, the Diamond Mantis stands as a testament to the concept of "if it ain't broke, don't fix it." Unchanged and unyielding, this formidable predator has remained a lethal killing machine since time immemorial. 
                As the top predator in the region, the mantis's relentless predation has driven many of the Great insect species to evolve complex and dangerous defense mechanisms and heightened intelligence as a means of survival.
            </h4>
            <p>

            </p>

            <p>

            </p>

            <p>

            </p>

            <p>

            </p>

            <p>

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