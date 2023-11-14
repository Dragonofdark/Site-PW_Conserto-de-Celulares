<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilo.css" />
    <title>Clientes - tutorial</title>
</head>

<body>

    <nav class="indigo">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="select.php">Clientes</a></li>
                <li><a href="clientes.php">Novo</a></li>
                <li><a href="sair.php">Sair</a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="load"></div>
        <?php

        include '../conexao.php';

        $sth = $pdo->prepare("select *from clientes order by cli_id DESC");
        $sth->execute();

        echo '<h6>' . $sth->rowCount() . 'Celular(res) Cadastrado(s) </h6>';
        echo '<table class="stripes">';
        echo '<tr>';
        echo '<td> <b> Nome </b> </td>';
        echo '<td> <b> E-mail </b> </td>';
        echo '<td> <b> Editar </b> </td>';
        echo '</tr>';
        foreach ($sth as $res) {
            extract($res);
            echo '<tr>';
            echo '<td>' . $cel_nome . '</td>';
            echo '<td>' . $cli_nome . '</td>';
            echo '<td>' . $cli_email . '</td>';
            echo '<td>';
            echo '<a href="#" class="deleteClientes" cli_id=' . $cli_id . ' "> Excluir </a>';
            echo ' / ';
            echo '<a href="formulario_update.php?cli_id=' . $cli_id . ' "> Editar </a>';
            echo '<div class="msg" cli_id=' . $cli_id . '></div>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '<hr><p>Existem: ' . $sth->rowCount() . 'registros</p>';
        ?>
    </div>
</body>

<script type="text/javascript" src="../jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script type="text/javascript" src="cliente.js"></script>>

</html>