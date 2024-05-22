<?php
class UsuariosModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function getUsuarios($estado)
    {
        $sql = "SELECT id, nombres, apellidos, correo, perfil FROM usuarios WHERE estado = $estado";
        return $this->selectAll($sql);
    }

    //REGISTRAR EL USUARIO EN LA BASE DE DATOS 
    public function registrar($nombre, $apellido, $correo, $clave)
    {
        $sql = "INSERT INTO usuarios (nombres, apellidos, correo, clave) VALUES (?,?,?,?)";
        $array = array($nombre, $apellido, $correo, $clave);
        return $this->insertar($sql, $array);
    }
    
    //VERIFICAR SI EL CORREO EXISTE EN LA BASE DATOS
    public function verificarCorreo($correo)
    {
        $sql = "SELECT correo FROM usuarios WHERE correo = '$correo' AND estado = 1";
        return $this->select($sql);
    }

    //ELIMINAR USUARIO DE LA BASE DE DATOS
    public function eliminar($idUser)
    {
        $sql = "UPDATE usuarios SET estado = ? WHERE id = ?";
        $array = array(0, $idUser);
        return $this->save($sql, $array);
    }

    public function getUsuario($idUser)
    {
        $sql = "SELECT id, nombres, apellidos, correo FROM usuarios WHERE id = $idUser";
        return $this->select($sql);
    }

    //MODIFICAR USUARIO EN LA BASE DA DATOS 
    public function modificar($nombre, $apellido, $correo, $id)
    {
        $sql = "UPDATE usuarios SET nombres=?, apellidos=?, correo=? WHERE id = ?";
        $array = array($nombre, $apellido, $correo, $id);
        return $this->save($sql, $array);
    }
}
 
?>