<?php 
include_once "../sistema.php";
include "header_login.php"; 

if(sessaoAberta()){
    header('location: inicio.php');
}
?>

    <div>
        <hgroup>
            <h1>BHC | Login</h1>
        </hgroup>
        <form action="sessao_abrir.php" method="post">
            <div class="msg">Entre com suas credendiciais</div>
            <div>
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" >
            </div>


            <div>
                <label for="senha">Senha:</label>
                <input type="text" name="senha" >
            </div>

            <div class="acoes">
                <button type="submit">Entrar</button>
            </div>
        </form>
    </div>

    <?php include "footer.php"; ?>