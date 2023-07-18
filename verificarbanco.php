<?php 
$com= com();

$com->query("CREATE TABLE IF NOT EXISTS `servicos` ( `codigo` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(50) DEFAULT '' , `valor` FLOAT NULL, PRIMARY KEY (`codigo`)); 
");