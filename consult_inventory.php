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
                <a href="room.php" title="View all rooms available.">View All Rooms</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </aside>

    <div class="content">
      <form action="consult_submit.php" method="POST">
      <table border=solid black collapse 1px>
        <tr>
          <th colspan=3>Search for</th>
          <td colspan=2>
            <select name="room">
              <option value="null">---Select an option---</option>
              <option value="Fecha">Fecha</option>
              <option value="Empleado">Empleado</option>
              <option value="Producto">Producto</option>
              <option value="Habitacion">Habitacion</option>
            </select>
          </td>
          <td colspan=2>
            <input type="text" name="name">
          </td>
          <tr>
            <th colspan=7><input type="submit" value="Buscar"></th>
          </tr>
  <tr>
    <th>Codigo</th>
    <th>Producto</th>
    <th>Camtidad</th>
    <th>Fecha de Ingreso</th>
    <th>Fecha de Ultimo Uso</th>
    <th>Usado por</th>
    <th>Habitacion</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</div>

  </div>
</body>
</html>
