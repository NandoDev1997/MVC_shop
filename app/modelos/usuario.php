<?php

class Usuario
{
    private $db;

    function __construct()
    {
        $this->db = new Base;
    }

    public function getUsuarios()
    {
        $this->db->query("SELECT * FROM usuarios");
        return $this->db->registros();
    }

    public function agregarUsuario($datos)
    {
        $this->db->query("
            INSERT INTO usuarios (
                imagen, 
                nombre, 
                apellidos, 
                puesto, 
                usuario, 
                password, 
                email, 
                telefono, 
                permisos, 
                estado, 
                fecha_registro) 
                values (
                :imagen, 
                :nombre, 
                :apellidos, 
                :puesto, 
                :usuario, 
                :password, 
                :email, 
                :telefono, 
                :permisos, 
                :estado, 
                :fecha_registro )
            ");
        // vicular valores
        $this->db->bind(':imagen',          $datos['imagen']);
        $this->db->bind(':nombre',          $datos['nombre']);
        $this->db->bind(':apellidos',       $datos['apellidos']);
        $this->db->bind(':puesto',          $datos['puesto']);
        $this->db->bind(':usuario',         $datos['usuario']);
        $this->db->bind(':password',        $datos['password']);
        $this->db->bind(':email',           $datos['email']);
        $this->db->bind(':telefono',        $datos['telefono']);
        $this->db->bind(':permisos',        $datos['permisos']);
        $this->db->bind(':estado',          $datos['estado']);
        $this->db->bind(':fecha_registro',  $datos['fecha_registro']);
        // ejecutar
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
