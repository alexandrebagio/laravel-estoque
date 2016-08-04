<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Controle de estoque</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/custom.css">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">      
              <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/produtos">Listagem</a></li>
                <li><a href="/produtos/novo">Novo</a></li>
            </ul>

        </div>
    </nav>
    @yield('conteudo')

    <footer class="footer">
        <p>© Livro de Laravel do Alura.</p>
    </footer>
</div>
</body>
</html>
