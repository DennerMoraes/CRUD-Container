<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>container</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-5">
                    <a class="nav-link" href="?page=novo">Cadastrar Containers</a>
                    </li>
                    <li class="nav-item me-5">
                    <a class="nav-link" href="?page=mostrar">Mostrar Containers</a>
                    </li>
                    <li class="nav-item me-5">
                    <a class="nav-link" href="?page=mostrarmov">Mostrar Movimentação</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>

        <?php
            include('config.php');
            switch(@$_REQUEST["page"]){
                case "novo":
                    include("criar_container.php");
                break;
                case "mostrar":
                    include("mostrar_container.php");
                break;
                case "salvar":
                    include("salvar_container.php");
                break;
                case "editar":
                    include("editar_container.php");
                break;
                case "adicionarmov":
                    include("adicionar_mov.php");
                break;
                case "mostrarmov":
                    include("mostrar_mov.php");
                break;
                case "salvarmov":
                    include("salvar_mov.php");
                break;
                case "editarmov":
                    include("editar_mov.php");
                break;
            }

        ?>

    </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>