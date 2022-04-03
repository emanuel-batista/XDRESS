<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>ENTRA AÍ - XDRESS</title>
</head>
<body>
<div class="logo"><a class="navbar-brand" style="color: black;"  href="#">XDRESS</a></div>
    <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #f7f8fa;" id="navzinha">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    CATEGORIAS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">VESTIDOS</a></li>
                    <li><a class="dropdown-item" href="#">TOP</a></li>
                    <li><a class="dropdown-item" href="#">BOTTOM</a></li>
                    <li><a class="dropdown-item" href="#">ACESSÓRIOS</a></li>
                    <li><a class="dropdown-item" href="#">SAPATOS</a></li>
                </ul>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">LOGIN</a>
                </li>                
                </li>
                
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <form action="conexao-login.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Usuário</label>
            <input type="user" class="form-control" name='usuario' aria-describedby="emailHelp" placeholder="Nome de Usuário">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Senha</label>
            <input type="password" class="form-control" name='senha' placeholder="Password">
        </div><br>
        <button type="submit" class="btn btn-primary">LOGAR</button>
    </form>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>