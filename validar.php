<?php

$con = mysqli_connect('mariadb-ingenieria-software-2.cklqmyee440q.us-east-1.rds.amazonaws.com', 'admin', '12345678', 'db_tienda_is2');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$user = $_POST['inp_usuario'];
$password = $_POST['inp_contrasenia'];

$sql = "SELECT * FROM persona WHERE email_user = '" . $user . "' AND password = '" . $password . "';";

$result = mysqli_query($con, $sql);

if($result->num_rows > 0){
    echo "<h1>Bienvenido al Sistema</h1>";
    $row = mysqli_fetch_row($result);
    
    echo '<pre>';
    printf("Usuario:%s\nEmail: %s\nPassword: %s\n", ($row[2] . ' ' . $row[3]), $row[5], $row[6]);
    // print_r($row);
    echo '</pre>';
}else{
    echo "<h2>Acceso Denegado :(</h2>";
    echo '<pre>';
    printf("Error de usuario y/o contraseña.");
    echo '</pre>';
}

// Fetch row

// Free result set
// mysqli_free_result($result);
