<?php require_once BASE_RELATIVE_VIEWS . 'layouts/common/head.php'; ?>
<!--DASHBOARD/CARPETA ADMINISTRADOR-->

<body>
    <div class="admin-contenedor">
        <?php include BASE_RELATIVE_VIEWS . '/layouts/common/menu_admin.php'; ?>
        <div class="admin-menu">
            <div class="admin-header">
                <div>
                    <h1 class="headline">
                     Barberia y Peluqueria Pedro Vargas
                    </h1>
                    <p class="sub-headline">
                        Inicio
                    </p>
                </div>
            </div>
            <div class="admin-contenido">
                <div class="bienvenido">
                    <div>
                        <p class="text">Bienvenido</p>
                        <h2 class="headline">Nombre de usuario</h2>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-12 col-lg-3 my-1">
                        <a href="">
                            <div class="card rojo">
                                <div class="value"> Agregar Cliente <i class="bi bi-person-plus-fill"></i></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-3 my-1">
                        <a href="">
                            <div class="card rojo">
                                <div class="value">Consultar Cliente <i class="bi bi-search"></i></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-3 my-1">
                        <a href="">
                            <div class="card rojo">
                                <div class="value">Facturar Servicio <i class="bi bi-scissors"></i></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-3 my-1">
                        <a href="">
                            <div class="card rojo">
                                <div class="value">Agregar Compra <i class="bi bi-cart4"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
               
        </div>
    </div>
</body>

</html>