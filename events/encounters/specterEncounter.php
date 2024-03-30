<?php 
    session_start();

    require '../showStats2.php';

    function encounter(){   
        $monster = [
            "name" => "Specter",
            "hp" => 75,
            "maxHP" => 75,
            "atk" => 9,
            "def" => 7,
            "spd" => 9,
            "monExp" => 200,
        ];    
        echo"
        <div class='enemyStats tooltip'>
                <img class='enemyAnim'src='./images/enemy/specter.jpg' style='width:200px;length:100px'alt='specter picture'>
                <div class='right'>
                    <h2>".$monster['name']."</h2>
                    <h5>
                    'These ethereal entities manifest as twisted echoes of their former selves, their spectral forms flickering with an eerie luminescence that pierces the darkness like a beacon of otherworldly dread.'
                    </h5>
                    <p><img src='images/icons/hearts.png'>HP: ".$monster['hp']."/".$monster["maxHP"]."</p>
                    <p><img src='images/icons/katana.png'>Attack:".$monster['atk']."</p>
                    <p><img src='images/icons/shield.png'>Defense:".$monster['def']."</p>
                    <p><img src='images/icons/sprint.png'>Speed:".$monster['spd']."</p>
                    <p><img src='images/icons/medal-skull.png'>exp:".$monster['monExp']."</p>
                </div>
            </div>
        ";
        echo"<p>
            'Driven by an insatiable hunger born of their unfulfilled desires or tragic demise, specters wander the shadowed paths of the world, their mournful cries echoing through the night like a lament for the lives they once knew.'
        </p>";
        

    }


function event(){
    //$random_event= rand(1,6);
    global $exploration_text;
    global $random_index;
    global $event_description;

    echo"<p>". $event_description."</p>";
    switch($random_index){
        case 1:
            echo"<p>A cold wind whispers through the shadows, carrying with it the faint scent of decay.</p>";
            echo"
                <audio controls loop autoplay>
                    <source src='./music/norowaretayakata.mp3'>
                </audio>
            ";
            
            echo"<p>A spectral apparition materializes before you, its eyes burning with an otherworldly fire.</p>";
            echo"<p>You instinctively recoil, feeling the chill of its presence seeping into your bones.</p>";
            echo"<p>Every fiber of your being is poised for action, muscles coiled tight as bowstrings, ready to either confront the otherworldly entity or slip past it like a shadow in the night.</p>";
            echo"<p>As the specter's gaze locks onto you, you know that your journey through the depths of Termina has only just begun.</p>";
            
            echo"<a href='events/battleOutcome/specterOutcome.php'><p>With courage in your heart and determination in your soul, you prepare to face whatever challenges lie ahead in this forsaken realm.</p></a>";
            break;
        default:
            break;
    }
}
?>
    </style>
</head>
<body>
<div class="termina">
        <h1>Termina's Lament</h1>
    </div>
    <div class="box">
        <div class="battleBox">
            <h3>Encounter:</h3>
            <?= encounter() ?>        
        </div>
        <div class="textbox forest2">
            <h2>To the Divine Draconian Peaks: Draconian Woodlands (P2 2)</h2>
            <h4>Old Havenwood</h4>
            <h4>
               "Nestled within the depths of the Draconian Woodlands, Old Havenwood was once a thriving settlement teeming with life and vibrancy.
               Now, Old Havenwood stands as a haunting reminder of its former glory, its once bustling streets now overgrown with tangled vines and creeping ivy. The echoes of laughter and song have long since faded, replaced by an eerie silence broken only by the whispering winds and the occasional murmuring of the undead."
            </h4>
            <h3>Music:</h3>
            <audio controls loop autoplay>
                <source src='../../music/norowaretayakata.mp3'>
            </audio>
            <p>
                As you and Pog step through the barrier into Old Havenwood, a palpable sense of unease washes over you. The once vibrant village now lies in ruin, its dilapidated buildings shrouded in shadow and decay. Twisted vines snake their way through crumbling walls, and the air is heavy with the musty scent of ancient decay
            <p>
                The cobblestone streets, once bustling with life, now echo with the haunting whispers of the past. Shadows dance in the flickering light, playing tricks on your mind as you navigate the maze of abandoned alleyways and forgotten pathways. Every creak of a floorboard, every rustle of leaves sends shivers down your spine, as if unseen eyes are watching your every move.
            </p>
            <p>
                The silence is oppressive, broken only by the occasional mournful howl of the wind. You can almost feel the weight of centuries pressing down upon you, as if the very fabric of time itself has been warped within these forsaken walls. It's as if the village itself is holding its breath, waiting for something... or someone.
            </p>
            <p>
                As you navigate the labyrinthine streets, a sense of dread gnaws at the edges of your consciousness. Shadows seem to twist and writhe with unseen malevolence, and the darkness itself seems to pulse with a sinister energy. Every corner turned brings the possibility of encountering something unspeakable lurking in the shadows.
            </p>
            
            <p> 
                Suddenly, a chill wind sweeps through the deserted village, carrying with it the mournful wails of the lost souls trapped within. Specters materialize from the darkness, their ethereal forms flickering like dying embers. Hollow eyes fixate on you and Pog with a silent, accusing gaze, as if blaming you for their eternal torment.
            </p>
            <p>
                With a sense of mounting dread, you realize that you are not alone in Old Havenwood. The spirits of the past linger here, bound to this forsaken place by an unbreakable curse. 
                As they draw nearer, their ghostly whispers fill the air, chilling you to the core with their haunting lamentations. In the heart of this ghostly realm, you and Pog stand as intruders in a world haunted by the sins of the past.
            </p>
            
            <a href='../place/dragonRoute2_2.php'><p>You prepare yourself for battle.</p></a>
        </div>
        
        <div class="stats">
            <?= showStats() ?>
            <div class='enemyStats tooltip'>
                <img class='enemyAnim3' src='../../images/encounters/Pot of Cavil A.png' style='width:100px;length:50px'alt='pog picture'>
                <div class='bottom'>
                    <h2>Pog</h2>
                    <h5>"A mysterious talking pot. He's guiding you to the Divine Draconian Peaks but for what purpose?"</h5>
                    <p>"Ah, to be considered young again! Well, I'll take that as a compliment, I suppose. Keeps me feeling spry!"</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>