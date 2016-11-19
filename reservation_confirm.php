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


      <form action="reservation_submit.php" method="POST">
      <table border=solid black collapse 1px>
  <tr>
    <th colspan=2>Datos de cliente</th>
    <th colspan=2>Datos de reserva</th>
  </tr>
  <tr>
    <th>Nombres</th>
    <td><input type="text" name="client_name"></td>
    <th>Fecha de reserva</th>
    <td><?php $date = date('d-m-Y'); echo $date; ?></td>
  </tr>
  <tr>
    <th>Apellidos</th>
    <td><input type="text" name="client_lastname"></td>
    <th>Fecha de Check-in</th>
    <td><input type="date" name="arrival_date"></td>
  </tr>
  <tr>
    <th>DNI</th>
    <td><input type="text" name="client_dni"></td>
    <th>Fecha de Check-out</th>
    <td><input type="date" name="checkout_date"></td>
  </tr>
  <tr>
    <th>Genero</th>
    <td><input type="text" name="clien_gender"></td>
    <th>Habitacion</th>
    <td>
      <select name="room">
        <option value="null">---Select an option---</option>
        <option value="1001">Room1</option>
        <option value="2002">Room2</option>
        <option value="3003">Room3</option>
        <option value="4004">Room4</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Direccion</th>
    <td><input type="text" name="clien_dir"></td>
    <th>Categoria</th>
    <td>
      <select name="roomcategory">
        <option value="null">---Select an option---</option>
        <option value="econom">Economic</option>
        <option value="norm">Normal</option>
        <option value="prem">Premium</option>
        <option value="vip">VIP</option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Ciudad</th>
    <td><input type="text" name="client_city"></td>
    <th>Estado de Pago</th>
    <td>
      <select name="state">
        <option value="null">---Select an option---</option>
        <option value="paid">Completed payment</option>
        <option value="not paid">Waiting for payment</option>
      </select>
    </td>
  </tr>
  <tr>
    <tr>
      <th>Telefono</th>
      <td><input type="text" name="client_tel"></td>
      <th>E-mail</th>
      <td><input type="email" name="client_email"></td>
    </tr>
  </tr>
  <tr>
    <th colspan=2><input type="submit" value="confirm"></th>
  </tr>
</table>
</form>




  </div>
</body>
</html>
