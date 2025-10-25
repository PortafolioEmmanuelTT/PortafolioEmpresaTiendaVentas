<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f2923602be.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="w-100 vh-100">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex justify-content-between">

            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a href="<?= base_url('/productos') ?>" class="dropdown-item">productos</a></li>
                        <li><a href="" class="dropdown-item">ventas</a></li>
                        <li><a href="" class="dropdown-item">envios</a></li>
                    </ul>
                </li>
            </ul>

            <a class="navbar-brand  justify-content-center" href="<?= base_url('/') ?>">Aplicacion ventas</a>

            <form action="" role="search" class="d-flex">
                <input type="search" class="form-control me-2" placeholder="Buscador" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </nav>
    <div class="d-grid p-5">
        <?= $this->renderSection('content') ?>
    </div>
</div>

</body>
</html>