<?php

//print_r($_REQUEST);

$nome = $_REQUEST['campoNome'];
$sobrenome = $_REQUEST['campoSobrenome'];
$senha = $_REQUEST['campoSenha'];

print "Seu nome completo é: " . $nome . " " . $sobrenome . "<br>";

if (strlen($senha) < 6)  {
    print "Cuidado! Sua senha está fraca. <br>";
};

print "Sua senha é: " . $senha;