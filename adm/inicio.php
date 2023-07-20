<?php 
include_once "../sistema.php";
    include "header_dashboard.php"; 
    if(!sessaoAberta()){
        header('location: sessao_form.php');
    }
    
?>

<h1>Dashboard</h1>

<?php 
include "footer.php"; 
?>