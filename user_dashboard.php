<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hotel San José: The Pleasure of Sleeping Well.</title>
<link rel="stylesheet" media="screen" href="css/intro.css" />
<link rel="icon" type="imamge/png" href="images/kevin.jpg" />
</head>
<body>
<div>
<section>
<header>
<h1>Hotel San Jose</h1>
<h2>The Pleasure of Sleeping Well</h2>
</header>
</section>

<aside class="sidebar" role="complementary">
<div class="wrapper">
<div class="design-archives" id="design-archives">
<h3 class="archives">Archives:</h3>
<nav role="navigation">
<ul>
<li class="next">
<a href="login.php">Login<span class="indicator">&rsaquo;</span></a>
</li>
<li class="previous">
<a href="index.php"><span class="indicator">&lsaquo;</span>Home</a>
</li>
<li class="viewall">
<a href="room.php" title="View all rooms available.">View All Rooms</a>
</li>
</ul>
</nav>
</div>
</div>
</aside>

<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center">User Dashboard</td>
</tr>
<tr class="tablerow">
<td>
<?php
if($_SESSION["usr_name"]) {
?>
<p>Welcome <?php echo $_SESSION["usr_name"]; ?>. Click here to <a href="logout.php" title="Logout">Logout.</a></p>
<?php
}
?>
<hr>
<div class="intro">
<a href="register.php">Register a new user</a><br><br>
<a href="reservation.php">View Reservations</a><br><br>
<a href="consult_inventory.php">View Current Inventory</a><br><br>
<a href="update_inventory.php">Update Inventory</a><br><br>
</div>
</td>
</tr>
</table>

</div>
</body>
</html>
