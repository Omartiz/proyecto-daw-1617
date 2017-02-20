<?php
require_once __DIR__.'/GerenciaViews.php';

switch($_GET['cod']) {

    case "1":
        Vista\Gerencia\GerenciaViews::elegir();
        break;
    case "2":
        \Vista\Gerencia\GerenciaViews::allPartesByDni();
        break;
    case "3":
        \Vista\Gerencia\GerenciaViews::findPartesByDni($_POST);
        break;
    case "4":
        \Vista\Gerencia\GerenciaViews::pintaFiltro($_POST);
        break;
    case "5":
        \Vista\Gerencia\GerenciaViews::findPartesByTrabajadorFechas($_POST);
        break;
    case "6":
        \Vista\Gerencia\GerenciaViews::findPartesByRangoFechas($_POST);
        break;
    case "7":
        \Vista\Gerencia\GerenciaViews::findPartesByEstado($_POST);
        break;
}

?>