<?php 
    session_start();

    require '../showStats2.php';
    require '../heal/rest.php';
    
    

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
    <title>Aria and Elara</title>
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
            <div style='display:flex'>
                <div class='enemyStats tooltip'>
                    <img class='enemyAnim1' src="../../images/encounters/Aria.png" style='width:200px;' alt="undying mage">
                    <div class='right' style='top: 140px; left: 100px; background-color: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5))'>
                        <h2>Aria</h2>
                        <h5>"Emissary of the Lord of the Woods"</h5>
                        <p>"The right hand fae of the Lord of the Woods. She is responsible for many tasks in and out of Havenwood."</p>
                    </div>
                </div>
                <div class='enemyStats tooltip'>
                    <img src="../../images/encounters/Elara.png" style='width:200px;' alt="undying mage">
                    <div class='right' style='top: 140px; left: 60px; background-color:  linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5))'>
                        <h2>Elara</h2>
                        <h5>"Attendant of Aria"</h5>
                        <p>
                            "An Undying who helps Aria with her duties. Her ability to commune with the wisps and sprites have been the saving grace for many who live in the Draconian woodlands."
                        </p>
                    </div>
                </div>
            </div>
            <p>
                Unlike other beings in Termina, the Undying do not adhere to the traditional cycle of life and death. Instead, they are born into the world already touched by the veil of death, their existence marked by an eternal connection to the Termina's underworld where they originally belong.
                Physiologically, the Undying bear a striking resemblance to humans, elves, and other mortal races, possessing the same basic features and bodily functions. However, there are subtle differences that set them apart. Their skin often bears a pallid hue, as if touched by the chill of the grave, and their eyes may possess an otherworldly glow, hinting at the depths of their otherworldly nature.
                Despite their moniker, the Undying are not invulnerable to the ravages of existence. While they cannot perish from age, injuries and illnesses can send an Undying to their demise but while their bodies might wither and decay, their soul remains intact waiting for the right moment to once again manifest a new body. 
            </p>
            <p>
                It is said that many of the Undying left Termina's underworld roughly 400 years ago, near the onset of the Divine Draconian Peaks rebellion. 
                Since then, these enigmatic beings have spread throughout Termina's surface world, seeking refuge and forging new lives for themselves.
                Some of them have found solace in settlements like Havenwood, where they are welcomed with open arms by those who recognize their value and unique contributions.
                However, there are whispers among the inhabitants of Havenwood and beyond, murmurs of caution that speak of the Undying's propensity to attract danger. 
                It is said that their presence often draws the attention of supernatural beings and malevolent forces, drawn to their otherworldly souls like moths to a flame.
                For some, this knowledge instills a sense of unease, a lingering fear of the unknown and the potential threats that may one day come to Havenwood.
                And sadly this fear came to fruition when a pair of Oni, fiendish creatures from the depths of the underworld, descended upon the village with malicious intent. 
            </p>

        </div>
        <div class="textbox ghost_town">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2 2)</h2>
            <h2>Old Havenwood</h2>
            <h4>
               "Nestled within the depths of the Draconian Woodlands, Old Havenwood was once a thriving settlement teeming with life and vibrancy.
               Now, Old Havenwood stands as a haunting reminder of its former glory, its once bustling streets now overgrown with tangled vines and creeping ivy. The echoes of laughter and song have long since faded, replaced by an eerie silence broken only by the whispering winds and the occasional murmuring of the undead."
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src='../../music/yonseinomissa.mp3'>
            </audio>
            <p>
                As you, Pog, Aria, and Elara traverse through the eerie remnants of Old Havenwood, Pog strikes up a conversation with Aria and Elara, curious about the history of the forsaken settlement. 
                Aria, with her ethereal aura, begins to recount the history of Old Havenwood.
            </p>
            <p> 
                "Long ago," Aria begins, her voice soft but tinged with sorrow, "Old Havenwood was a flourishing village nestled within the embrace of the Draconian Woodlands. 
                It was a sanctuary for many, including the Undying, who sought refuge from the turmoil of the underworld."
                Elara nods in agreement, her expression reflecting a sense of sorrow. "Many Undying sought refuge here after fleeing the depths of the underworld, seeking solace and safety amidst the ancient trees," she adds softly.
                Elara pauses for a moment and then adds on, her voice carrying a hint of melancholy, "But the tranquility of Old Havenwood was shattered when the Oni brothers descended upon the village. 
                Driven by their insatiable hunger for souls of the Undying, they ravaged the settlement, leaving nothing but destruction and despair in their wake."
            <p>
                Elara's expression darkens as she continues the tale. "Many lives were lost that day," she murmurs, her voice trembling with emotion. "Those who survived were forced to flee, seeking refuge in the dense forests beyond.
                It was there, amidst the dense foliage and ancient trees, that they founded New Havenwood, a sanctuary born from the ashes of tragedy."
            </p>
            <p>
                As Pog observes Elara's ethereal presence, he can't help but notice the telltale signs of her undead nature. 
                With a curious tilt of his head, he directs his inquiry to her, his voice tinged with genuine interest. "Forgive my curiosity, Elara, but what brought the Undying to Old Havenwood in the first place?"
            </p>
            <p>
                Elara's voice carries a somber tone as she recounts the tumultuous events that led to the Undying's exodus from the underworld. 
                "The rebellion on the Divine Draconian Peaks marked a turning point for our kind," she explains, her words weighed down by the gravity of the past. 
                "As the conflict raged on the surface, the very fabric of the underworld began to unravel."
            </p>
            <p>
                Her eyes reflect the flickering shadows of memory as she continues. "The powerful demon gods and archfiends, once bound by the laws of their realm, suddenly grew emboldened in their bid for dominion. Territories once held sacred were overrun, and chaos reigned unchecked."
            </p>
            <p>
                Elara's expression darkens with the weight of the revelation. "As the boundaries between our world and the underworld weakened, many of the Undying saw a chance for freedom," she murmurs, her voice tinged with a mixture of longing and regret. 
                "Faced with the prospect of endless persecution, we seized the opportunity to escape our fate and seek refuge in the lands above."
            </p>
            <p>
                She pauses, her eyes flickering with a distant sorrow as she continues. "Old Havenwood was one of the places where many of the Undying came to, a place where we could live in peace and harmony alongside the natural world. But fate had other plans, and our sanctuary was shattered by the arrival of dark forces beyond our reckoning."
            </p>
            <p>
                As Pog listens to Elara's recounting, his mind races with thoughts and memories, each piece of information fitting into the puzzle of his past. "The rebellion... the weakening of the underworld... the escape of the Undying..." he murmurs softly to himself, his brow furrowed in deep contemplation.
            </p>
            
            
            <a href='../encounters/oniBrosEncounter.php'><p>Meanwhile the Imp has reached the the pair of Oni brothers...</p></a>
        </div>
        
        <div class="stats">
            <?= showStats() ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='pog picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"The Undying are here because of what happened in the peaks...is it possible that.."</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>