<?php
include_once "../sistema.php";
include "header_login.php";

if(!sessaoAberta()){
    header('location: sessao_form.php');
}

?>


<?php

sessaoFechar();
echo "<h1>Sessao Encerrada!</h1>\n";
echo "<p>Va para o <a href=\"sessao_form.php\">Login</a></p>\n";

?>

<?php

include "footer.php";