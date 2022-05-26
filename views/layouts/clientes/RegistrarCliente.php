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
                        <!--Subtitulo-->
                    </p>
                </div>
            </div>
            <div class="container">
                <form class="row g-3">
                    <div class="col-md-4">
                        <label for="inputEmail4" class="form-label">Numero de Documento</label>
                        <input type="text" class="form-control" id="">
                    </div>

                    <div class="col-md-4">
                        <label for="inputAddress" class="form-label">Nombre </label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Genero</label>
                        <select id="inputState" class="form-select">
                            <option selected>Seleecione...</option>
                            <option>FEMENINO</option>
                            <option>MASCULINO</option>
                            <option>NO ESPECIFICA</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="inputAddress2" class="form-label">Celular</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Correo Electronico</label>
                        <div class="input-group col-6">

                            <input type="text" class="form-control">
                            <span class="input-group-text">@</span>
                            <select id="inputState" class="form-select">
                                <option selected>Seleecione...</option>
                                <option>HOTMAIL.COM</option>
                                <option>GMAIL.COM</option>
                                <option>YAHOO.ES</option>
                                <option>OUTLOOK.COM</option>
                            </select>

                        </div>

                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">Fecha de nacimiento </label>
                        <!-- PARA V.1.1 AGREGAR FECHA DESDE - HASTA -->
                        <input type="date" id="start" class="form-control" name="trip-start" value="fecha actual" min="2015-01-01" max="2022-12-31">
                    </div>

                   
                    
                    <div class="row">
                    <div class="d-grid gap-2 col-6 mx-auto my-4">
                        <!-- <a href="agregarDoc" class="btn btn btn-dark my-2"><i class="bi bi-plus-circle"></i> Añadir Documento</a>
                         --><button type="submit" class="btn btn btn-dark my-2"><i class="bi bi-sd-card-fill"></i> Guardar</button>
                    </div>
                </div>
                </form>




            </div>
        </div>
    </div>
</body>

</html>