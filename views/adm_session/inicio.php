<?php /** @var tglobally\tg_empleado\controllers\controlador_adm_session $controlador */

use config\views;
$url_assets = (new views())->url_assets;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="cont_text_inicio">
                <h1 class="h-side-title page-title page-title-big text-color-primary">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?></h1>
                <h1 class="h-side-title page-title text-color-primary">Da click en la sección que deseas utilizar</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_org_tipo_puesto; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Tipos de Puesto</h4>
                        <h4 class="text_accion">Catologo</h4>
                    </div>
                </a>
            </div>

            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_org_puesto; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Puestos</h4>
                        <h4 class="text_accion">Catologo</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_em_empleado; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Empleados</h4>
                        <h4 class="text_accion">Catologo</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_em_anticipo; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Anticipo</h4>
                        <h4 class="text_accion">Catologo</h4>
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>