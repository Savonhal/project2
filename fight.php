<?php
    session_start();
    
    function showStats(){
        echo"
        <h3>Character Stats:</h3>
        <h4>".$_SESSION['player']['name']."</h4>
        <ul>
            <li>Health Points (HP): ".$_SESSION['player']['hp'] . "</li>
            <li>Strength:".$_SESSION['player']['atk'] ."</li>
            <li>Strength:".$_SESSION['player']['def'] ."</li>
            <li>Speed:".$_SESSION['player']['spd']."</li>
        </ul>";
    }

    function spawnMonster(){
        $monsters = array(
            array("name" => "Wretched Ghoul","hp"=>25 ,"atk" => 8, "def"=>3 ,"spd" => 3),
        );
        $random_index = array_rand($monsters);
        $monster = $monsters[$random_index];
        return $monster;
    }

    function battle($monster){
        $player_attack_first = $_SESSION['player']['spd'] >= $monster['spd'];
        if ($player_attack_first) {
            // Player attacks first
            $player_damage = $_SESSION['player']['atk'] + rand(1, 6);
            echo "<p>You act swiftly and strike the ".$monster['name'].", dealing ". $player_damage." damage!</p>";
            $monster['hp'] -= $player_damage;
            if ($monster['hp'] <= 0) {
                echo "<p>You have vanquished the ".$monster['name']."! Its foul presence fades into the darkness.</p>";
            } else {
                // Monster attacks
                $monster_damage = $monster['atk'] + rand(-5, 5);
                $_SESSION['player']['hp'] -= $monster_damage;
                echo "<p>The ".$monster['name']." retaliates with a vicious attack, dealing " .$monster_damage." damage!</p>";
                if ($_SESSION['player']['hp'] <= 0) {
                    echo "<p>You have succumbed to the darkness. Your journey ends here.</p>";
                    session_destroy(); // End the game session
                }
            }
        } else {
            // Monster attacks first
            $monster_damage = $monster['atk'] + rand(2, 5);
            $_SESSION['player']['hp'] -= $monster_damage;
            echo "<p>The ".$monster['name']." strikes first, unleashing its fury upon you and dealing " .$monster_damage." damage!</p>";
            if ($_SESSION['player']['hp'] <= 0) {
                echo "<p>You have succumbed to the darkness. Your journey ends here.</p>";
                session_destroy(); // End the game session
            } else {
                // Player attacks
                $player_damage = rand(-2, 5);
                echo "<p>You muster your strength and counter-attack, dealing". $player_damage." damage to the ".$monster['name']."!</p>";
                $monster['hp'] -= $player_damage;
                if ($monster['atk'] <= 0) {
                    echo "<p>You have vanquished the ".$monster['name']."! Its foul presence fades into the darkness.</p>";
                }
            }
        }
    }

    
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="textbox.css">
    <title>Document</title>
</head>
<body>
    <div class="box">
        <div class="textbox caverns">
            <?php
                $monster = spawnMonster();
                echo "<p>You come face to face with a " .$monster['name'].", a vile creature from the depths of this forsaken realm. Its eyes gleam with malice as it prepares to strike.</p>";
                function attack(){
                    battle($monster);
                }
            ?>
            <button onclick="<?php attack() ?>">Attack</button>
            <br>
            <a href="index.php">Return to the darkness</a>
        </div>
        <div class="stats">
            <?= showStats() ?>
        </div>
    </div>
</body>
</html>