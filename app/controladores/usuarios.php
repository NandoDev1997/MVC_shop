<?php 

class Usuarios extends Controlador{

    public function __construct(){
        $this->usuariosModelo = $this->modelo('usuario');
    }

    public function index(){
        $usuarios = $this->usuariosModelo->getUsuarios();
        $datos = [
            'titulo'    => 'Usuarios',
            'subtitulo' => '',
            'usuarios'  => $usuarios,
        ];
        $this->vista('usuarios/usuarios', $datos);
    }

    public function agregar(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $datos = [
                'imagen'    => trim($_FILES['img']['name']),
                'nombre'    => trim($_POST['nombre']),
                'apellidos' => trim($_POST['apellidos']),
                'puesto'    => trim($_POST['puesto']),
                'usuario'   => trim($_POST['usuario']),
                'password'  => trim($_POST['password']),
                'email'     => trim($_POST['email']),
                'telefono'  => trim($_POST['telefono']),
                'nivel'     => trim($_POST['nivel']),
                'email'     => trim($_POST['email']),
                'estado'    => 0,
                'fecha'     => trim('2020-02-02'),
            ];

            if ($this->usuariosModelo->agregarUsuario($datos)) {
                // redireccionar('/usuarios');
            var_dump($datos);

            }else{
                die('Algo salio mal');
            }
        } else {
            $datos = [
                'imagen'    => '',
                'nombre'    => '',
                'apellidos' => '',
                'puesto'    => '',
                'usuario'   => '',
                'email'     => '',
                'telefono'  => '',
                'nivel'     => '',
                'email'     => '',
                'estado'    => '',
                'fecha'     => '',
            ];
            $this->vista('usuarios/agregar', $datos);
        }

    }

}    



