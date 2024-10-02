<?php
$conex = mysqli_connect("localhost", "root", "", "formulario");

if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["send"])) {
    if (
        !empty($_POST["name"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["phone"])
    ) {
        $name = mysqli_real_escape_string($conex, trim($_POST["name"]));
        $email = mysqli_real_escape_string($conex, trim($_POST["email"]));
        $phone = mysqli_real_escape_string($conex, trim($_POST["phone"]));
        $fecha = date("Y-m-d");

        $consulta = "INSERT INTO datos(nombre, email, telefono, fecha)
                     VALUES(?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($conex, $consulta);
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone, $fecha);
        
        $resultado = mysqli_stmt_execute($stmt);
        
        //No mostrar mensaje de éxito o error
        //Puedes agregar redireccionamiento o simplemente dejarlo en blanco
        mysqli_stmt_close($stmt);
    }
    //No mostrar mensaje de error si los campos están vacíos
}

mysqli_close($conex);
?>
