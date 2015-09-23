<?php
//turn on reporting errors, warnings and notices
error_reporting(E_ALL);
//display errors on the html page instead of in the log file
ini_set('display_errors', 1);
//dependent php files in order to separate logics from the view page
require "logic.php";
?>

<!doctype html>
<html>
<head>
	<title>CSCI E-15 P2 xkcd Style Password Generator</title>
	<meta charset='utf-8'>
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style>
    .container {
			text-align:center;
		}
		.criteria{
			width: 20em;
	    margin: 0 auto 1em auto;
	    padding: 1em;
			text-align:left;
		}
		.description{
			margin-top: 50px;
		}
		.comic {
			width:50%;
			max-width:500px;
		}
  </style>

</head>
<body>
		<div class="container">
			<h1>xkcd Style Password Generator</h1>

			<h2><span class="label label-primary"><?= $result; ?></span></h2>

			<form method="POST" action="index.php">
				 <p class="criteria">
						<label for="word_number">Number of Words</label>
						<select  name="word_number">
					  	<?=$wordnumberoption ?>
						</select>
						<br/>

						<input type="checkbox" id="add_number" name="add_number" <?= $addnumber ?>>
						<label for="add_number">Add a number</label>
						<br/>

						<input type="checkbox" id="add_symbol" name="add_symbol" <?= $addsymbol ?>>
						<label for="add_symbol">Add a special symbol</label>
						<br/>

						<input type="checkbox" id="change_uppercase" name="change_uppercase" <?= $changeuppercase ?>>
						<label for="change_uppercase">Change all upper cases</label>
						<br/>
						<br/>
						<input type="submit" id="submit" class="btn btn-info" value="Generate Password">
					</p>
			</form>
			<p class="description">
				Generating xkcd passwords is for the purpose of having secure, memorable, easy to read and type passwords.
				<br/>
				<a href='http://xkcd.com/936/'>Learn more about xkcd password strength</a><br>
			  <a href='http://xkcd.com/936/'>
					<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
				</a>
			</p>
			 

			<p class="description">
				Author: Jean Yu Chun Su | Course: CSCI E-15 | Copyright©2015
			</p>
		</div>

	</body>
</html>
