<?php

$Hostname = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "Formulario";

// $mysql = new mysqli($Hostname,$usuario,$senha,$bancodedados);
//     if ($mysqli -> connect_errno){  
//         echo "Falha ao conectar";
//     }else
//         echo "conectou";
$conn = mysqli_connect($Hostname,$usuario,$senha,$bancodedados);