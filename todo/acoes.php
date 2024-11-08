<?php
session_start();
require_once('conexao.php');

if (isset($_POST['create_tarefa'])) { 
    $nome = mysqli_real_escape_string($conn, trim($_POST['txtNome']));
    $descricao = mysqli_real_escape_string($conn, trim($_POST['txtDescricao']));
    $status = mysqli_real_escape_string($conn, trim($_POST['txtStatus']));
    $data_limite = mysqli_real_escape_string($conn, trim($_POST['txtDataLimite']));

    $sql = "INSERT INTO tarefas (nome, descricao, status, data_limite) VALUES('$nome', '$descricao', '$status', '$data_limite')";

    mysqli_query($conn, $sql);

    $_SESSION['message'] = "Tarefa criada com sucesso!";
    $_SESSION['type'] = 'success';

    header('Location: index.php');
    exit();
}

if (isset($_POST['delete_tarefa'])) { 
    $tarefaId = mysqli_real_escape_string($conn, $_POST['delete_tarefa']);
    $sql = "DELETE FROM tarefas WHERE id = '$tarefaId'"; 

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['message'] = "Tarefa com ID {$tarefaId} excluída com sucesso!";
        $_SESSION['type'] = 'success';
    } else {
        $_SESSION['message'] = "Ops! Não foi possível excluir a tarefa";
        $_SESSION['type'] = 'error';
    }

    header('Location: index.php');
    exit;
}

if (isset($_POST['edit_tarefa'])) {
    $tarefaId = mysqli_real_escape_string($conn, $_POST['tarefa_id']);
    $nome = mysqli_real_escape_string($conn, trim($_POST['txtNome']));
    $descricao = mysqli_real_escape_string($conn, trim($_POST['txtDescricao']));
    $status = mysqli_real_escape_string($conn, trim($_POST['txtStatus']));
    $data_limite = mysqli_real_escape_string($conn, trim($_POST['txtDataLimite']));

    $sql = "UPDATE tarefas SET nome = '{$nome}', descricao = '{$descricao}', status = '{$status}', data_limite = '{$data_limite}' WHERE id = '{$tarefaId}'";

    mysqli_query($conn, $sql);

    $_SESSION['message'] = "Tarefa editada com sucesso!";
    $_SESSION['type'] = 'success';

    header('Location: index.php');
    exit;
    
}

