<!DOCTYPE html>
<?php session_start(); ?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciador de Tarefas</title>
    <link href="tarefas.css" rel="stylesheet"/>
</head>
<body>
    <h1>Gerenciador de Tarefas!</h1>

    <form action="">
        <fieldset>
        <legend>Nova Tarefa</legend>
            <label for="nome">
                Tarefa:
                <input type="text" name="nome" />
            </label>
        
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>

    <?php

        if(isset($_GET['nome'])){
            $_SESSION['lista_tarefas'][] = $_GET['nome'];
        }

        $lista_tarefas = array();

        if(isset($_SESSION['lista_tarefas'])){
            $lista_tarefas = $_SESSION['lista_tarefas'];
        }
    ?>
    <fieldset>
        <legend>Lista das Tarefas registradas</legend>
        <table>
            <thead>
                <tr>
                    <th>Lista de Tarefas</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($lista_tarefas as $tarefa): ?>
                    <tr>
                        <td> <?php echo $tarefa; ?></td>
                    </tr>
                 <?php endforeach; ?>
            </tbody>
        </table>
    </fieldset>
</body>
</html>