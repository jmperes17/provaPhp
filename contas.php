<a href="?pagina=Inserir camisa">Inserir conta</a>
<table border="1px" solid #ccc; width= "100%">
    <tr>
        <th>Nome</th>
        <th>Situação</th>
        <th>Saldo</th>

    </tr>

    <?php
        while($linha = mysqli_fetch_assoc($result_conta)){
            echo '<tr><td>'.$linha['nome'].'</td>';
            echo '<td>'.$linha['situacao'].'</td>';
            echo '<td>'.$linha['saldo'].' R$ '.'</td></tr>';
        }



    ?>
</table>
