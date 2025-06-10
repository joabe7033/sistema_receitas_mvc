<!DOCTYPE html>
<html lang="pt-BR">

<!-- Se acharem o Boostrap muito confuso podem tirar -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>

    <!-- Bootstrap CSS padrão (não RTL) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu de Navegação</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent"><!--Barra de navegação-->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=novoCadastro">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=listar">Listar Usuário(Teste)</a><!--Pode ser utilizado na pagina do admin futuramente, caso queiram-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Receitas</a><!--Implementar pagina,implentar crud de receitas etc.-->
                    </li>
                    <li class="nav-item dropdown"><!-- Opcional, abre um leque de outras opções, pode tirar se quiser, não sei para o que usar-->
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mais opções
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Opção 1</a></li>
                            <li><a class="dropdown-item" href="#">Opção 2</a></li>
                            <li><hr class="dropdown-divider"></li><!-- Faz a linha da divisão -->
                            <li><a class="dropdown-item" href="#">Opção 3</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="d-flex" role="search"><!-- A barra de pesquisa, implementar função de pesquisa -->
                    <input class="form-control me-2" type="search" placeholder="Digite o que procura" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisa</button>
                </form>
            </div>
        </div>
    </nav>

    <div class = "container">
        <div class = "row">
            <div class = "col mt-5">
    <!-- mini controller rudimentar, estudar como incrementar na pasta controller e depois separar-->
        <?php
    include ("Config/Banco.php");
    $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : null; // faz a vereficação, quando o usario clica no icone

    switch($page){
        case "novoCadastro":
            include("View/Cadastro.php");
            break;
        case "listar":
            include("View/ListarUsuario.php");
            break;
        case "Cadastrar":
            include("Model/CadastrarUsuario.php");
            break;
        default:
            echo "<h1>Bem vindo</h1>";
    }
?>

    </div>
        </div>
            </div>
    <!-- Bootstrap Bundle com Popper, arquivo java que faz a pagina visual ficar assim-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
