<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace tglobally\tg_acl\controllers;

use gamboamartin\administrador\models\adm_seccion;
use gamboamartin\errores\errores;
use gamboamartin\system\_ctl_base;
use gamboamartin\template_1\html;
use html\adm_accion_html;
use html\adm_menu_html;
use html\adm_seccion_html;
use links\secciones\link_adm_seccion;
use PDO;
use stdClass;


class controlador_adm_seccion extends \gamboamartin\acl\controllers\controlador_adm_seccion {

    public string $link_adm_accion_alta_bd = '';

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){
        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Secciones';

    }

}
