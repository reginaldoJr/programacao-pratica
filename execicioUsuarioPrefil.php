<?php

$usuarios = [
    [
        'nome' => "Reginaldo",
        'sobrenome' => "Santos",
        'perfil' => 'Administrativo'
    ],
    [
        'nome' => "Bruno",
        'sobrenome' => "Garcia",
        'perfil' => 'Administrativo'
    ],
    [
        'nome' => "Alex",
        'sobrenome' => "xxxx",
        'perfil' => 'Desenvolvedor'
    ],
];

$usuariosAdministrativos = filtarUsuariosPorPerfil($usuarios,'Administrativo');
$usuariosDesenvolvimento = filtarUsuariosPorPerfil($usuarios,'Desenvolvedor');

var_dump($usuariosAdministrativos,$usuariosDesenvolvimento);



function filtarUsuariosPorPerfil($usuarios,$perfil){
    $usuariosFiltrados = [];
    foreach ($usuarios as $usuario) {
        if($usuario['perfil'] == $perfil){
            $usuariosFiltrados[] = $usuario;
        }
    }

    return $usuariosFiltrados;
}

function montarNomeCompleto($nome, $sobrenome){
    return $nome . ' ' . $sobrenome;
}
