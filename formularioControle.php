<?php

echo "<h2>Dados do formulário</h2>";

// Receber os dados pelo "name" de cada um
// A "posição" do request é o "name" do campo do form
$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];

echo "O login: $login possui a senha: $senha";


?>
