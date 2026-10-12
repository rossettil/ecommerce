<header class="header-oscuro">
    <nav class="navbar navbar-expand-lg bg-azul-noche" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo/logo-blanco.png" alt="Nuvora Tech" class="d-inline-block align-text-top logo d-none d-lg-inline">
                <img src="assets/images/logo/icono-blanco.png" alt="Nuvora Tech" class="d-inline-block align-text-top logo d-lg-none">
            </a>
            <form class="d-flex mx-lg-4 mt-2 mt-lg-0 order-last order-lg-0 col-12 col-lg" role="search" action="catalogo.php" method="GET">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Buscar productos..." aria-label="Buscar" name="buscar"/>
                    <button class="btn btn-marca" type="submit" aria-label="Buscar"><i class="bi bi-search"></i></button>
                </div>
            </form>
            <ul class="navbar-nav flex-row gap-3 ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-blanco" href="#"><i class="bi bi-person me-1"></i><span class="d-none d-lg-inline">Iniciar sesión</span></a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link text-blanco" href="#">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-blanco" href="#"><i class="bi bi-cart2 me-1"></i><span class="d-none d-lg-inline">Carrito</span></a>
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
                        <a class="nav-link text-blanco" href="#">Ver catálogo completo</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle text-blanco" data-bs-toggle="dropdown" href="#">Componentes</a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item">Ver todos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="" class="dropdown-item">Procesadores</a></li>
                            <li><a href="" class="dropdown-item">Motherboards</a></li>
                            <li><a href="" class="dropdown-item">Placas de video</a></li>
                            <li><a href="" class="dropdown-item">Memorias RAM</a></li>
                            <li><a href="" class="dropdown-item">Almacenamiento</a></li>
                            <li><a href="" class="dropdown-item">Fuentes de poder</a></li>
                            <li><a href="" class="dropdown-item">Refrigeración</a></li>
                            <li><a href="" class="dropdown-item">Gabinetes</a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle text-blanco" data-bs-toggle="dropdown" href="#">Periféricos</a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item">Ver todos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="" class="dropdown-item">Teclados</a></li>
                            <li><a href="" class="dropdown-item">Mouses</a></li>
                            <li><a href="" class="dropdown-item">Auriculares</a></li>
                            <li><a href="" class="dropdown-item">Monitores</a></li>
                            <li><a href="" class="dropdown-item">Mouse pads</a></li>
                            <li><a href="" class="dropdown-item">Webcams</a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle text-blanco" data-bs-toggle="dropdown" href="#">Sillas</a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item">Ver todas</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="" class="dropdown-item">Sillas de oficina</a></li>
                            <li><a href="" class="dropdown-item">Sillas gamer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blanco" href="#">Notebooks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blanco" href="#">PCs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>