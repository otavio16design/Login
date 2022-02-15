<?php

class App
{
    public function __construct()
    {
        if (isset($_POST['logar'])) {
            $usuario = new \Model\Usuario();
            $usuario->setUsuario($_POST['usuario']);
            $usuario->setSenha($_POST['senha']);

            DAO\UsuarioDAO::authentication($usuario);
        }
    }
}