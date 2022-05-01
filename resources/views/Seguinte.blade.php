<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecomp Jr.</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-ecompjr.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo-ecompjr.png')}}" alt="" width= "30px" class ="d-inline-blocl align-text-top">
            Página inicial Ecompjr
        </a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </nav> 
        <ul class="nav flex-column">
            
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Membros Ecompjr</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cadastroMembro">Cadastrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/buscaMembro">Buscar Membro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/listarMembros">Listar Membros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Sair</a>
            </li>
        </ul> 

        <header>
        <h1 class="mt-5" style="text-align: center; front-weight: bold;">Informações Empresa</h1>
        <img class ="mx-auto d-block" src="{{ asset('images/logo-ecompjr.png')}}" alt="Logo ecompjr" width= "200px">
        </header>
        
        <div class="container mt-5 mb-5">
        <div class = "row row-cols-1 row-cols-md-3 g4">
            <div class="col">
                <a href="http://" style="text-decoration: none; color: black">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/missao.jpg')}}" alt="Missão" srcset="">
                        <div class="card-body">
                            <h5 class="card-title">Missão</h5>
                            <p class= "card-text">Através da vivência empresarial e trabalho em equipe, formar profissionais inovadores, comprometidos e capazes de vencer desafios</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="http://" style="text-decoration: none; color: black">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/visao.jpg')}}" alt="Visão" srcset="">
                        <div class="card-body">
                            <h5 class="card-title">Visão</h5>
                            <p class= "card-text">Ser uma empresa que realiza projetos de impacto, mais conectada ao movimento empresa júnior e com grande reconhecimento dentro e fora da universidade.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="http://" style="text-decoration: none; color: black">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/valores.jpg')}}" alt="Imagem da viagem" srcset="">
                        <div class="card-body">
                            <h5 class="card-title">Valores</h5>
                            <p class= "card-text">Os valores de uma empresa guiam a conduta da mesma, portanto a EcompJr. baseia-se nos seguintes valores: Protagonismo, Cooperatividade, Assiduidade, Resiliência, Constância em resultados, Evolução com os erros, Conexão com o Movimento, Foco na Qualidade, Ética e Empatia.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>