<?php
session_start();

function login(){

include('connection_open.php');

$usuario_login = $_POST["nm_usr"];
$senha_login = $_POST["key_usr"];

$sql = "select nome, senha from usuarios where upper(usuario) = upper('".$usuario_login."');";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if($senha_login == $row["senha"]){
            $_SESSION['nome_usr'] = $row["nome"];
            echo $row["nome"];
        } else {
            echo "ERRO";
        }
    }
} else {
    echo "ERRO";
}

include('connection_close.php');
}

login();

?>