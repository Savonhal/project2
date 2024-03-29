
<?php

$file_path = 'data.txt';

$json_content = file_get_contents($file_path);

$players_data = json_decode($json_content, true);


function filterMatchesByName($name, $data) {
    $matches = [];
    foreach ($data as $player) {
        if ($player['name'] === $name) {
            $matches[] = $player;
        }
    }
    return $matches;
}

function sortByExp($a, $b) {
    return $b['exp'] - $a['exp'];
}

$user_name = $_GET['name'] ?? 'Player1';

$user_matches = filterMatchesByName($user_name, $players_data);

usort($user_matches, 'sortByExp');

echo '<h3>Match History for ' . $user_name . '</3>';
echo '</br></br>';
echo '<table border="1">';
echo '<tr><th>Lvl</th><th>Exp</th><th>Max HP</th><th>HP</th><th>Atk</th><th>Def</th><th>Spd</th></tr>';
foreach ($user_matches as $match) {
    echo '<tr>';
    echo '<td>' . $match['lvl'] . '</td>';
    echo '<td>' . $match['exp'] . '</td>';
    echo '<td>' . $match['maxHP'] . '</td>';
    echo '<td>' . $match['hp'] . '</td>';
    echo '<td>' . $match['atk'] . '</td>';
    echo '<td>' . $match['def'] . '</td>';
    echo '<td>' . $match['spd'] . '</td>';
    echo '</tr>';
}
echo '</table>';
?>

