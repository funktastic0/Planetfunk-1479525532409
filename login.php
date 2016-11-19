<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hotel San José: Please login before accessing the system.</title>
<link rel="stylesheet" media="screen" href="css/login.css">
<link rel="icon" type="image/png" href="images/kevin.jpg" />
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
<a href="room.php" title="View every submission to the Zen Garden.">View All Rooms</a>
</li>
</ul>
</nav>
</div>
</div>
</aside>

<div class="container">
<div class="login-message">Login</div>
<div class="login-form">
<form class="form-horizontal" role="form" method="post" action="login_submit.php">
<div class="form-group">
<label class="label_usr"> Username: </label>
<div class="col-sm-10">
<input type="text" class="form-usr" id="usr_name" name="usr_name" placeholder="Ingrese Usuario" autofocus required>
</div>
</div>
<div class="form-group">
<label class="label_pwd"> Password: </label>
<div class="col-sm-10">
<input type="password" class="form-pwd" id="usr_pwd" name="usr_pwd" placeholder="Ingrese Password" required>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="login-in" id="login_in" name="login_in">Login</button>
</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>
