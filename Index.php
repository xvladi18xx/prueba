<?php
   include ('src/conexion_mysql.php');
    $clientes = "SELECT  * FROM  usuario"; 
     
?>
<link rel="stylesheet" href="css/estilos_panel.css">
<link rel="stylesheet" href=".css/bootstrap.css">
<link rel="stylesheet" href="css/estilo.css">
   <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script> 
   
                <h2 class="text-secondary text-center">Lista de  usuarios </h2>
                <div class="table-users">
                    <table id="table-clientes">
                        <tr>
                            <th>codusu</th>
                            <th>nombre</th>
                            <th>clave</th>
                          
                        </tr>
                        <?php $datos = mysqli_query($conexion, $clientes);
                        while($row = mysqli_fetch_assoc($datos)) { ;?>

                            <tr>
                                <td><?php echo $row["codusu"]; $correo2 = $row["codusu"];?></td>
                                <td><?php echo $row["emausu"];  ?></td> 
					            <td><?php echo $row["pasusu"];  ?></td>
                             
                                     
                            </tr>

                        <?php } mysqli_free_result($datos);?>
                    </table>
                    <script type="text/javascript">
                        function confirmation() 
                        {
                            
                            if(confirm("¿Estás seguro de eliminar este cliente?"))
                            return true;
                            else return false;
                        }
                    </script>
                     

                    <center> <a  class="btn btn-danger" href="Cliente/registro.html"> Registrar </a></center>
 
                    
                </div>

                
 