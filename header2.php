<!DOCTYPE html>
<html>
	<head>
		<title> Leaderboard </title>
		<link href="testsAndBoard.css" rel="stylesheet">
        <link herf="logo.png" rel="logo" type="image">
	</head>

	<body>

		<div class="header">
			<a href="homepage.php"><img class="float" src="logo.png" alt="logo" height="80" width="80" ></a>
			<h1>Mensa Club</h1>
		</div>

        <?php
        if(isset($_COOKIE['user'])) {
        ?>
		<div class="navbar">
  			<a href="tests.php">Take Our Tests</a>
  			<a href="leaderboard.php">Leader Board</a>
  			<a href="signout.php">Sign Out</a>
		</div>

        <?php
        }
        else {
        ?>

        <div class="navbar">
  			<a href="tests.html">Take Our Tests</a>
  			<a href="leaderboard.php">Leader Board</a>
  			<a href="signin.php">Sign In</a>
		</div>
        
        <?php
        }
        ?>