<?php  
    if(!empty($_POST["btningresar"])){
        if(empty($_POST["usuario"]) and empty($_POST["password"])){
            echo '<div>LOS CAMPOS ESTAN VACION</div>';
        }else{
            $correo=$_POST["usuario"];
            $contrasena=$_POST["password"];
            $sql=$conexion->query("select * from login where correo='$correo' and contrasena='$contrasena'");
            if($datos=$sql->fetch_object()){
                header("location:inicio.php");
            }else{
                echo '<div >ACCESO DENEGADO</div>';
            }
        }
    }

?>