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
    <title>Draconian Woodlands (P1)</title>
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
                <source src="../../music/choushinkainoyuuei.mp3" type="audio/mpeg">
            </audio>
            <p>
                After the intense battle with the kobolds, Pog pauses to catch his breath, a look of surprise crossing his face as he examines you with newfound admiration.
                "Blimey, mate," he says, shaking his head in disbelief. "I've gotta hand it to ya, you're really comin' into your own out 'ere. I've seen a fair share of travelers in my time, but I ain't never seen someone grow in strength like you have. It's downright unnatural, it is!"
                You offer a modest shrug in response, still feeling the rush of adrenaline from the battle. "I suppose I've been through a few scrapes," you say, trying to downplay your newfound abilities.
            </p>
            <p>
                But Pog isn't convinced. "Nah, mate, it ain't just a few scrapes," he insists. "You've got somethin' special about ya, somethin' that's makin' you stronger with each passing moment. 
                And trust me, we're gonna need every bit of that strength if we wanna stand a chance against them dragons up at the Divine Draconian Peaks."
                As you continue through the forest, the atmosphere grows increasingly dense and oppressive, the tangled undergrowth closing in around you like a suffocating embrace. Shafts of sunlight filter through the dense canopy above, casting dappled shadows on the forest floor.
                Pog leads the way, his keen eyes scanning the surroundings for any signs of danger. "Keep yer wits about ya, mate," he warns, his voice low and cautious. "We're gettin' close to the giant insect nest now, and we don't wanna go stirrin' up trouble where there ain't none."
            </p>
            <p>
                As you walk, Pog begins to explain the peculiar nature of the giant insects that inhabit the forest. Despite their formidable size, these creatures are surprisingly intelligent and neutral, more curious than aggressive towards intruders in their territory. 
                Their lack of natural predators and slow reproductive rate have allowed them to evolve a cautious and thoughtful approach to survival.
                "These insects ain't like the rest of the critters 'round 'ere," Pog explains, his brow furrowed in thought. "They've got a mind of their own, they do. They even trade with other creatures, can ya believe it? Seems they're on the cusp of achievin' true sentience, and the lord of the woods is watchin' 'em closely."
                You listen intently as Pog recounts tales of the giant insects' strange behavior and their close relationship with the lord of the woods. It's a fascinating glimpse into the intricacies of the forest ecosystem, and you can't help but feel a sense of awe at the creatures' intelligence and resilience.
            </p>
            <ul>
                <li><a href="../encounters/koboldEncounter.php">As you approach the edge of the giant insect nest, you steel yourself for whatever challenges lie ahead</a></li>
            </ul>   
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"You know, back in the day, me and the lord of the woods used to butt heads more times than I care to count. But looks like he's found himself a new hobby with these bugs. Can't say I blame him, really."p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>