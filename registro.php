<?php
if(isset($_POST)){

    
require_once "./includes/conexcion.php";
    $nombre = isset($_POST['nombre']) ? $_POST['nombre']:false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] :false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $pass = isset($_POST['password']) ? $_POST['password'] :false;

    $errores = array();
    //validar nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    } 
    else{
        $nombre_validado = false;
        $errores['nombre']= "El nombre no es valido";
    }
    //validar apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validado = true;
    } 
    else{
        $apellidos_validado = false;
        $errores['apellidos']= "Los apellidos no son validos";
    }
    //validar email
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    } 
    else{
        $email_validado = false;
        $errores['email']= "El email no es valido";
    }
    //validar contraseña
    if(!empty($pass)){
        $pass_validado = true;
    } 
    else{
        $pass_validado = false;
        $errores['pass']= "La contraseña esta vacia";
    }
}
$guardar_usuario= false;
if(count($errores) == 0){
    $guardar_usuario = true;
    $pass_segura = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 4]);
    $sql = "INSERT INTO usuarios VALUES(null, $nombre, $apellidos, $email, $pass_segura, CURDATE());";
    $guardar = mysqli_query($db, $sql);

    if($guardar){
        $_SESSION['completado'] = "El registro se ha completado con exito";
    }
    else{
        $_SESSION['errores']['general']= "No se ha podido completar el registro";
    }
    header("Location:index.php");

}else{
   $_SESSION['errores'] = $errores;
   header('Location: index.php');
}