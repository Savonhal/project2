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
                <img class='enemyAnim4' src='../../images/bosses/diamondMantis.png' style='width:250px;length:125px'alt='mantis picture'>
                    <div class='right'>
                        <h2 class='boss'>".$monster['name']."</h2>
                        <h5>
                            'Ruthless and Unrelenting, this apex predator normally stalks the dense and dark parts of the Draconian Woodlands in search for its favorite meal: Greater Insects.
                            However, it seems like they've been getting closer to New Havenwood.'
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
            "I\'ve heard stories about the Diamond Mantis, but seeing it in action... It\'s a whole different story. That thing\'s a force of nature." - Pog
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
                "Indeed, while many of the Great insects of the Draconian Woodlands have undergone significant evolutionary changes over the millennias, the Diamond Mantis stands as a testament to the concept of "if it ain't broke, don't fix it." 
                Unchanged and unyielding, this formidable predator has remained a lethal killing machine since time immemorial. 
                As the top predator in the region, the mantis's relentless predation has driven many of the Great insect species to evolve complex and dangerous defense mechanisms and heightened intelligence as a means of survival.
            </h4>
            <p>
                Suddenly, the silence was shattered by a low, ominous rumble. 
                Without warning, the Diamond Mantis emerged from the shadows, its crystalline carapace glinting in the dappled sunlight. 
                Towering over the spiders, it moved with an unnerving fluidity, its movements so swift and erratic that it seemed to blur with the surrounding foliage.
            </p>

            <p>
                With a lightning-fast strike, the Diamond Mantis descended upon one of the spiders, its razor-sharp mandibles slicing through chitin and flesh with chilling efficiency. 
                The unfortunate arachnid let out a shrill, desperate cry as it was pinned beneath the Mantis's relentless assault, its struggles futile against the overwhelming force of its attacker.
            </p>

            <p>
                One of the spiders, sensing the imminent threat, lunged at the mantis with desperate ferocity, its venomous fangs bared in a futile attempt to defend its fallen kin.
                But the Mantis was unfazed, its impenetrable carapace repelling the spider's feeble assault with contemptuous ease. After eating most first spider, it turned it's focus on the spider on its back. 
                With a disdainful flick of its massive appendage, the Mantis dispatched the second spider , its lifeless form falling limp to the forest floor.
            </p>

            <p>
                As Pog and you watched in horror, paralyzed by the sheer brutality of the scene unfolding before you, the Diamond Mantis turned its gaze upon you. 
                As the Mantis turned its cold, unfeeling gaze upon them, a shiver ran down their spines, the weight of its silent judgment pressing down upon them like a suffocating blanket of dread.
                Its multifaceted eyes gleamed with an unsettling intelligence as it twitched its head in anticipation, the anticipation of the hunt. 
                With a twitch of its head, the Mantis surges forward, its movements erratic and unpredictable, as it charged towards its next victims.
            </p>

            <ul>
                <li><a href="../battleOutcome/diamondMantisOutcome.php">You ready yourself for combat. </a></li>
            </ul>   
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"Well, looks like our luck just ran out. That Diamond Mantis has caught wind of us. Brace yourself, partner. We're in for a rough ride."</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>