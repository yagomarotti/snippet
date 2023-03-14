<?php 

// Importar la conexion
require  'includes/config/database.php';
$db = conectarDb();
// Crear email y password

$email = 'correo@corre.com';
$password = '123456';

// Hashear el password, dos argumentos, el password y el algoritmo
// PASSWORD_DEFAULT y PASSWORD_BCRYPT
$hashear_password = password_hash($password, PASSWORD_BCRYPT);

// Query para crear usuario

$query = "INSERT INTO usuarios (email, password) values ('$email', '$hashear_password');";
echo $query;

// Insertar a la base de datos
// Nota en la variable de password en mysql es un char de 60 ya que al hashear la password la extension siempre es de 60

mysqli_query($db, $query);


