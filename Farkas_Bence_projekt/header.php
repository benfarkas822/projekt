<?php
session_start();
include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Project</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <header>
	<div class="row pills">
		<div class="col-3 col-t-3 pill">
			<a href="index.php"><img src="img/pills-img.png" alt="Pills image"></a>
		</div>
		<div class="col-4 col-t-4">
			<p class="pill-text">speaker <br> portal</p>
		</div>
		<div class="col-3 col-t-3">
			<div class="row bottom-bordered">
			<div class="col-6 col-t-6">
					<form action="#" class="select">
						<select name="language-picker-select">
							<option lang="en" value="english" selected>English</option>
							<option lang="fr" value="francais">Français</option>
							<option lang="it" value="italiano">Italiano</option>
							<option lang="de" value="deutsch">Deutsch</option>
						</select>
					</form>
				</div>
				<div class="col-3 col-t-3">
					<a href="#">Contact</a>
				</div>
				<div class="col-3 col-t-3">
					<a href="#">Sitemap</a>
				</div>
			</div>
			<div class="row">
			<div class="col-8 col-t-8 bold text-right">
					<a href="#"><img src="img/folder.png" alt="folder icon">My Collection</a>
				</div>
				<div class="col-4 col-t-4 bold">
					<?php
if (isset($_SESSION["useruid"]))
{
    echo '<a href="logout.php"><img src="img/close.png" alt="close icon">Logout</a>';
}
else
{
    echo '<a href="index.php">Login</a>';

}
?>
				</div>
			</div>
		</div>
		<div class="col-2 col-t-2">
		<img src="img/logo.png" alt="Logo">
		</div>
	</div>
	<div class="row">
		<nav class="shadow">
		  <div class="wrapper shadow">
			
			<ul>
			  <li><a href="index.php" class="fa fa-home"></a></li>
			  <li><a href="mpaf.php">MPAF</a></li>
			  <li><a href="venous.php">VENOUS</a></li>
			  <li><a href="acs.php">ACS</a></li>
			  <li><a href="kivamoxo.php">KIVAMOXOBAN STUDIES</a></li>
			  <li><a href="background.php">BACKGROUND INFORMATION</a></li>
			  <?php
if (!isset($_SESSION["useruid"]))
{
    echo "<li><a href='signup.php'>Sign up</a></li>";
}
?>
			</ul>
		  </div>
		</nav>
	</div>
  </header>
  <div class="row">
  <div class="content">