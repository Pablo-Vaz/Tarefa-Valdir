<?php 
session_start();
require_once("conexao.php");

$sql = "SELECT * FROM tarefas";
$tarefas = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body style="background-image: linear-gradient(to right, pink, pink, pink)">
    <div class="container-xxl mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card w-100">
                    <div class="card-header">
                        <h3 class="text-center">
                        

                            Listagem de tarefas <i class="bi bi-list-task"></i>
                            <a href="tarefa-create.php" class="btn btn-outline-secondary float-end">Criar Tarefa</a>
                        </h3>
                    </div>
                    <div class="card-body text-center">
                        <?php include('mensagem.php'); ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr style="font-weight: 600" class="h4">
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Status</th>
                                    <th>Data Limite</th>
                                </tr>
                            </thead>
                            <tbody style="font-style: italic">
                                <?php foreach ($tarefas as $tarefa): ?>
                                    <tr>
                                        <td><?php echo $tarefa['id']; ?></td>
                                        <td><?php echo $tarefa['nome']; ?></td>
                                        <td style="max-width:100px;word-wrap: break-line"><?php echo $tarefa['descricao']; ?></td>
                                        <?php if ($tarefa['status'] == 0): ?>
                                            <td class="text-center h5"><span class="badge bg-warning text-dark ">A fazer</span></td>
                                            <?php endif ?>
                                            <?php if ($tarefa['status'] == 1): ?>
                                                <td class="text-center h5"><span class="badge bg-info text-dark">Fazendo</span></td>
                                                <?php endif ?>
                                                <?php if ($tarefa['status'] == 2): ?>
                                                    <td class="text-center h5"><span class="badge bg-success">Feito</span></td>
                                                    <?php endif ?>
                                        <td><?php echo date('d/m/Y', strtotime($tarefa['data_limite'])); ?></td>
                                        
                                                    
                                                    
                                        <td class="text-center h3">
                                            <a href="tarefa-edit.php?id=<?=$tarefa['id']?>" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-fill"></i></a>
                                            <form action="acoes.php" method="POST" class="d-inline">
                                                <button onclick="return confirm('Tem certeza que deseja excluir a tarefa?')" name="delete_tarefa" type="submit" value="<?=$tarefa['id']?>" class="btn btn-danger btn-sm"><i class="bi bi-trash2-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>