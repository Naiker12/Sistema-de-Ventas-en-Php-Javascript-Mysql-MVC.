<?php include_once 'Views/template/header_principal.php'; ?>

<!-- Start Content -->
<div class="container py-5">
    <?php if ($data['verificar']['verify'] == 1) { ?>
        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Pago</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pendientes-tab" data-bs-toggle="tab" data-bs-target="#pendientes-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Pedidos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="productos-tab" data-bs-toggle="tab" data-bs-target="#productos-tab-pane" type="button" role="tab" aria-controls="productos-tab-pane" aria-selected="false">Productos</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="row">
                <div class="dropdown">
                                <a class="nav-link dropdown-toggle float-end" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL . 'clientes/salir'; ?>"><i class="fas fa-times-circle"></i> Cerrar Sesión</a></li>
                                </ul>
                            </div>
                    <div class="col-md-8">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover align-middle" id="tableListaProductos">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Producto</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th>SubTotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <h3 id="totalProducto"></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-lg">
                            
                            <div class="card-body text-center">
                                <img class="img-thumbnail rounded-circle" src="<?php echo BASE_URL . 'assets/img/tienda/1.jpeg'; ?>" alt="" width="200">
                                <hr>
                                <p><?php echo $_SESSION['nombreCliente']; ?></p>
                                <p><i class="fas fa-envelope"></i> <?php echo $_SESSION['correoCliente']; ?></p>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Paypal
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div id="paypal-button-container"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Otros
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pendientes-tab-pane" role="tabpanel" aria-labelledby="pendientes-tab" tabindex="0">
                <div class="col-12">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover" id="tblPendientes" style="width: 100%;">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th>#</th>
                                            <th>Monto</th>
                                            <th>Fecha</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="productos-tab-pane" role="tabpanel" aria-labelledby="productos-tab" tabindex="0">
                <div class="col-12">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover" id="tblProductos" style="width: 100%;">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th>#</th>
                                            <th>Producto</th>
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th>Calificación</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="alert alert-danger text-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
            <div class="h3">
                VERIFICA TU CORREO ELECTRONICO
            </div>
        </div>
    <?php } ?>
</div>
<!-- End Content -->

<div id="modalPedido" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Estado del Pedido</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-lg-4 pb-5">
                        <div class="h-100 py-5 services-icon-wap shadow" id="estadoEnviado">
                            <div class="h1 text-util text-center"><i class="fa fa-truck fa-lg"></i></div>
                            <h2 class="h5 mt-4 text-center">Pendiente</h2>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 pb-5">
                        <div class="h-100 py-5 services-icon-wap shadow" id="estadoProceso">
                            <div class="h1 text-util text-center"><i class="fa fa-exchange-alt"></i></div>
                            <h2 class="h5 mt-4 text-center">Proceso</h2>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 pb-5">
                        <div class="h-100 py-5 services-icon-wap shadow" id="estadoCompletado">
                            <div class="h1 text-util text-center"><i class="fa fa-percent"></i></div>
                            <h2 class="h5 mt-4 text-center">Completado</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-borderer table-striped table-hover align-middle" id="tablePedidos" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>SubTotal</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">Tienda-virtual</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        La María
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:010-020-0340">3007200894</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:info@company.com">Naikergomez0123@gmail.com</a>
                    </li>
                    <hr class="text-light border-bottom border-light ">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        Arrollo de piedra
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:010-020-0340">3007200894</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:info@company.com">brayanmiguel@gmail.com</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Producto</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Samsung</a></li>
                    <li><a class="text-decoration-none" href="#">Apple</a></li>
                    <li><a class="text-decoration-none" href="#">Motorola</a></li>
                    <li><a class="text-decoration-none" href="#">Motorola</a></li>
                    <li><a class="text-decoration-none" href="#">Oppo</a></li>
                    <li><a class="text-decoration-none" href="#">Acer</a></li>
                    <li><a class="text-decoration-none" href="#">Lenovo</a></li>
                    <li><a class="text-decoration-none" href="#">Msi</a></li>
                    <li><a class="text-decoration-none" href="#">Hp</a></li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Acerca de nosotros</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="<?php echo BASE_URL .  'principal/nosotros' ?>">Nosotros</a></li>
                    <li><a class="text-decoration-none" href="<?php echo BASE_URL .  'principal/shop' ?>">Tienda</a></li>
                    <li><a class="text-decoration-none" href="<?php echo BASE_URL .  'principal/contact' ?>">Contacto</a></li>
                    <li><a class="text-decoration-none" href="#">Productos para Distribuidores</a></li>
                </ul>
            </div>

        </div>

        <div class="row text-light mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left footer-icons">
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank"
                            href="https://www.facebook.com/profile.php?id=61553377066342">
                            <i class='bx bxl-facebook-circle'></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/naiker.codes/">
                            <i class='bx bxl-instagram'></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/">
                             <i class='bx bxl-twitter' ></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/in/naiker-gomez-a97449293/"><i
                                class="bx bxl-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-auto">
                <label class="sr-only" for="subscribeEmail"></label>
                <div class="input-group mb-2">
                    <input type="text" class="form-control bg-dark border-light" id="subscribeEmail"
                        placeholder="Enviar correo">
                    <div class="input-group-text btn-success text-light">Subscribete</div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light text-center">
                        Copyright &copy; 2024 Tienda virtual 
                        © Developers and Design Vive P&M 2024
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php include_once 'Views/template/footer_principal.php'; ?>

<script type="text/javascript" src="<?php echo BASE_URL . 'assets/DataTables/datatables.min.js'; ?>"></script>

<script src="<?php echo BASE_URL; ?>assets/js/es-ES.js"></script>

<script src="<?php echo BASE_URL . 'assets/js/clientes.js'; ?>"></script>

<!-- End Script -->
</body>

</html>