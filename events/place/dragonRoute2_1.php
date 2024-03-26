<?php 

    session_start();

    require '../showStats2.php';
    

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
    <title>Draconian Woodlands (P2: Route 1)</title>
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
            <h3>The Dragon's Silhouette :</h3>
            <div class='enemyStats tooltip'>
                <img src='../../images/enemy/dragon_shadow.png' style='width:300px;length:150px'alt='dragon picture'>
                <div class='right'>
                    <h2>???</h2>
                    <h5>"Thief who stole Pog's orb"</h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ???</p>
                    <p><img src='../../images/icons/katana.png'>Attack: ???</p>
                    <p><img src='../../images/icons/shield.png'>Defense: ???</p>
                    <p><img src='../../images/icons/sprint.png'>Speed: ???</p>
                    <p><img src='../../images/icons/medal-skull.png'>exp: ????</p>
                </div>
            </div>
            <p>The dragon that stole Pog's orb. Apparently if it wasn't for this dragon, the troll from earlier would've much more fearsome opponent.</p>
            <p>"Pog's voice tends to quake a bit when the topic of this dragon is brought up. Is it fear? Anger? or maybe he knows more than he is letting on?"</p>
        </div>
        <div class="textbox thicket">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2: Route 1)</h2>
            <h4>
               "The Draconian Woodlands are home to a myriad of flora and fauna, each species intricately woven into the tapestry of life that thrives within its depths.
                Towering trees reach towards the sky, their gnarled branches forming a labyrinthine canopy that stretches as far as the eye can see.
                But beneath the tranquil facade of the forest lies a realm of hidden dangers and ancient mysteries."
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/akaifuusen.mp3" type="audio/mpeg">
            </audio>
            <p>
                After the intense battle with the kobolds, Pog pauses to catch his breath, a look of surprise crossing his face as he examines you with newfound admiration.
                "Blimey, mate," he says, shaking his head in disbelief. "I've gotta hand it to ya, you're really comin' into your own out 'ere. I've seen a fair share of travelers in my time, but I ain't never seen someone grow in strength like you have. It's downright unnatural, it is!"
                You offer a modest shrug in response, still feeling the rush of adrenaline from the battle.You try to downplay your newfound abilities to consuming the dragon breath elixir and wyrm scales.
            </p>
            <p>
                But Pog isn't convinced. "Nah, mate, it ain't just goodies that I told ya to eat. That stuff makes ya stronger but it ain't that potent." he insists. "You've got somethin' special about ya, somethin' that's makin' you stronger with each passing moment. 
                And trust me, we're gonna need every bit of that strength if we wanna stand a chance against them dragons up at the Divine Draconian Peaks."
                As you continue through the forest, the atmosphere grows increasingly dense and oppressive, the tangled undergrowth closing in around you like a suffocating embrace. Shafts of sunlight filter through the dense canopy above, casting dappled shadows on the forest floor.
                "This part of the woods is no place for the faint of heart," Pog remarks, his voice tinged with a hint of caution. "The thick foliage and rugged terrain make it a haven for all manner of beasts and monsters. Most settlements steer clear of these parts, opting for safer, more hospitable areas."
            </p>
            <p>
                He continues to paint a picture of the harsh realities of life in the Draconian Woods, describing the constant struggle for survival against the elements and the ever-present threat of predators lurking in the shadows. 
                "But even in the darkest of places, there is sometimes a glimmer of hope," Pog muses, his tone suddenly changing as he catches sight of something unexpected in the distance. "Look there, in the clearing ahead. Is that...a settlement?"
                His disbelief is palpable as he gazes upon the distant cluster of buildings, a stark contrast to the forbidding landscape that surrounds them. "Either they're brave beyond measure or they've lost their minds," he mutters incredulously, his expression a mix of disbelief and curiosity. 
                "But whatever their reasons, it seems we're not alone in these woods after all."
            </p>
            <ul>
                <li><a href="../place/dragonRoute2_1A.php">As you approach the edge of the settlement.</a></li>
            </ul>   
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"You know, back in the day, me and the lord of the woods used to butt heads more times than I care to count. "</p>
                    <p>"Be on ya toes mate. A village in this stretch of the woods is mighty suspicious."</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>