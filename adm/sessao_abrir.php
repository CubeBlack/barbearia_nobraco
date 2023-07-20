<?php
include_once "../sistema.php";
include "header_login.php";

?>

<div class="conteudo">
<?php
include_once "../sistema.php";
if(sessaoAberta()){
    header('location: inicio.php');
}

if(isset($_POST['usuario'])&&isset($_POST['senha'])){
    if($_POST['usuario'] == 'adm' && $_POST['senha']){
        sessaoAbrir();
        echo "<h1>Login efetuado com sucesso!</h1>\n";
        echo "<p>Va para o <a href=\"inicio.php\">Dahsboard</a> para continuar</p>\n";
        echo "<p><a href=\"inicio.php\">Dahsboard</a></p>\n";
    }
    else{
        echo "<h1>Não foi posivel efetuar login!</h1>\n";
        echo "<p>Tente efetuar <a href=\"sessao_form.php\">Login</a> novamente</p>\n";
        echo "<p><a href=\"sessao_form.php\">Login</a></p>\n";
    }
}
else{
    echo "<h1>Abrir Sessao</h1><p>Dados não enviados!</p>";
}

?>

</div>
<?php

include "footer.php";