<?php
  include_once 'header.php';
?>

<main class="signup-form section">
  
  <div class="signup-form-form">
    <form action="includes/signup.inc.php" method="post">
		<p class="signin">Sign Up</p>
		<label for="uid">User name:</label>
      <input type="text" id="uid" name="uid">
	  <label for="pwd">Password:</label>
      <input type="password" name="pwd" id="pwd">
	  <label for="pwdrepeat"> Repeat your Password</label>
      <input type="password" name="pwdrepeat" id="pwdrepeat">
      <button type="submit" frommethod="post" name="submit">Sign up</button>
    </form>
  </div>
  	<?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p class='error'>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<p class='error'>Choose a proper username!</p>";
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p class='error'>Passwords doesn't match!</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p class='error'>Something went wrong!</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p class='error'>Username already taken.</p>";
      }
      else if ($_GET["error"] == "none") {
        echo "<p class='error'>You have signed up!</p>";
      }
    }
  ?>
</main>

<?php
  include_once 'footer.php';
?>
