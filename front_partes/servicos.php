<table>
    <tr>
        <td>Cod.</td>
<?php
    include_once "../sistema.php";
    $com = com();
    $consulta = $com->query("SELECT * FROM servicos");

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>\n";
        echo "<td>{$linha['codigo']}</td>";
        echo "<td>{$linha['nome']}</td>";
        echo "<tr>\n";
    }

        
?>
    </tr>
</table>
