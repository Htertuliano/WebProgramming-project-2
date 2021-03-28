<?php 
include("header2.php");

$file = "./users.txt";


$fileStr = file_get_contents($file);
$fileArr = explode("\n", $fileStr);

$leaderboard = array();


foreach($fileArr as $line) {
    $total = 0;
    $lineArr = explode(":", $line);
    $scores = explode(",", $lineArr[1]);
    if($line !== "") {
        foreach($scores as $score) {
            $total += $score;
        }
        $leaderboard[$lineArr[0]] = $total;
    }
}

arsort($leaderboard);

?>

<div class="landing">
    <center><h1 style="font-family: helvetica">Leader Board</gh1></center>
    <br>
    <br>
    <table>
        <tr>
        <th>Username</th>
        <th>Score</th>
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