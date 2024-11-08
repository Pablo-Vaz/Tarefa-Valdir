<?php
session_start();
require_once('conexao.php');

$tarefa = [];

if (!isset($_GET['id'])) {
    header('Location: index.php');
} else {
    $tarefaId = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM tarefas WHERE id = '{$tarefaId}'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        $tarefa = mysqli_fetch_array($query);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Editar Tarefa</title>
</head>
<body style="background-image: linear-gradient(to right, pink, pink, pink)">
    <div class="container-xxl mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card w-100">
                    <div class="card-header">
                        <h3 class="text-center">
                            Editar Tarefa <i class="bi bi-pencil-fill"></i>
                            <a href="index.php" class="btn btn-outline-secondary float-end btn-sm"><i class="bi bi-arrow-left"></i></a>
                        </h3>
                    </div>
                    <div class ="card-body" style="font-weight: 600">
                        <?php
                        if ($tarefa) :
                        ?>
                        <form action="acoes.php" method="POST">
                            <input type="hidden" name="tarefa_id" value="<?=$tarefa['id']?>">
                            <div class="mb-3">
                                <label for="txtNome">Nome</label>
                                <input style="font-style: italic" type="txtNome" name="txtNome" id="txtNome" value="<?=$tarefa['nome']?>" class="form-control">

                            </div>
                            <div class="mb-3">
                                <label for="txtDescricao">Descrição</label>
                                <input style="font-style: italic" type="txtDescricao" name="txtDescricao" id="txtDescricao" value="<?=$tarefa['descricao']?>" class="form-control"> 

                            </div>
                            <div class="mb-3">
                                <label for="txtStatus">Status</label>
                                <select style="font-style: italic" name = "txtStatus" id="txtStatus" class="form-control" >
                                    <option value="0"<?php if ($tarefa['status'] == 0) echo "selected"?>>A fazer</option>
                                    <option value="1"<?php if ($tarefa['status'] == 1) echo "selected"?>>Fazendo</option>
                                    <option value="2"<?php if ($tarefa['status'] == 2) echo "selected"?>>Feito</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtDataLimite">Data Limite</label>
                                <input style="font-style: italic" type="date" name="txtDataLimite" id="txtDataLimite" value="<?=$tarefa['data_limite']?>" class="form-control">

                            </div>
                            <div class="mb-3">
                                <button type="submit" name="edit_tarefa" class="btn btn-primary float-end"><i class="bi bi-floppy-fill"></i> Salvar</button>
                            
                            </div>

                        </form>
                        <?php
                        else:
                        ?>
                        <div class="alert alert-danger" role="alert">
                            Tarefa não encontrada
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                        <?php
                        endif
                        ?>


                    </div>

                </div>

            </div>

        </div>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>