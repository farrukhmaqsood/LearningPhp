<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="About.php">About</a></li>
  <li><a href="Contact.php">Contact</a></li>
  <li><a href="PhpBasic.php">PhpBasic</a></li>
  <li style="float:right;" >
  <a style="padding:8px 16px;" href="PhpBasic.php">
  <img src="image/image1.jpg" height="30px"/>
  </a>
  </li>
</ul>
<section>
<div class="Main-section">
<P>
  <?php
  echo 'Hello World.<br><br>';

for ($x = 1; $x <= 10; $x++) {
  $ans = $x*$x;
  echo "$x x $x = $ans <br>";
}

  ?>
</p>
</div>
</section>
<footer>
  <p>Copyright@PhpLearning.com</p>
</footer>

</body>
</html>
