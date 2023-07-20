<?php
include_once "../sistema.php";

if(sessaoAberta()){
    header('location: inicio.php');
}else{
    header('location: sessao_form.php');
}
