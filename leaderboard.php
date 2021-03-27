<?php 
include("header.html");

echo "<h2> Leaderboard </h2";
$file = "./users.txt";


$fileStr = file_get_contents($file);
$fileArr = explode("\n", $fileStr);

$leader_board = array();

$total = 0;
foreach($fileArr as $line) {
    $lineArr = explode(":", $line);
    $scores = explode(",", $lineArr[1]);

    foreach($scores as $score) {
        $total += $score;
    }
    $leaderboard[$lineArr[0]] = $total;
}

asort($leader_board);

?>

<div class="landing">
    <table>
        <tr>
            <th> Username </th>
            <th> Score </th>
        </tr>

    <?php

    foreach($leaderboard as $name => $s) {
        echo "<tr>";
        echo "<td> $name </td>";
        echo "<td> $s </td>";
        echo "</tr>";
    }

    ?>
    </table>
</div>


<?php
include("footer.html");
?>
