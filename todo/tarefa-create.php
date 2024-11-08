<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Adicionar Tarefas</title>
</head>
<body style="background-image: linear-gradient(to right, pink, pink, pink)">

    <div class="container-xxl mt-3">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card w-100">
                    <div class="card-header">
                        <h3 class="text-center">
                            Criar Tarefa <i class="bi bi-patch-plus"></i>
                            <a href="index.php" class="btn btn-outline-secondary float-end btn-sm"><i class="bi bi-arrow-left"></i></i></a>
                        </h3>
                    </div>
                    <div class="card-body " style="font-weight: 600">
                        <form action="acoes.php" method="POST">
                            <div class="mb-3">
                                <label for="txtNome">Nome</label>
                                <input type="text" name="txtNome" id="txtNome" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="txtDescricao">Descrição</label>
                                <input type="text" name="txtDescricao" id="txtDescricao" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="txtStatus">Status</label>
                                <select name = "txtStatus" id="txtStatus" class="form-control" style="font-style: italic">
                                    <option value="">Escolha uma opção</option>
                                    <option value="0">A fazer</option>
                                    <option value="1">Fazendo</option>
                                    <option value="2">Feito</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtDataLimite">Data Limite</label>
                                <input style="font-style: italic" type="date" name="txtDataLimite" id="txtDataLimite" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="create_tarefa" class="btn btn-primary float-end "><i class="bi bi-floppy-fill"></i></button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>