<?php
    include '../src/conexion_mysql.php';

    $email = $_POST["Email"];
    $Name = $_POST["Name"];
    $LastName = $_POST["LastName"];
    $Pass = $_POST["Pass"];

    $check_email = mysqli_query($conexion, "SELECT * FROM usuario WHERE emausu = '$email'");

    if(mysqli_num_rows($check_email) > 0) {
        echo '<script>
                alert("El correo ya existe, intente con otro");
                window.history.go(-1);
            </script>';
        exit;
        mysqli_close($conexion);
    }

    $insert = "INSERT INTO usuario(codusu, nomusu, apeusu, emausu,pasusu, estado)
                VALUES(null, '$Name','$LastName','$email', '$Pass','1')";

    if($email != "" || $Name != "" || $LastName != ""  || $Pass != "") {

        $consulta_register = mysqli_query($conexion, $insert);

        if(!$consulta_register) {
            echo '<script>
                    alert("No se pudo registrar");
                    window.history.go(-1);
                </script>';
        } else {
            echo '<script>
                    alert("Te registraste exitosamente!!");
                    window.location.href = "../index.php";
                </script>'; // Ingreso de la cuenta
        }
        mysqli_close($conexion);
    }

?>