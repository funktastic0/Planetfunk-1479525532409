<?php
include "connection.php";

$date = date('d-m-Y');

$name = $_POST['client_name'];

$lastname = $_POST['client_lastname'];

$dni = $_POST['client_dni'];

$genero = $_POST['client_gender'];

$direccion = $_POST['client_dir'];

$ciudad = $_POST['client_city'];

$phone = $_POST['client_tel'];

$email = $_POST['client_email'];

$arrival_date = isset($_POST['arrival_date']) ? $_POST['arrival_date'] : (new DateTime)->format('d-m-Y');
$adate = date('d-m-Y', strtotime($arrival_date));

$checkout_date = isset($_POST['checkout_date']) ? $_POST['checkout_date'] : (new DateTime)->format('d-m-Y');
$cdate = date('d-m-Y', strtotime($checkout_date));

$roomcat = $_POST['roomcategory'];

$room = $_POST['room'];

$pstate = $_POST['state'];

$points = $_POST['puntos'];

$username = $_SESSION['usr_name'];

$empleado = "SELECT emp_id FROM tbl_empleado WHERE usr_name = '" . $username . "';";

$result_emp = $cn -> query($usr);

$cliente = "SELECT * FROM tbl_cliente WHERE cli_id = '" . $dni . "';";

$result_cli = $cn -> query($cliente);

$count = mysqli_num_rows($result_cli);

if($count == 1) {

  $sql = "INSERT INTO tbl_reserva (rsv_id , rsv_fecha , rsv_llegada, rsv_partida, rsv_roomcatid, roomid, rsv_clienteid, rsv_estado, rsv_totalcosto, rsv_empid) VALUES (NULL , '" . $date . "' , '" . $arrival_date . "' , '" . $checkout_date . "' , '" . $categoria . "', '" . $habitacion . "', '" . $pstate . "', '" . $costo . "', '" . $empleado . "')";


  if(!mysqli_query($cn, $sql)) {
    die("Error: " . mysqli_error($cn));
    echo "<script> alert('An error has ocurred...'); history.back(); </script>";
  } else {
    echo "<script> alert('You've been successfully registered...'); </script>";
    header('Location: http://localhost/phptest/user_dashboard.php');
} else {
  $sql = "INSERT INTO tbl_cliente (cli_id , cli_nombre , cli_apellidos, cli_genero, cli_direccion, cli_ciudad, cli_telefono, cli_email, cli_puntos) VALUES ('" . $dni . "' , '" . $name . "' , '" . $lastname . "' , '" . $direccion . "' , '" . $ciudad . "', '" . $phone . "', '" . $email . "', '" . $points . "')";


}
// insertion to user table
$sql = "INSERT INTO tbl_cliente (cli_id , cli_nobre , cli_apellidos, cli_genero, cli_direccion, cli_ciudad, cli_telefono, cli_email, cli_puntos) VALUES ('" . $dni . "' , '" . $name . "' , '" . $lastname . "' , '" . $direccion . "' , '" . $ciudad . "', '" . $phone . "', '" . $email . "', '" . $points . "')";
$result = mysql_query( $sql,$conn );
// retrieve last id
$user_id = mysql_insert_id( $conn );
mysql_free_result( $result );

// insertion to user_details table
$sql = "INSERT INTO user_details (id, weight, height) VALUES ($user_id, $weight, $height)";
$result = mysql_query( $sql,$conn );
mysql_free_result( $result );
?>




?>
