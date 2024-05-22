<?php include_once 'Views/template/header_principal.php'; ?>

<!-- Start Content -->
<div class="container py-5">
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
            aria-label="Warning:">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
        <div class="h3">
            <?php echo ucfirst($data['title']); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body shadow-lg">
                    <div class="table-responsive">
                        <table class="table table-borderer table-striped table-hover align-middle" id="tableListaDeseo" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
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
</div>
<!-- End Content -->

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

<script src="<?php echo BASE_URL . 'assets/js/modulos/listaDeseo.js';?>"></script>

</body>

</html>