<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht-device-widht, initial-scala-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilo.css"/>
    <title>Projeto</title>
</head>

<body>

<nav class="indigo">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="select.php">Clientes</a></li>
                <li><a href="clientes.php">Novo</a></li>
                <li><a href="clientes.php">Sair</a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="card-panel">
            <h6>Cadastro de clientes</h6>
            <form name="formularioClientes" method="post">
                <div class="load"></div>
                <div class="input-field">
                    <label>Nome do Celular</label>
                    <input type="text" name="cel_nome">
                </div>
                <div class="input-field">
                    <label>Nome</label>
                    <input type="text" name="cli_name">
                </div>
                <div class="input-field">
                    <label>Email</label>
                    <input type="text" name="cli_email">
                </div>

                <fieldset>
                    <legend><h6>Estado do Celular</h6></legend>

                    <div>
                        <input type="radio" id="nao Iniciado" name="drone" value="nao iniciado" checked/>
                        <label for="nao Iniciado">Não iniciado</label>
                    </div>
    
                     <div>
                         <input type="radio" id="em concerto" name="drone" value="em concerto" />
                         <label for="em concerto">Em concerto</label>
                     </div>
    
                        <div>
                            <input type="radio" id="pronto para entrega" name="drone" value="pronto para entrega" />
                           <label for="pronto para entrega">Pronto para entrega</label>
                       </div>
    
                      <div>
                            <input type="radio" id="ja entregue" name="drone" value="ja entregue" />
                           <label for="ja entregue">Já entregue</label>
                        </div>
                    </fieldset>
                    
                <input class="btn indigo" type="submit" value="Cadastrar">
            </form>
            <div class="msg"></div>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../jquery-3.7.1.main.js"></script>
    <script type="text/javascript" src="clientes.js"></script>
</html>
