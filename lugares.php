<?php
	

	$servername = "localhost";
	$database = "visitar";
	$username = "root";
	// Create connection
	$conn = mysqli_connect($servername, $username, '', $database);
	// Check connection
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	} else {
        $usuario=$_POST['usuario'];
        $lugar=$_POST['lugar'];
        
        $sql = "SELECT * FROM favoritos f where f.id_usuario='$usuario' AND f.id_lugar='$lugar'";
        $resultado= $conn->query($sql);
        if($resultado->num_rows >0){
              echo 'ya';
            $resultado->close();
        }else{
                //Sentencia sql
                $sqli="INSERT INTO favoritos VALUES('$usuario', '$lugar')";
                //ejecutar sentencia
                $ejecutar=mysqli_query($conn, $sqli);
                //verificar ejecucion
                if(!$ejecutar){
                    echo "error";
                } else {
                    echo "ok";
                }


            }
        
        }
        
    ?>