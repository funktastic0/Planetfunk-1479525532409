<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        #code here ...
    } else {
        echo "Access denied...";
        header('Location: login.php');
    }

    $now = time();

    if ($now > $_SESSION['expire']) {
        session_destroy();

        echo "<script> alert('Your session has expired, please log back in...'); </script>";

        header('Location: login.php');

        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hotel San José: The Pleasure of Sleeping Well.</title>
  <link rel="stylesheet" media="screen" href="css/main.css" />
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
                <a href="user_dashboard.php"><span class="indicator">&lsaquo;</span>Home</a>
              </li>
              <li class="viewall">
                <a href="room.php" title="View every submission to the Zen Garden.">View All Rooms</a>
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
    Welcome <?php echo $_SESSION["usr_name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
    <?php
    }
    ?>

    </td>
    </tr>
    </table>

    <fieldset style="width:30%"><legend>Registration Form</legend>
    <table border="0">
    <tr>
    <form method="POST" action="register_submit.php">
    <td>DNI</td><td> <input type="text" name="dni"></td>
    </tr>
    <tr>
    <td>Nombres</td><td> <input type="text" name="name"></td>
    </tr>
    <tr>
    <td>Email</td><td> <input type="email" name="email"></td>
    </tr>
    <tr>
    <td>UserName</td><td> <input type="text" name="user"></td>
    </tr>
    <tr>
    <td>Password</td><td> <input type="password" name="pass"></td>
    </tr>
    <tr>
    <td><input id="button" type="submit" name="submit" value="Sign-Up"></td>
    </tr>
    </form>
    </table>
    </fieldset>


  </div>
</body>
</html>
