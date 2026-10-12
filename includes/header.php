<header class="header-oscuro">
    <nav class="navbar navbar-expand-lg bg-azul-noche" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo/logo-blanco.png" alt="Nuvora Tech" class="d-inline-block align-text-top logo d-none d-lg-inline">
                <img src="assets/images/logo/icono-blanco.png" alt="Nuvora Tech" class="d-inline-block align-text-top logo d-lg-none">
            </a>
            <form class="d-flex mx-lg-4 mt-2 mt-lg-0 order-last order-lg-0 col-12 col-lg" role="search" action="index.php" method="GET">
                <input type="hidden" name="pagina" value="catalogo">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Buscar productos..." aria-label="Buscar" name="buscar"/>
                    <button class="btn btn-marca" type="submit" aria-label="Buscar"><i class="bi bi-search"></i></button>
                </div>
            </form>
            <ul class="navbar-nav flex-row gap-3 ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=login"><i class="bi bi-person me-1"></i><span class="d-none d-lg-inline">Iniciar sesión</span></a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="index.php?pagina=registro">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=carrito"><i class="bi bi-cart2 me-1"></i><span class="d-none d-lg-inline">Carrito</span></a>
                </li>
            </ul>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menuCategorias" aria-label="Abrir menú"><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg border-top py-1 bg-azul" data-bs-theme="dark">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center" id="menuCategorias">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-blanco" href="index.php?pagina=catalogo">Ver catálogo completo</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle text-blanco" data-bs-toggle="dropdown" href="#">Componentes</a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?pagina=catalogo&categoria=1" class="dropdown-item">Ver todos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="index.php?pagina=catalogo&categoria=5" class="dropdown-item">Procesadores</a></li>
                            <li><a href="index.php?pagina=catalogo&categoria=6" class="dropdown-item">Motherboards</a></li>
                            <li><a href="index.php?pagina=catalogo&categoria=7" class="dropdown-item">Placas de video</a></li>
                            <li><a href="index.php?pagina=catalogo&categoria=8" class="dropdown-item">Memorias RAM</a></li>
                            <li><a href="index.php?pagina=catalogo&categoria=9" class="dropdown-item">Almacenamiento</a></li>
                            <li><a href="index.php?pagina=catalogo&categoria=10" class="dropdown-item">Fuentes de poder</a></li>
                            <li><a href="index.php?pagina=catalogo&categoria=11" class="dropdown-item">Refrigeración</a></li>
                            <li><a href="index.php?pagina=catalogo&categoria=12" class="dropdown-item">Gabinetes</a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle text-blanco" data-bs-toggle="dropdown" href="#">Periféricos</a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?pagina=catalogo&categoria=2" class="dropdown-item">Ver todos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="index.php?pagina=catalogo&categoria=13" class="dropdown-item">Teclados</a></li>
                            <li><a href="index.php?pagina=catalogo&categoria=14" class="dropdown-item">Mouses</a></li>
                            <li><a href="index.php?pagina=catalogo&categoria=15" class="dropdown-item">Auriculares</a></li>
                            <li><a href="index.php?pagina=catalogo&categoria=16" class="dropdown-item">Monitores</a></li>
                            <li><a href="index.php?pagina=catalogo&categoria=18" class="dropdown-item">Mouse pads</a></li>
                            <li><a href="index.php?pagina=catalogo&categoria=17" class="dropdown-item">Webcams</a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle text-blanco" data-bs-toggle="dropdown" href="#">Sillas</a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?pagina=catalogo&categoria=19" class="dropdown-item">Ver todas</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="index.php?pagina=catalogo&categoria=20" class="dropdown-item">Sillas de oficina</a></li>
                            <li><a href="index.php?pagina=catalogo&categoria=21" class="dropdown-item">Sillas gamer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=catalogo&categoria=4">Notebooks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=catalogo&categoria=3">PCs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>