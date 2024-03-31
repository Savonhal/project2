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
    <title>New Havenwood Settlement </title>
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
            <h3> Emissaries of the Woods: Aria and Elara</h3>
           
            <div style='displaye:flex'>
                <div class='enemyStats tooltip'>
                    <img class='enemyAnim1' src="../../images/encounters/Aria.png" style='width:200px;' alt="undying mage">
                    <div class='bottom' style='top: 175px; left: 100px;'>
                        <h2>Aria</h2>
                        <h5>"Emissary of the Lord of the Woods"</h5>
                        <p>"The right hand fae of the Lord of the Woods. She is responsible for many tasks in and out of HavenWood."</p>
                    </div>
                </div>
                <div class='enemyStats tooltip'>
                    <img src="../../images/encounters/Elara.png" style='width:200px;' alt="undying mage">
                    <div class='bottom' style='top: 175px; left: 100px;'>
                        <h2>Elara</h2>
                        <h5>"Attendant of Aria"</h5>
                        <p>
                            "An Undying who helps Aria with her duties. Her ability to commune with the wisps and sprites have been the saving grace for many who live in the Draconian woodlands."
                        </p>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="textbox wood_village">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2: Route 1)</h2>
            <h2>New Havenwood Settlement</h2>
            <h4>
                New Havenwood stands as a beacon of hope amidst the untamed wilderness of the Draconian Woods, its sturdy walls and tranquil surroundings offering sanctuary to those who seek refuge from the dangers of the forest.
                The settlement is nestled within a small clearing, surrounded by towering trees that seem to stretch endlessly towards the sky.
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src="../../music/seishishitauchu.mp3" type="audio/mpeg">
            </audio>
            <p>
                Just as you reach for the door handle, a soft voice interrupts your thoughts. Your attention is drawn to the entrance as a fairy and an undying girl make their way towards you. 
            </p>
            <p>
                The fairy's ethereal presence is unmistakable, her delicate wings shimmering with hues of dark purple and blue, casting an otherworldly glow around her. She exudes an air of solemnity, her gaze piercing yet distant.
                Beside her stands the undying girl, garbed in a pristine white robe adorned with intricate red markings. A staff adorned with a soft, radiant light is clutched in her slender hands, emitting a gentle aura that illuminates her features. Yellow sprites dance around her in a mesmerizing display, adding to the mystique of her presence
            </p>
            <p>
                Their arrival draws curious glances from the inn's patrons, their whispers fading into the background as the fairy and the undying girl approach. With a graceful yet purposeful stride, they close the distance, their expressions grave yet resolute. It is clear that they bear a message of importance, one that concerns you and Pog directly.
                The fairy's voice, though soft, carries an air of authority as she addresses you and Pog. "Greetings, travelers," she begins, her tone tinged with solemnity. "I am Aria, a representative of the Lord of the Woods."
                Aria's gaze shifts between you and Pog, her eyes betraying a hint of disdain as they linger on Pog."And this," she continues, gesturing towards the undying girl, "is my assistant, Elara, a mage of considerable skill."
                Elara offers a respectful nod in greeting, her demeanor calm yet guarded. "The Lord of the Woods is aware of your presence," she continues, her voice laced with thinly veiled condescension. "And he has tasked us with delivering a message."
                Beside her, the undying girl remains silent, her expression unreadable as she watches the exchange.
                Pog's brows furrow in irritation, though he maintains his composure. "Well, spit it out then," he retorts, his tone laced with impatience. "We haven't got all day."
            </p>
            <p>
                Althea's gaze shifts to you, her demeanor growing more somber. "We have come on behalf of the Lord of the Woods," she explains, her voice soft yet urgent."The Lord of the Woods is aware of your... predicament, and the peril that threatens the Divine Draconian Peaks."
                Pog's expression shifts, a mixture of surprise and suspicion crossing his features. "The lord owes me a favor or two," he mutters under his breath, though his words are loud enough for the fairy to hear. She bristles at his comment, her wings fluttering with agitation.
                "Nothing comes for free, Pog," she retorts sharply, her tone dripping with sarcasm. "If you seek the lord's assistance, you must be prepared to offer something in return."
            </p>
            <p>
                Pog snorts derisively, crossing his handles with a mixture of defiance and resignation. "Oh, how kind of him," he mutters sarcastically. "And what does the illustrious Lord of the Woods want in return for his 'help'?"
                Have you encountered any of the Great Insects near Havenwood?" Aria inquires, her gaze flickering between you and Pog. As Aria mentions the recent sightings of Great Insects near Havenwood, your mind immediately flashes back to the battle with the Giant Worm. You exchange a knowing glance with Pog, both of you recognizing the gravity of the situation.
                Pog raises an eyebrow in curiosity as Aria explains the urgency of the task. "Why isn't the Lord of the Woods handling this himself?" he interjects, his tone tinged with skepticism.
                Aria's expression remains impassive as she responds to Pog's inquiry. "The Lord of the Woods has many responsibilities," she explains, her voice measured. "The events unfolding on the Divine Draconian Peaks have required his attention."
            </p>
            <p>
                Elara steps forward, her presence commanding attention as she addresses you and Pog. "The Diamond Mantis," she begins, her gaze steady as she meets your eyes, "is perhaps the most formidable of the Great Insects that threaten our village. Its sheer size and strength make it a formidable adversary, capable of wreaking havoc upon our homes and our people."
                She continues, her words carrying a sense of urgency. "The Lord of the Woods has deemed it necessary to eliminate the Diamond Mantis before it can wreak havoc on Havenwood.".
                She looks to you and Pog, her gaze unwavering. "It falls upon you two to undertake this mission. Slaying the Diamond Mantis is no small feat, but it is one that must be accomplished if we are to ensure the safety of Havenwood and its people."
            </p>
            <p>
                "We must remain vigilant here in Havenwood," Aria explains, her voice tinged with urgency. "Should any of the other Great Insects approach the village, Elara and I will be needed to ensure the safety of our people."
                Elara steps forward, her expression grave yet resolute. "We will hold the line here," she assures you and Pog. "But the task of facing the Diamond Mantis falls to you two. It is a perilous journey, but one that must be undertaken for the sake of Havenwood."
                Pog grunts in agreement, a determined glint in his eye. "Well, what are we waiting for?" he declares, turning to you with a smirk. "Let's go squash us a bug."
                As Aria and Elara bids you and Pog farewell, you feel a sense of determination settling over you.
            </p>
           
            <ul>
                <li><a href="../place/dragonRoute2_1C.php"> With the task at hand clear in your mind, you and Pog set off into the dense undergrowth of the Draconian woods.</a></li>
            </ul>   
        </div>
        <div class="stats">
            <?= showStats(); ?>
            <div class='enemyStats tooltip'>
                <img class='pogSerious' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='kobold picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"You know, Aria, I've seen bigger butterflies. But I suppose you make do with what you've got, right?"</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>