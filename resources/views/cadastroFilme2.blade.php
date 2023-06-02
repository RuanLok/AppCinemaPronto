@extends('padrao')

@section('content') 

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cadastrar</title>
    <link rel="icon" href="img/popcorn.png"/>
</head>

<body>
    <!--inicio navbar -->
    

    <!--inicio formulario-->
    <div class="container mt-4">
        <form class="row g-3">
            <div class="col-md-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome!">
            </div>

            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu email!">
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Senha</label>
                <input type="password" class="form-control" id="email" placeholder="Digite sua senha!">
            </div>
            <div class="col-6">
                <label for="celPart" class="form-label">Celular</label>
                <input type="text" class="form-control" id="celPart" placeholder="(11) 99999-9999" maxlength="15">
            </div>
            <div class="col-6">
                <label for="celComer" class="form-label">CPF</label>
                <input type="text" class="form-control" id="celComer" placeholder="Digite seu CPF" maxlength="11">
            </div>

            <div class="col-12">
                <a href="login.html" button type="submit" class="btn btn-primary">Cadastrar</button> </a>
            </div>
        </form>
    </div>
    <!--fim formulario-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>


</body>

</html>

@endsection