<html>
    <head>
        <title>Prova PHP</title>
        <meta charset='UTF-8' lang="pt-br">
    </head>
    <body>

        <h3> Avaliação de NPC </h1>
        <p1> Jozé Martins Peres Junior </p1><br>
        <p1> Matricula: 201910527 </p1><br>
        <hr>


        <form action="post">
            <label> Nome </label>
            <input type="label" id="nome" placeholder="Nome"><br>
            <label> Saldo <input type="number" id="saldo" placeholder="Saldo"> R$</label><br>
            <label> Situação <input type="name" id="situacao" placeholder="Situação"></label><br>
            <input type="submit" value="Enviar >">


        </form>

            <?php
                include "Conta.class.php";
                include "db.php";
                include "contas.php";
                #include "processamento.php";

                $c1 = new Conta;
                $c1->setNome("Junior");
                $c1->setSaldo(500);
                $c1->setSituacao("Ativo");

                print_r($c1);
            

            ?>

       



    </body>

    











</html>