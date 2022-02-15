<?php

namespace DAO;

use Model\Usuario;

class UsuarioDAO
{
    public static function authentication (Usuario $usuario)
    {
        $query = \DAO\DAO::conectar()->prepare("SELECT * FROM tb_login WHERE log_usuario = ? AND log_senha = ?");
        $query->execute(array($usuario->getUsuario(), $usuario->getSenha()));
        $result = $query->fetchAll();

        if (count($result) != 0){
            echo '<script>alert("Usuário encontrado")</script>';
        } else {
            echo '<script>alert("Usuário não encontrado")</script>';
        }
}
}