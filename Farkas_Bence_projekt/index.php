<?php
include_once 'header.php';
?>
<main class="signup-form section">
<div class="signup-form-form">
<form action="includes/login.inc.php" method="post">
<?php if (!isset($_SESSION['useruid']))
{

    echo '<p class="signin"> Please Sign in</p>';
    echo '<label for="uid">User name:</label>';
    echo '<input type="text" id="uid" name="uid">';
    echo '<label for="pwd">Password: </label>';
    echo '<input type="password" id="pwd" name="pwd">';
    echo '<button type="submit" name="submit">enter</button>';
}
else
{
    echo '<p class="signedin"> You have successfully signed in.</p>';
}
?>
    </form>
  </div>


  	<?php
// Error messages
if (isset($_GET["error"]))
{
    if ($_GET["error"] == "emptyinput")
    {
        echo "<p class='error'>Please fill in all fields!</p>";
    }
    else if ($_GET["error"] == "wronglogin")
    {
        echo "<p class='error'>Your user name or password was incorrect.<br> Please try again.</p>";
    }
    else if ($_GET["error"] == "notsignedin")
    {
        echo "<p class='error'>Please sign in to access this page.</p>";
    }
    else if ($_GET["error"] == "signedout")
    {
        echo "<p class='error'>You have successfully signed out.</p>";
    }
}
?>
</main>

<?php
include_once 'footer.php';
?>
