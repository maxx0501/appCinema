<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid mx-auto">
              <a class="navbar-brand" href="#">Cinema</a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Cadastrar</a></li>
                      <li><a class="dropdown-item" href="#">Pesquisar</a></li>
                      <li><a class="dropdown-item" href="#">Gerenciar</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Cadastrar</a></li>
                      <li><a class="dropdown-item" href="#">Pesquisar</a></li>
                      <li><a class="dropdown-item" href="#">Gerenciar</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Cadastrar</a></li>
                      <li><a class="dropdown-item" href="#">Pesquisar</a></li>
                      <li><a class="dropdown-item" href="#">Gerenciar</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          @yield('content');
      
      <footer class="bg-dark text-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3>Contato</h3>
              <p>Telefone: (99) 9999-9999</p>
              <p>Email: contato@cinema.com</p>
            </div>
            <div class="col-md-6">
              <h3>Endereço</h3>
              <p>Rua do Cinema, 1234</p>
              <p>Cidade, Estado</p>
            </div>
          </div>
          <hr>
          <div class="text-center">
            <p>&copy; 2023 Cinema. Todos os direitos reservados.</p>
          </div>
        </div>
      </footer>
      
      



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>