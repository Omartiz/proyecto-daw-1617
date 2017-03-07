<?php
require_once __DIR__.'/AdministracionViews.php';
require_once __DIR__.'/../../Controlador/Administracion/Controlador.php';

use Controlador\Administracion\Controlador;

switch($_GET['cod']) {

    case "1":
        Vista\Administracion\AdministracionViews::elegir();
        break;
    case "2":
        Vista\Administracion\AdministracionViews::allPartesByDni();
        break;
    case "3":
        Vista\Administracion\AdministracionViews::findPartesByDni($_POST);
        break;
    case "4":
        Vista\Administracion\AdministracionViews::editParteLogistica();
        break;
    case "5":
        Vista\Administracion\AdministracionViews::editParteProduccion();
        break;
    case "6":
        Vista\Administracion\AdministracionViews::tipoFiltro($_POST);
        break;
    case "7":
       // Vista\Administracion\AdministracionViews::findPartesByTrabajadorFechas($_POST);
        break;
    case "8":
       //Vista\Administracion\AdministracionViews::findPartesByRangoFechas($_POST);
        break;
    case "9":
       // Vista\Administracion\AdministracionViews::findPartesByEstado($_POST);
        break;
}
?>

