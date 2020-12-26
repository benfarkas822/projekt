<?php
include_once 'header.php';
if (!isset($_SESSION['useruid']))
{
    header("Location: index.php?error=notsignedin");
    exit();
}
?>
	<section class="signup-form">
		<div class="signup-form-form">
			<form action="includes/login.inc.php" method="post">
				<p class="signedin"> This site is under construction.
					<br> Please visit back later!</p>
			</form>
		</div>
	</section>
<?php
include_once 'footer.php';
?>