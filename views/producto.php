<main>
    <section class="py-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-verde">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="index.php?pagina=catalogo" class="text-decoration-none text-verde">Catálogo</a></li>
                    <li class="breadcrumb-item"><a href="index.php?pagina=catalogo&categoria=5" class="text-decoration-none text-verde">Procesadores</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ryzen 5 7600</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="assets/images/productos/ryzen5-7600.jpg" alt="Ryzen 5 7600" class="img-detalle border rounded-3 p-3">
                </div>
<!--////    /////////////////////////////////////////////////////////// -->
                <div class="col-md-6">
                    <p class="small text-gris text-uppercase">AMD</p>
                    <h1 class="h2 fw-bold text-azul">Ryzen 5 7600</h1>
                    <p class="small text-gris">Código: CPU-001</p>
                    <p class="fs-2 fw-bold text-azul">$299.000</p>
                    <span class="badge bg-success mb-3">En stock (10 disponibles)</span>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="1">
                        <div class="d-flex gap-2 align-items-end">
                            <label>Cantidad:
                                <input type="number" name="cantidad" value="1" min="1" max="10" style="width: 90px;" class="form-control form-control-lg">
                            </label>
                            <button class="btn btn-marca btn-lg" type="submit"><i class="bi bi-cart-plus me-2"></i>Agregar al carrito</button>
                        </div>
                    </form>
                    <p class="small text-gris mt-4"><i class="bi bi-truck text-verde me-2"></i>Envío a todo el país</p>
                    <p class="small text-gris"><i class="bi bi-shield-check text-verde me-2"></i>Garantía oficial</p>
                </div>
            </div>
            <h2 class="h4 fw-bold text-azul mt-5">Descripción</h2>
            <p>6 núcleos, 12 hilos, 3.8 GHz (5.1 GHz boost), socket AM5</p>
        </div>
    </section>
</main>