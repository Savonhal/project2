<?php
    session_start();
    require '../../game_logic/saveCharacterStats.php';
    require '../../events/showStats2.php';
    
    if(isset($_SESSION['player'])){
        saveCharacterStats('../../data.txt');
        unset($_SESSION['player']);
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../textbox.css">
    <link rel="stylesheet" href="../../index.css">
    <link rel="stylesheet" href="../../enemy.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crimson+Text">
    <title>The End</title>
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
    <div class="box termina" style="margin-left: 20%">
        <div class="leaderBoard">
            <h2>Web Development Project 2</h2>
            <h2>Group 9</h2>
            <p>- Kamrul Tarafder</p>
            <p>- Dat Huynh</p>
            <p>- Triet Luu</p>
            <br>
            <img class="enemyAnim" src="../../images/player/sword.jpg" style="width:200px; height:150px; margin-left:-10px;" alt="sword">
        </div>
        <div class="textbox void">
            <div class="intro">
                <h3>Ending Theme</h3>
                <audio controls autoplay="true" loop>
                    <source src="../../music/aoisorawomiteita.mp3" type="audio/mpeg">
                </audio>
                <h1>THE END</h1>
                <h2>Your character has been saved and added to the leader board.</h2>
                <p></p>
                <p>
                    Congratulations! You reached the end of the game. 
                    The game was suppose to have more content and story near the end but things had to be scrapped to meet the dead line. 
                    It takes surprising amount of effort and time when writing and drafting the story line as well as balancing the stats and battles. 
                    So we only have so much time to work on this before working on other projects and work. If you need a general synopsis on the story, you can scroll down to read them.
                </p>
                <ul>
                    <li><a href="../../index.php">Or you can return to the starting page and create a new character</a></li>
                </ul>
                <h1>General Synopsis of the Plot:</h1>
                <p>
                    You have awoken in a strange a mysterious world called Termina with no recollection of you memories. Armed with only a sword and a shield,
                    In an effort to gain your memories back, you embark on a journey through Termina and where you come across a suspicious talking pot named Pog. 
                    After offering up rare and precious items for you to consume, Pog convinces you to come to the Divine Draconian Peaks where you might find the truth behind your existence.
                    Encounters after encounters with monsters, you grow stronger through battles in the Draconian Woodlands. 
                    Pog also reveals a bit of about himself and the reason for why he wants your help as it is revealed that his orb was stolen by a dragon.
                    At this point the story diverges into two paths before joining up again:
                </p>
                <h2>Taking the left fork:</h2>
                <p>
                    By taking the left fork, you travel through the dense undergrowth of the Draconian Woods where Giant Insects roam. 
                    Here you'll make your way to New Havenwood, a relatively new settlement, where the inhabitants are all the survivors or descendants of Old Havenwood.
                    New Havenwood is being threatened by the encroaching Giant Insects that have been getting closer and closer to the village. One of these insects in particular,
                    the Diamond Mantis, is an extremely dangerous monster who is the apex predator of these parts of the woods. Aria and Elara, emissaries of Cernunnos, approaches you and Pog
                    and offer them a task in return for a blessing from Cernunnos. Taking this offer, you and Pog embark on a quest to slay the Diamond Mantis who appears after brutally interrupting the meal of two Giant Spiders.
                    During or after the battle, Cernunnos comes to you in the form of a wolf and bestows his blessing to you. It is revealed here that Pog's real name is Seiryu and that he was originally a celestial dragon.
                    Roughly 400 years, Seiryu was forced to make an ultimatum where he must choose between his lord or his family during the onset of a rebellion on the Divine Draconian Peaks.
                    Seiryu chooses to save his family but only manages to save his daughter. As Seiryu rushed towards his lord, he was ambushed a Demon God who stole his orb and transformed him into a pot.
                </p>
                <h2>Taking the right fork:</h2>
                <p>
                    By taking the right fork, you travel through the a rather mystical region of the Draconian Woods. Here you are guided by woodland sprites and come across an Elder Treant by the name of Oakenheart.
                    Oakenheart reveals that he was the former guardian of Old Havenwood before its demise and is now atoning for his failure by maintaining a barrier that keeps the pair of oni and their group of demons responsible from escaping.
                    Pog offers the Oakenheart a proposition where they will slay the demons from within the barrier if they are allowed passage into it. Agreeing, Oakenheart allows them passage into the barrier where you and Pog
                    fight a variety of specters and demons in Old Havenwood. During one of your battles, Aria and Elara appear and assist you in your battles as they were sent by Oakenheart. 
                    Eventually, you come across the two oni responsible for Old Havenwood's demise, the oni brothers, Akuma and Yuki. 
                    After battling and vanquishing them, the barrier soon dissipates as Cernunnos,in the form of an elk, teleports your group somewhere outside the ruined settlement and grants you a blessing. Aria and Elara leave the group as they have their own responsibilities to tend to leaving you and Pog alone.
                    It is revealed here that Pog's real name is Seiryu and that he was originally a celestial dragon.
                    Roughly 400 years, Seiryu was forced to make an ultimatum where he must choose between his lord or his family during the onset of a rebellion on the Divine Draconian Peaks.
                    Seiryu chooses to save his family but only manages to save his daughter. As Seiryu rushed towards his lord, he was ambushed a Demon God who stole his orb and transformed him into a pot.
                </p>
                <h2>The story converges back here:</h2>
                <p>
                    As Seiryu, Pog's true name, shares with you his full backstory, it is revealed that him and his daughter recently traveled to the underworld in order to recover Seiryu's orb. They had succeeded in claiming the orb but were soon separated due to some unforeseen circumstances.
                    Seiryu, now on the surface world of Termina, hides in a Troll's treasure cache as he attempts to access his orbs power but he was interrupted by Illuyanka who finds his orb after he abandons it to hide.
                    Soon afterwards, you meet Seiryu and you journey starts here. Resuming back to the present, you and Seiryu are now on the Divine Draconian peaks where you encounter a swarm of lesser dragons who were sent by Illuyanka to scout and gauge your strength.
                    Soon afterwards, Illuyanka appears before your group in the form of a celestial dragon after accessing the orb's power with help from Azazel, the one responsible for transforming Seiryu. As the battle between you and Illuyanka rages on,
                    Illuyanka finally gets use to his new powers and unleashes them turning the tide of battle heavily in his favor. Just when he is about to deal the final blow, a mysterious stranger appears and interrupts him while stealing the orb.
                    As the stranger throws the orb to Seiryu and heals you, they intercept Illuyanka's attack and counter him with their own. As his body starts to deteriorate with out the orb, Illuyanka unleashes a suicidal attack aiming to take out you, the stranger, and Seiryu.
                    The stranger too readies their own powerful attack and clashes with Illuyanka which causes a large ball of light to radiate throughout the peaks. Following the stranger's signal, you deal the final blow to Illuyanka ending him once and for all.
                    After the battle, you and the stranger share introductions and it is revealed that the stranger was the daughter of Seiryu, Sansara. Seiryu soon regains his true form and tells you that this is where he will part ways with you. 
                    Before ascending the peaks with Sansara, he bestows you with a blessing and reveals what he knows about regarding your true nature and identity. After departing, you leave the Divine Draconian Peaks and continue your journey to recover your missing memories and learn more about yourself.
                </p>
                
            </div>
        </div>
        <div class="stats">
            <h2><span style="font-weight: bold;">Thank you</span> for playing this game and making it to the end!</h2>
            <p style="text-align: left;">A lot of time was spent creating these storylines and making sure everything was ran smoothly.</p>
            <p style="text-align: left;">You can view your final stats on the <a href="../../index.php" style="color: white">starting page leaderbord</a></p>
            <h2>Lookout for our future projects & please continue supporting us!</h2>
        </div>
    </div>
   
    <p></p>
</body>
</html>


