<?php


class ConsultaUsuario{
    public function registrarUsuario($email,$contrasena){
        $objConexion = new Conexion();
        $conexion = $objConexion->	get_conexion();
    
        $insert = "INSERT INTO usuarios(id_usuario,email,contrasena) VALUES (:id_usuario,:email,:contrasena)";
    
        $result = $conexion -> 	prepare($insert);
        
        $result->bindParam(":id_usuario",$id_usuario);
        $result->bindParam(":email",$email);
        $result->bindParam(":contrasena",$contrasena);
    
        $result->execute();
        echo'<script>alert("Bienvenido soldado")</script>';
    
        echo "<script> location.href='../../gym-youner/index.html'</script>";
        
    
    }

    public function validarSesion($email, $contrasena){
        //conectamos la base de datos 
        //apartir de su email
        
        $objconexion = new Conexion();
        $conexion = $objconexion ->get_conexion();
        
        //consultamos toda la informacion del usuario
        $select= "SELECT * FROM usuarios WHERE email=:email";
        $result = $conexion->prepare($select);
        
        $result ->bindParam(":email",$email);
        
        $result -> execute();
       
        
        //validar si existe un usuario con ese email
        
        if ($f = $result->fetch()) {
        
        //validamos la contraseña
        
        if($contrasena == $f['contrasena']){
        echo '<script>alert("Inicio de sesión correcto")</script> '; 
        echo "<script> location.href='../../gym-youner/index.html'</script>";
        
        } else{
            echo '<script>alert("Contraseña incorrecta")</script> ';
            echo "<script> location.href='../../gym-youner/index.html'</script>";
        } 
        }
        
        
        
        }
        



}




?>