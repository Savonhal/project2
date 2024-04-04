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
    <title>Draconian Woodlands (P4)</title>
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
        <div class="battleBox ">
        <h3>Seiryu's Daughter:</h3>
            <div class='enemyStats tooltip'>
                <img src='../../images/encounters/sansara_shadow.png' style='width:250px;length:100px'alt='sansara? picture'>
                <div class='right'>
                    <h2>Sansara</h2>
                    <h5></h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ???</p>
                    <p><img src='../../images/icons/katana.png'>Attack: ???</p>
                    <p><img src='../../images/icons/shield.png'>Defense: ???</p>
                    <p><img src='../../images/icons/sprint.png'>Speed: ???</p>
                </div>
            </div>
            <p>Born from the union of a celestial dragon and an undying, Sansara embodies the convergence of two disparate worlds. </p>
            <p>
                "Don't worry about her. She's been training under me for centuries. Tough as nails, she is. Always had a knack for magic, too. 
                She's probably causing more trouble for the demons down there than they can handle." - Seiryu
            </p>
            
        </div>

        <div class="textbox forest_opening">
            <h2>To the Divine Draconian Peaks: Out of the Draconian Wood Lands (P4)</h2>
            <h2>A Journey to the Peaks</h2>
            <h4>
                The Divine Draconian Peaks rise majestically from the earth, their towering forms reaching towards the heavens with an awe-inspiring grandeur. 
                Jagged cliffs of rugged stone jut out from the verdant landscape below, their sheer faces weathered by the passage of time and the elements. 
                Tendrils of mist cling to the slopes, swirling in ghostly wisps around the ancient peaks like ethereal guardians of the realm.
                The slopes of the peaks are cloaked in a tapestry of emerald foliage, dotted with cascading waterfalls that tumble down into hidden grottos below. 
                Thick forests cling to the mountainsides, their vibrant hues a stark contrast to the stark stone that forms the backbone of the peaks.
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/yume.mp3" type="audio/mpeg">
            </audio>
            <p>
                After treking through the Draconian Woodlands for some days, you and Seiryu have made it to a small region between the Mountain Range and the woods.
            </p>
            <p>
                You inquire <span class="divine">Seiryu</span> on how the other dragon stole his orb if the Demon God stole it.
            </p>
            <p>
                Seiryu listens to the your question with a somber expression, memories flooding back as he recounts the events of two decades past. "Ah, that's a long story, kid," he begins, his voice tinged with regret. "About twenty years ago, my daughter and I took a little trip to the underworld together. 
                We managed to get our hands on the orb, but things went south pretty quickly, and we got separated."
            </p>
            <p>
                His gaze drifts off into the distance as he recalls the ordeal. "I barely made it out alive, and I've been laying low ever since, trying to access the orb's power and undo this curse."
                he explains, his voice tinged with frustration. "I was so close, kid. I could feel it. But then that dragon showed up and snatched it away before I could finish the job."
            </p>

            <p>
                When the player expresses concern for his daughter, Seiryu offers a small, reassuring smile."I barely made it out alive since I'm just pot. But her? Nah, she'll be alright.She's a tough one, kid, trained her well for the last few hundred years.
                She knows how to handle herself down there, even against the likes of Arch Demons and third-rate gods.
                As long as she steers clear of the big shots, she'll find her way out soon enough. She's got my blood running through her veins, after all." 
            </p>
            <p>
                "And as for the dragon who stole my orb... well, let's just say I've got a few choice words for that meddling lizard."
            </p>
            
            <p>
                Seiryu's expression shifts, a steely determination replacing the worry. "But enough about that. We've got our own task at hand now, and we can't afford to dwell on the past. We've got to focus on getting my orb back and taking down whoever's behind this mess once and for all."
            </p>

            <p>
                As you and Pog make your way through the plains, the blessing of the Cernunnos has kept many of the weaker monsters from approaching you.
            </p>


            <ul>
                <li><a href="../encounters/lesserDragonEncounter.php">You Approach the base of the Divine Draconian Peaks</a></li>
            </ul>   
        </div>

        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog(<span class="divine">Seiryu</span>)</h2>
                    <h5>"Celestial Dragon Seiryu, Guardian of the Divine Draconian Peaks. 
                        He serves his lord, the Dragon God Bahamut, and protects the realm of the Divine Draconian Peaks alongside its other guardians.
                        After returning from the Divine Convention and parting ways with his lord, a rebellion sparked and forces Seiryu to make an ultimatum.
                        He shoulders the weight of his decision to this very day."
                    </h5>
                    <p>"Ah, Sansara... She's quite the character, let me tell you. Got her mother's spirit, that one."</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>