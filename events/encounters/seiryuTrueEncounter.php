<?php 

    session_start();

    require '../showStats2.php';
    require '../heal/rest.php';

    function blessing(){
        
        $prevHP = $_SESSION['player']['maxHP'];
        $_SESSION['player']['maxHP'] +=  round($_SESSION['player']['maxHP'] * 0.3);
        echo"<p>HP: ".$prevHP." -> ".$_SESSION['player']['maxHP']." </p>";

        $_SESSION['player']['hp'] = $_SESSION['player']['maxHP'];

        $prevAtk = $_SESSION['player']['atk'] ;
        $_SESSION['player']['atk'] +=  round($_SESSION['player']['atk'] * 0.3);
        echo"<p>Attack: ".$prevAtk." -> ".$_SESSION['player']['atk']." </p>";

        $prevDef = $_SESSION['player']['def'] ;
        $_SESSION['player']['def'] +=  round($_SESSION['player']['def'] * 0.3);
        echo"<p>Defense: ".$prevDef." -> ".$_SESSION['player']['def']." </p>";

        $prevSpd = $_SESSION['player']['spd'];
        $_SESSION['player']['spd'] +=  round($_SESSION['player']['spd'] * 0.3);
        echo"<p>Speed: ".$prevSpd." -> ".$_SESSION['player']['spd']." </p>";
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
    <title>Divine Draconian Peaks </title>
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
        <h3><span class="divine">Grand Dragon of the Divine Peaks, Seiryu the Celestial</span> </h3>
            <div class='enemyStats tooltip'>
                <img class='enemyAnim1' src='../../images/encounters/seiryu.jpg' style='width:300px;length:100px'alt='seiryu? picture'>
                <div class='right' style='left:250px'>
                    <h2><span class="divine">Seiryu</span></h2>
                    <h5></h5>
                    <p><img src='../../images/icons/hearts.png'>HP: ????</p>
                    <p><img src='../../images/icons/katana.png'>Attack: ????</p>
                    <p><img src='../../images/icons/shield.png'>Defense: ????</p>
                    <p><img src='../../images/icons/sprint.png'>Speed: ????</p>
                </div>
            </div>
            <p>
                Seiryu, formerly known by the whimsical alias Pog, is a celestial being of great power and wisdom. 
                Once cursed to inhabit the form of a humble pot, Seiryu's true essence as a celestial dragon shines through upon his transformation. 
                As a celestial dragon, Seiryu embodies the ancient and noble qualities of his kind, wielding both formidable strength and boundless knowledge.
            </p>
            <p>
                Throughout his existence, Seiryu has traversed the realms of both mortal and divine, weaving his influence into the tapestry of fate. 
                His journey has been one of discovery and enlightenment, marked by encounters with mortals and deities alike. 
                Despite his lofty status, Seiryu maintains a humble demeanor, often finding solace in the simple pleasures of life.
            </p>
            <p>
                But perhaps Seiryu's greatest strength lies in his capacity for empathy and compassion. 
                Despite his exalted status, he remains deeply connected to the struggles and triumphs of mortals, lending his aid to those in need with unwavering kindness and generosity.
            </p>
            <p>
                "Remember, even though we may be separated by distance, our bond remains unbroken. Fare thee well, my friend, until we meet again. " - Seiryu
            </p>
            
        </div>

        <div class="textbox peaks1">
            <h2> On the Divine Draconian Peaks </h2>
            <h2>The Celestial Dragon, <span class="divine">Seiryu</span></h2>
            <h4>
               As you awaken from you slumber at the crack of dawn, you feel an otherworldly presence cascading upon you. 
               This feeling is even more intense than Illuyanka's but... it seems to be much more pure?
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/houkagonoyuzora.mp3" type="audio/mpeg">
            </audio>
            <?= rest() ?>
            <p> 
                As the first rays of dawn gently kissed the horizon, illuminating the landscape with a soft golden hue, you witnessed a sight that would forever be etched into your memory. Pog the pot was no more.
                In his stead, Seiryu, the celestial dragon, stood before you, bathed in the gentle light of morning, his form radiant and majestic.
            </p>
            <p>
                Moments before, Seiryu, who had been silently resting nearby, suddenly stirs, his pot-like form beginning to tremble with an otherworldly energy.
                Then, with a soft rumble like distant thunder, Seiryu begins to glow with an ethereal light. 
                It starts as a faint shimmer, barely visible against the backdrop of the early morning light, but soon it grows brighter, more radiant, until it's as if the very sun has descended from the heavens to grace him with its brilliance.
            </p>
            <p>
                At first, you're unsure of what's happening, but as you watch in awe, the pot begins to crack and splinter. 
                With each passing moment, the cracks spread further, and a brilliant glow emanates from Seiryu's core, bathing the surroundings in a soft, ethereal light.
                With a gentle shimmer of light, the earthen vessel begins to crumble away, revealing scales of shimmering bronze and gold beneath. 
                The shards fall away like leaves in the wind, unveiling a serpentine body that coils gracefully upon itself. 
            </p>
            <p>
                The glow intensifies, swirling around Seiryu in a whirlwind of colors: azure blues, emerald greens, and shimmering golds, each hue more vibrant than the last. 
                His form begins to shift and elongate, his pot like visage no more as the true power of the celestial dragon within bursts forth.
                With a mighty roar that echoed through out the peaks, Seiryu emerges from this cacophony of light. His serpentine body coils and undulates with a grace that defies description, each movement a testament to the raw power that emanates from his body.
            </p>
            <p>
                As Seiryu prepares to ascend to the Divine Draconian Peaks with his daughter Sansara, he turns to you with a sense of solemnity. 
                "Our paths diverge here, my friend," he says, his voice tinged with regret. 
                "The matters that plague the peaks are ones that should be resolved by the dragons that call it home."
            </p>
            <p>
                With a graceful bow, Seiryu extends his clawed hand towards you, a gentle smile gracing his serpentine features. 
                "But before we part ways, there is one final gift I must bestow upon you," he says, his voice carrying the weight of centuries. 
                "A blessing to aid you on your journey, wherever it may lead."
            </p>
            <p>
                Closing his eyes for a moment, Seiryu draws upon the ancient magic that flows through his veins, weaving it into a powerful enchantment that surrounds you like a protective aura. 
                "May this blessing guide you on the path ahead," he intones, his voice resonating with the wisdom of ages.
            </p>
            <?= blessing() ?>
            <p>
                But before they ascend, Seiryu turns back to you, his gaze piercing through the veil of time and space to see the essence of your being. 
                "Dear friend," he begins, his words carrying the weight of centuries of wisdom, "you have stood by my side through trials and tribulations, and for that, I am eternally grateful. So before I go, I should shed some light on the true nature of your being."
                You, my friend, are a being of mystery and enigma," Seiryu begins, his voice resonating with ancient knowledge. "I sense within you the echoes of a dying concept, a fading remnant of something once grand and majestic."
            </p>
            <p>
                Pausing for a moment, Seiryu's eyes seem to glimmer with a profound sadness as he continues. "Termina is a world where such concepts come to rest, where forgotten ideas and fading dreams find solace in the embrace of oblivion," he explains, his voice tinged with a sense of melancholy. 
                "And we, the inhabitants of this world, are but shadows of our former selves, clinging to existence in the ever-shifting sands of time."
            </p>
            <p>
                He pauses for a moment, as if searching for the right words to convey his thoughts."But you are different. It is as if you exist beyond the boundaries of time and space, you are here but at the same time you are not..," he continues, his voice filled with wonder. "And yet, you are here now, in this moment, with a destiny yet to be written."
            </p>
            <p>
                As his words hang in the air, you can't help but feel a sense of unease at the implications of his revelation. What does it mean to be a dying concept from beyond Termina? 
                And what does it mean to exist and not exists in world where forgotten concepts and faded dreams go to die? Is this why you don't posses any memories?
                
            </p>
            <p>
                With a gentle smile, Seiryu reaches out to touch your shoulder, his touch imbued with a sense of warmth and reassurance." You are an entity of great potential, with the power to shape the world around you. Whatever you may be, my friend, know that you are not alone," he says, his voice a soothing balm in the tumult of uncertainty.
                "If you are in need of help, just know that you can come to the Divine Draconian Peaks."
            </p>
            <p>
                With those words of insight, Seiryu and Sansara turn towards the towering peaks, their forms disappearing into the swirling mists that shroud the mountains as they ascend. 
                
            </p>
            
            <p>
                And thus concludes your journey with Seiryu, formerly known as Pog, the dragon who was turned into a talking pot. With a heavy heart and a newfound sense of purpose, you bid farewell to your companions, their silhouettes fading into the distance as they disappear into the clouds. 
                Yet even as they vanish from sight, their presence lingers in the air, a reminder of the journey shared and the memories made.
                When you awakened in this world with no memories, Seiryu was your first friend. His quirky humor and unwavering loyalty became the guiding light in the darkness of your uncertainty. 
                Memories of laughter and camaraderie, of trials faced and challenges overcome, flood your mind as you stand alone amidst the towering peaks.
            </p>
            <p>
                Yet, as you gaze out across the vast expanse before you, a flicker of determination ignites within your soul. Though your journey with Seiryu may have reached its end, the path forward remains shrouded in uncertainty and possibility.
                With a wistful smile and a heart heavy with gratitude, you bid farewell to the mountains that bore witness to your journey with Seiryu.
            </p>
            <p>
            And so, with a heart full of hope and a spirit unyielding, you embark upon the next chapter of your journey, ready to face whatever challenges may come your way. 
            </p>
            
            
            
            <ul>
                <li><a href="../place/end.php">The End</a></li>
            </ul>   
        </div>

        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class="enemyAnim" src='../../images/encounters/seiryu.jpg' style='width:100px;'alt='seiryu picture'>
                <div class='bottom' style='top:160px;'>
                    <h2><span class="divine">Seiryu</span></h2>
                    <h5>
                        "Reclaiming what was rightfully his, Seiryu sheds his Pog alias returns to being the celestial dragon he once was."
                    </h5>
                    <p>"This where we must part ways friend..."</p>
                </div>
            </div>
            <div class='enemyStats tooltip'>
                <img src='../../images/encounters/Sansara.png' style='width:100px;'alt='Sansara picture'>
                <div class='bottom'>
                    <h2>Sansara</h2>
                    <h5>"Seiryu's daughter. After emerging from the the underworld, she reunites with her father after a fierce battle."
                    </h5>
                    <p>"I wish you luck on your journey. Me and father have some things to tend too on the top of the peaks."</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>