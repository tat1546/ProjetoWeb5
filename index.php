<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Projeto web</title>
</head>

<body class="text-bg-light">
    <div class="container text-center">

        <div class="row bg-primary">
            <div class="col">
                 <nav class="navbar navbar-expand-lg bg-primary"  data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">SISTEMA WEB</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Consultar</a>
                    </li>
                  </ul>
                </div>
                </div>
                </nav>
            </div>
        </div>

        <div class="row bg-white">
            <div class="col">
                 &nbsp;
            </div>
        </div>

        <div class="row bg-white">
            <div class="col text-start">
                <form name="cadastro" method="POST" action=""> 
                <div class="mb-3 ">
                     <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                    <input type="nome" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu nome completo">
                </div>

                <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Telefone:</label>
                    <input type="telefone" class="form-control" id="exampleFormControlInput1" placeholder="(XX)00000-0000">
                </div>

                <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Origem:</label>
                     <select class="form-select" aria-label="Default select example">
                        <option value="Celular">Celular</option>
                        <option value="Fixo">Fixo</option>
                        <option value="Whatsapp">Whatsapp</option>
                        <option value="Whatsapp">Whatsapp</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Google meu negocio">Google meu negocio</option>
                    </select>
                </div>

                <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Data do Contato:</label>
                    <input type="nome" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu nome completo">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Obeservação:</label>
                    <textarea class="form-control"   type="observacao" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <button type="button" class="btn btn-primary">Primary</button>
                </div>
            </form>

            </div>
        </div>

    </div>


</body>

</html>