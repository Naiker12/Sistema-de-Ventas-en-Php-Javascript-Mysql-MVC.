<?php include_once 'Views/template/header_principal.php'; ?>


<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="assets/img/celular.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>Technology store
                                </b></h1>
                            <p>
                                En <strong>Technology store</strong>
                                nos apasionan los celulares y la tecnología.
                                Somos un equipo de expertos que te ayudará a encontrar el dispositivo
                                perfecto para tus necesidades y presupuesto.
                            </p>
                            <p>
                                <strong>¡Visita nuestra tienda o compra en línea y descubre por qué
                                    <strong>Technology store</strong> es la mejor opción para tus necesidades de telefonía
                                    móvil!</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="assets/img/lato.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1"></h1>
                            <h3 class="h2"></h3>
                            <p>
                                En <strong>Technology store</strong> encontrarás la más amplia selección de celulares de
                                las mejores marcas, como Iphone, Xiami, Samsung, y muchas más.
                            </p>
                            <p>
                                Tenemos celulares para todos los presupuestos y necesidades, desde los últimos
                                modelos de alta gama hasta opciones más económicas y funcionales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="assets/img/tablet.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">¡Ofertas increíbles y la mejor atención!</h1>
                            <p>
                                En <strong>Technology store</strong>siempre encontrarás ofertas increíbles en celulares y
                                accesorios.
                            </p>
                            <p>
                                Además, nuestro equipo de expertos te brindará la mejor atención para que encuentres el
                                dispositivo perfecto para ti.
                            </p>
                            <p>
                                ¡No te pierdas nuestras ofertas y promociones especiales!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->


<!-- Start Categories of The Month -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Descubre las mejores categorías de<strong class="text-success">Technology Store</strong></h1>
            <p>
             En Technology Store, nos dedicamos a brindarte una experiencia de compra excepcional.
            </p>
        </div>
    </div>
    <div class="row">
        <?php foreach ($data['categorias']  as $categoria) { ?>
        <div class="col-12 col-md-2 p-5 mt-3">
            <a href="<?php echo BASE_URL . 'principal/categorias/' . $categoria['id']; ?>"><img
                    src="<?php echo $categoria['imagen'];?>" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3"> <?php  echo $categoria['categoria']; ?></h5>
        </div>
        <?php } ?>
    </div>
</section>
<!-- End Categories of The Month -->


<!-- Start Producto destacado -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1 "><strong class="text-success">Producto destacado</strong></h1>
                <p>
                   Libera tu potencial tecnológico con nuestros gadgets de vanguardia y precios imbatibles.
                </p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data['nuevoProductos'] as $producto) { ?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                        <img src="<?php echo $producto['imagen']; ?>" class="card-img-top"
                            alt="<?php echo $producto['nombre']; ?>">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                            </li>
                            <li class="text-muted text-right"><?php echo MONEDA . ' ' . $producto['precio']; ?></li>
                        </ul>
                        <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>"
                            class="h2 text-decoration-none text-dark"><?php echo $producto['nombre']; ?></a>
                        <p class="card-text">
                            <?php echo  $producto['descripcion']; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Featured Product -->

<!---------------------------------------
     AQUI ESTAMOS LLAMANDO AL FOOTER
----------------------------------------->
<?php include_once 'Views/template/footer_principal.php'; ?>


</body>

</html>