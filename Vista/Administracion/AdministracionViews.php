<?php
namespace Vista\Administracion;

use \Controlador\Administracion;
use Controlador\Login\Controlador;
use Modelo\BD;

require_once __DIR__ . "/../Plantilla/Views.php";
require_once __DIR__ . "/../../Controlador/Administracion/Controlador.php";
require_once __DIR__.'/../../Modelo/BD/GenericoBD.php';
require_once __DIR__.'/../../Modelo/BD/CalendarioBD.php';
require_once __DIR__.'/../../Modelo/BD/CentroBD.php';

abstract class AdministracionViews extends \Vista\Plantilla\Views
{

/*****************************************************/
/* MENU */
/*****************************************************/
    public static function elegir(){

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        ?>

        <div class="table-responsive col-md-offset-1 col-md-10">
             <table class="table table-bordered">
                 <tr>
                        <th><h5>NOMBRE DE TABLA</h5></th>
                        <th colspan="3"><h5>ACCIONES</h5></th>
                 </tr>
                 <tr>
                        <td>TRABAJADOR</td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/insertTrabajador.php">Añadir</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/deleteTrabajador.php">Eliminar</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/updateFoto.php">Editar Foto</a></td>
                 </tr>
                 <tr>
                        <td>EMPRESA</td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/insertEmpresa.php">Añadir</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/deleteEmpresa.php">Eliminar</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/updateEmpresa.php">Editar</a></td>
                 </tr>
                 <tr>
                        <td>VEHICULO</td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/insertVehiculo.php">Añadir</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/deleteVehiculo.php">Eliminar</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/updateVehiculo.php">Editar</a></td>
                 </tr>
                 <tr>
                        <td>HORAS / CONVENIO</td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/insertHorasConvenio.php">Añadir</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/deleteHorasConvenio.php">Eliminar</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/updateHorasConvenio.php">Editar</a></td>
                 </tr>
                 <tr>
                        <td>CENTROS DE TRABAJO DE CADA EMPRESA</td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/insertCentro.php">Añadir</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/deleteCentro.php">Eliminar</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/updateCentro.php">Editar</a></td>
                 </tr>
                 <tr>
                        <td>TIPO FRANJA / PRECIO HORA</td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/insertTipoFranja.php">Añadir</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/deleteTipoFranja.php">Eliminar</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/updateTipoFranja.php">Editar</a></td>
                 </tr>
                 <tr>
                        <td>FRANJA HORARIA</td>
                        <td><a href="<?php echo self::getUrlRaiz() ?>/Vista/Administracion/insertHorario.php">Añadir</a></td>
                        <td><a href="<?php echo self::getUrlRaiz() ?>/Vista/Administracion/deleteHorario.php">Eliminar</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/updateHorario.php">Editar</a></td>
                 </tr>
                 <tr>
                        <td>HORARIO TRABAJADOR</td>
                        <td><a href="<?php echo self::getUrlRaiz() ?>/Vista/Administracion/insertHorarioTrabajador.php">Añadir</a></td>
                        <td><a href="<?php echo self::getUrlRaiz() ?>/Vista/Administracion/deleteHorarioTrabajador.php">Eliminar</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/updateHorarioTrabajador.php">Editar</a></td>
                 </tr>
                 <tr>
                        <td>LOGIN</td>
                        <td>Se añade al generar el trabajador</td>
                        <td>Se elimina con el trabajador</td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/updatePassword.php">Editar</a></td>
                 </tr>
                 <tr>
                        <td>SUBTAREA DE PRODUCCIÓN</td>
                        <td><a href="<?php echo self::getUrlRaiz() ?>/Vista/Administracion/insertTarea.php">Añadir</a></td>
                        <td><a href="<?php echo self::getUrlRaiz() ?>/Vista/Administracion/deleteTarea.php">Eliminar</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/updateTarea.php">Editar</a></td>
                 </tr>
                 <tr>
                        <td>GRUPOS DE TAREAS DE PRODUCCIÓN</td>
                        <td><a href="<?php echo self::getUrlRaiz() ?>/Vista/Administracion/insertTipoTarea.php">Añadir</a></td>
                        <td><a href="<?php echo self::getUrlRaiz() ?>/Vista/Administracion/deleteTipoTarea.php">Eliminar</a></td>
                        <td><a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/updateTipoTarea.php">Editar</a></td>
                 </tr>
            </table>
        </div>

        <?php
        require_once __DIR__ . "/../Plantilla/pie.php";
    }

/*****************************************************/
/* TRABAJADOR */
/*****************************************************/

        public static function insertTrabajador()
        {

            parent::setOn(true);
            parent::setRoot(true);

            require_once __DIR__ . "/../Plantilla/cabecera.php";
            //<?php echo parent::getUrlRaiz()
            $empresas = \Controlador\Administracion\Controlador::getAllEmpresas();
            $perfiles = \Controlador\Administracion\Controlador::getAllPerfiles();

        ?>
        <div class="container ins">
            <form name="insertTrabajador" class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo self::getUrlRaiz()?>/Controlador/Administracion/Router.php">
                <fieldset>
                    <legend>Añadir Trabajador</legend>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">DNI:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="dni" maxlength="9">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Nombre:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Apellido 1:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="apellido1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Apellido 2:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="apellido2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Foto:</label>
                        <div class="col-sm-4 col-md-3">
                            <input name="foto" type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Teléfono:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="telefono">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Empresa:</label>
                        <div class="col-sm-4 col-md-3">
                            <select class="form-control" name="empresa">
                                <?php
                                foreach($empresas as $empresa){

                                    ?>
                                    <option value="<?php echo $empresa->getId(); ?>"><?php echo $empresa->getNombre(); ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Centro:</label>
                        <div class="col-sm-4 col-md-3">
                            <select class="form-control" name="centro">
                                <?php
                                foreach($empresas as $empresa) {
                                    foreach($empresa->getCentros() as $centro){
                                        ?>
                                        <option value="<?php echo $centro->getId(); ?>"><?php echo $centro->getNombre(); ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Perfil:</label>
                        <div class="col-sm-4 col-md-3">
                            <select class="form-control" name="perfil">
                                <?php
                                for($x = 0; $x < sizeof($perfiles); $x++) {
                                    ?>
                                    <option value="<?php echo $perfiles[$x][1] ?>"><?php echo $perfiles[$x][1]  ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-2">
                            <input class="btn btn-primary" type="submit" name="addTrabajador" value="Añadir">
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <?php

            require_once __DIR__ . "/../Plantilla/pie.php";

        }

    public static function deleteTrabajador(){

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";

        $trabajadores = Administracion\Controlador::getAllTrabajadores();
        $trabajadorSession = unserialize($_SESSION['trabajador']);

        //problema en funcion getALl Trabajadores
        ?>
        <h2 class="page-header">Eliminar Trabajadores:</h2>
        <div class="table-responsive col-md-offset-1 col-md-10">
            <table class="table table-bordered">
                <tr>
                    <th>DNI</th>
                    <th>NOMBRE</th>
                    <th>APELLIDOS</th>
                    <th>TELEFONO</th>
                    <th>CENTRO</th>
                    <th>PERFIL</th>
                    <th>ACCIÓN</th>
                </tr>
                <?php
                foreach($trabajadores as $trabajador) {
                    if ($trabajador->getDni() != $trabajadorSession->getDni()) {
                        ?>

                        <tr>
                            <td><?php echo $trabajador->getDni(); ?></td>
                            <td><?php echo $trabajador->getNombre(); ?></td>
                            <td><?php echo $trabajador->getApellido1() . " " . $trabajador->getApellido2(); ?></td>
                            <td><?php echo $trabajador->getTelefono(); ?></td>
                            <td><?php echo $trabajador->getCentro()->getNombre(); ?></td>
                            <td><?php echo substr(strrchr(get_class($trabajador), "\\"), 1); ?></td>
                            <td>
                                <form name="deleteTrabajador" method="post"
                                      action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                    <button type="submit" name="eliminarTrabajador" value="Eliminar"
                                            style="border: none; background: none;">
                                        <span
                                        class="glyphicon glyphicon-remove"
                                        style="color:red; font-size: 1.5em">
                                        </span>
                                    </button>
                                    <input type="hidden" name="dni" value="<?php echo $trabajador->getDni(); ?>">
                                </form>
                            </td>
                        </tr>

                        <?php
                    }
                }
            ?>

            </table>
            </div>
            <form name="deleteTrabajador" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                <div class="col-sm-4 col-md-3">
                     <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>

            <?php

        require_once __DIR__ . "/../Plantilla/pie.php";
    }

/*****************************************************/
/* EMPRESA */
/*****************************************************/

    public static function insertEmpresa()
    {

        parent::setOn(true);
        parent::setRoot(true);

    require_once __DIR__ . "/../Plantilla/cabecera.php";
    ?>
    <div class="container ins">
        <form class="form-horizontal" name="insertTrabajador" method="post" action="<?php echo self::getUrlRaiz()?>/Controlador/Administracion/Router.php"><br/>
            <fieldset>
                <legend>Añadir Empresa</legend>
                <div class="form-group">
                    <label class="control-label col-sm-2 col-md-2">Nombre:</label>
                    <div class="col-sm-4 col-md-3">
                        <input class="form-control" type="text" name="nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 col-md-2">NIF:</label>
                    <div class="col-sm-4 col-md-3">
                        <input class="form-control" type="text" name="nif" maxlength="9">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-2">
                        <input class="btn btn-primary" type="submit" name="addEmpresa" value="Añadir">
                    </div>
                        <div class="col-sm-4 col-md-3">
                            <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                        </div>
                </div>
            </fieldset>
        </form>
    </div>
    <?php
    require_once __DIR__ . "/../Plantilla/pie.php";
    }

    public static function deleteEmpresa()
    {
        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";

        $empresas = Administracion\Controlador::getAllEmpresas();

        if(is_null($empresas))
        {
            echo "no hay empresas";
        }
        else
        {
            ?>
            <h2 class="page-header">Eliminar Empresas:</h2>
            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>EMPRESA</th>
                        <th>NIF</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach ($empresas as $empresa) {
                        ?>
                        <tr>
                            <td><?php echo $empresa->getNombre(); ?></td>
                            <td><?php echo $empresa->getNif(); ?></td>
                            <td>
                                <form name="deleteEmpresa" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                    <button type="submit" name="eliminarEmpresa" value="Eliminar" style="border: none; background: none;">
                                            <span class="glyphicon glyphicon-remove" style="color:red; font-size: 1.5em">
                                            </span>
                                    </button>
                                    <input type="hidden" name="id" value="<?php echo $empresa->getId(); ?>">
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <form name="deleteEmpresa" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">

                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>
            <?php
        }
        require_once __DIR__ . "/../Plantilla/pie.php";
    }

    public static function updateEmpresa(){

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $empresas = Administracion\Controlador::getAllEmpresas();

        if(is_null($empresas)){
            echo "No hay empresas";
        }
        else
        {
            ?>
            <h2 class="page-header">Actualizar nombre Empresa:</h2>
            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>NIF</th>
                        <th>NOMBRE</th>
                        <th>NUEVO NOMBRE</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach ($empresas as $empresa) {
                        ?>
                        <tr>
                            <td><?php echo $empresa->getId(); ?></td>
                            <td><?php echo $empresa->getNif(); ?></td>
                            <td><?php echo $empresa->getNombre(); ?></td>

                            <form name="cambiaNombre" method="post"
                                  action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                <td><input type="text" name="nuevo" size="50" placeholder="denominación de empresa"></td>
                                <td>
                                    <button type="submit" name="updateEmpresa" value="Editar"
                                            style="border: none; background: none;"><span
                                            class="glyphicon glyphicon-edit"
                                            style="color:blue; font-size: 1.5em"></span></button>
                                    <input type="hidden" name="id" value="<?php echo $empresa->getId(); ?>">
                                </td>
                            </form>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <form name="deleteDescripcion" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>
            <?php
        }
        require_once __DIR__ . "/../Plantilla/pie.php";

   }

/*****************************************************/
/* CENTRO */
/*****************************************************/

        public static function insertCentro()
        {

            parent::setOn(true);
            parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $empresas = \Modelo\BD\EmpresaBD::getAll();
        //$centros = \Modelo\BD\CentroBD::getAll();
        ?>
        <div class="container ins">
            <form class="form-horizontal" name="insertCentro" method="post" action="<?php echo self::getUrlRaiz()?>/Controlador/Administracion/Router.php"><br/>
                <fieldset>
                    <legend>Añadir Centro:</legend>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Nombre:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Localización:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="localizacion">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Empresa:</label>
                        <div class="col-sm-4 col-md-3">
                            <select class="form-control" name="empresa">
                                <?php
                                foreach($empresas as $empresa)
                                {
                                    ?>
                                    <option value="<?php echo $empresa->getId(); ?>"><?php echo $empresa->getNombre(); ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-2">
                            <input class="btn btn-primary" type="submit" name="addCentro" value="Añadir">
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <?php
        require_once __DIR__ . "/../Plantilla/pie.php";
    }

    public static function deleteCentro()
    {

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $centros = \Modelo\BD\CentroBD::getAll();
        if (is_null($centros)) {
            echo "No hay centros";
        } else {
            ?>
            <h2 class="page-header">Eliminar Centros:</h2>
            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>CENTRO</th>
                        <th>LOCALIZACIÓN</th>
                        <th>EMPRESA</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach ($centros as $centro) {
                        ?>
                        <form name="deleteCentro" method="post"
                              action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                            <tr>
                                <td><?php echo $centro->getNombre(); ?></td>
                                <td><?php echo $centro->getLocalizacion(); ?></td>
                                <td><?php echo $centro->getEmpresa()->getNombre(); ?></td>
                                <td>
                                    <button type="submit" name="eliminarCentro" value="Eliminar"
                                            style="border: none; background: none;"><span
                                            class="glyphicon glyphicon-remove"
                                            style="color:red; font-size: 1.5em"></span></button>
                                </td>
                            </tr>
                            <input type="hidden" name="id" value="<?php echo $centro->getId(); ?>">
                        </form>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <form name="deleteCentro" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">

                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>
            <?php
        }
        require_once __DIR__ . "/../Plantilla/pie.php";
    }

    public static function updateCentro()
    {

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $centros = Administracion\Controlador::getAllCentros();

        if(is_null($centros))
        {
            echo "no hay centros";
        }
        else
        {
            ?>

            <h2 class="page-header">Actualizar dirección de Centros  de trabajo:</h2>

            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>NOMBRE</th>
                        <th>LOCALIZACIÓN</th>
                        <th>NUEVA LOCALIZACIÓN</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach ($centros as $centro)
                    {
                    ?>

                    <tr>
                        <td><?php echo $centro->getNombre(); ?></td>
                        <td><?php echo $centro->getLocalizacion(); ?></td>
                        <form name="updateCentro" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                            <td>
                                    <input type="text" name="nuevo" size="50" placeholder="dirección Centro">
                                    <input type="hidden" name="id" value="<?php echo $centro->getId(); ?>">
                            </td>
                            <td>
                                    <button type="submit" name="updateCentro" value="Editar"
                                        style="border: none; background: none;">
                                        <span
                                        class="glyphicon glyphicon-edit"
                                        style="color:blue; font-size: 1.5em">
                                        </span>
                                    </button>
                                    <input type="hidden" name="id" value="<?php echo $centro->getId(); ?>">
                            </td>
                        </form>
                    </tr>

                    <?php
                    }
                    ?>

                </table>
            </div>

            <form name="deleteEstado" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">

                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>

        <?php
        }
        require_once __DIR__ . "/../Plantilla/pie.php";
    }


/*****************************************************/
/* ESTADO */
/*****************************************************/
        public static function insertEstado()
        {
            parent::setOn(true);
            parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        ?>
        <div class="container ins">
            <form class="form-horizontal" name="insertTrabajador" method="post" action="<?php echo self::getUrlRaiz()?>/Controlador/Administracion/Router.php"><br/>
                <fieldset>
                    <legend>Añadir Estado</legend>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Nombre:</label>
                        <div class="col-sm-4 col-md-3">
                           <input class="form-control" type="text" name="tipo">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-2">
                            <input class="btn btn-primary" type="submit" name="addEstado" value="Añadir">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <?php
        require_once __DIR__ . "/../Plantilla/pie.php";
    }

    public static function deleteEstado(){

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $estados = Administracion\Controlador::getAllEstados();
        ?>
        <h2 class="page-header">Eliminar Estados:</h2>
        <div class="table-responsive col-md-offset-1 col-md-10">
            <table class="table table-bordered">
                    <tr>
                        <th>ESTADO</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach($estados as $estado) {
                        ?>
                            <tr>
                                <td><?php echo $estado->getTipo(); ?></td>
                                <td>
                                    <form name="deleteEstado" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                        <input type="submit" name="eliminarEstado" value="Eliminar">
                                        <input type="hidden" name="id" value="<?php echo $estado->getId(); ?>">
                                    </form>
                                </td>
                            </tr>
                        <?php
                    }
                    ?>
            </table>
        </div>
        <?php
        require_once __DIR__ . "/../Plantilla/pie.php";

    }

/*****************************************************/
/* VEHICULO */
/*****************************************************/

    public static function insertVehiculo()
    {

        parent::setOn(true);
        parent::setRoot(true);

        $centros = Administracion\Controlador::getAllCentros();
        require_once __DIR__ . "/../Plantilla/cabecera.php";
        ?>
        <div class="container ins">
            <form class="form-horizontal" name="insertTrabajador" method="post"
                  action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php"><br/>
                <fieldset>
                    <legend>Añadir Vehiculo</legend>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Centro:</label>
                        <div class="col-sm-4 col-md-3">
                            <select class="form-control" name="centro">
                                <?php
                                foreach ($centros as $indice => $valor) {
                                    ?>
                                    <option
                                        value="<?php echo $valor->getId() ?>"><?php echo $valor->getNombre() ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Matrícula:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="matricula">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Marca:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="marca">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-2">
                            <input class="btn btn-primary" type="submit" value="Añadir" name="addVehiculo">
                        </div>
                            <div class="col-sm-4 col-md-3">
                                <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                            </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <?php

    require_once __DIR__ . "/../Plantilla/pie.php";
    }

    public static function deleteVehiculo()
    {

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $vehiculos = Administracion\Controlador::getAllVehiculos();
            if(is_null($vehiculos)){
                echo "No hay vehiculos";
            }else {
                ?>
                <h2 class="page-header">Eliminar Vehículos:</h2>
                <div class="table-responsive col-md-offset-1 col-md-10">
                    <table class="table table-bordered">
                        <tr>
                            <th>MATRICULA</th>
                            <th>MARCA</th>
                            <th>CENTRO</th>
                            <th>ACCIÓN</th>
                        </tr>
                        <?php
                        foreach ($vehiculos as $vehiculo) {
                            $centro=BD\CentroBD::getCentrosById($vehiculo->getCentro());
                            ?>
                            <tr>
                                <td><?php echo $vehiculo->getMatricula(); ?></td>
                                <td><?php echo $vehiculo->getMarca(); ?></td>
                                <td><?php echo $centro->getNombre(); ?></td>
                                <td>
                                    <form name="deleteEstado" method="post"
                                          action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                        <button class="btn btn-primary" type="submit" name="eliminarVehiculo"
                                                value="Eliminar" style="border: none; background: none;"><span
                                                class="glyphicon glyphicon-remove"
                                                style="color:red; font-size: 1.5em"></span></button>
                                        <input type="hidden" name="id" value="<?php echo $vehiculo->getId(); ?>">
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <form name="deleteEstado" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">

                    <div class="col-sm-4 col-md-3">
                        <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                    </div>
                </form>
                <?php
            }
        require_once __DIR__ . "/../Plantilla/pie.php";

    }

     public static function updateVehiculo(){

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $vehiculos = Administracion\Controlador::getAllVehiculos();
        $centros = Administracion\Controlador::getAllCentros();

        if(is_null($vehiculos))
        {
            echo "No hay vehiculos";
        }
        else
        {
            ?>
            <h2 class="page-header">Actualizar vinculación de Vehiculo a centro de trabajo:</h2>
            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>MATRICULA</th>
                        <th>MARCA</th>
                        <th>CENTRO</th>
                        <th>NUEVO CENTRO</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach ($vehiculos as $vehiculo)
                    {
                        $centro=BD\CentroBD::getCentrosById($vehiculo->getCentro());

                        ?>
                        <tr>
                            <td><?php echo $vehiculo->getId(); ?></td>
                            <td><?php echo $vehiculo->getMatricula(); ?></td>
                            <td><?php echo $vehiculo->getMarca(); ?></td>
                            <td><?php echo $centro->getNombre(); ?></td>

                            <form name="cambiaCentro" method="post"
                                  action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                <td>
                                    <select id="nuevo" name="nuevo">
                                        <?php
                                        foreach ($centros as $c)
                                        {
                                        ?>
                                            <option value="<?php echo $c->getId() ?>"><?php echo $c->getNombre() ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td>
                                    <button type="submit" name="updateVehiculo" value="Editar"
                                            style="border: none; background: none;"><span
                                            class="glyphicon glyphicon-edit"
                                            style="color:blue; font-size: 1.5em"></span></button>
                                    <input type="hidden" name="id" value="<?php echo $vehiculo->getId(); ?>">
                                </td>
                            </form>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <form name="deleteDescripcion" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>
            <?php
        }
        require_once __DIR__ . "/../Plantilla/pie.php";

   }

/*****************************************************/
/* HORAS CONVENIO */
/*****************************************************/

    public static function insertHorasConvenio(){

            parent::setOn(true);
            parent::setRoot(true);

        $centros=Administracion\Controlador::getAllCentros();

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        ?>
        <div class="ins">
            <form class="form-horizontal" name="insertTrabajador" method="post" action="<?php echo self::getUrlRaiz()?>/Controlador/Administracion/Router.php"><br/>
                <fieldset>
                    <legend>Añadir Convenio</legend>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Centro:</label>
                        <div class="col-sm-4 col-md-3">
                            <select class="form-control" name="centro">
                                <?php
                                foreach($centros as $indice => $valor){
                                    ?>
                                    <option value="<?php echo $valor->getId()?>"><?php echo $valor->getNombre()?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Número de horas al año:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="number" name="horasAnual">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Denominación:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="denominacion">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-2">
                            <input class="btn btn-primary" type="submit" value="Añadir" name="addHorasConvenio">
                        </div>
                            <div class="col-sm-4 col-md-3">
                                <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                            </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <?php
        require_once __DIR__ . "/../Plantilla/pie.php";
    }

    public static function deleteHorasConvenio()
    {

            parent::setOn(true);
            parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $horasconvenio = Administracion\Controlador::getAllHorasConvenio();
            if(is_null($horasconvenio)){
                echo "no hay horas convenio";
            }else {
                ?>
                <h2 class="page-header">Eliminar Convenios:</h2>
                <div class="table-responsive col-md-offset-1 col-md-10">
                    <table class="table table-bordered">
                        <tr>
                            <th>CENTRO</th>
                            <th>DENOMINACION</th>
                            <th>HORAS</th>
                            <th>ACCIÓN</th>
                        </tr>
                        <?php
                        foreach ($horasconvenio as $horaconvenio) {
                            ?>
                            <tr>
                                <td><?php echo $horaconvenio->getCentro()->getNombre(); ?></td>
                                <td><?php echo $horaconvenio->getDenominacion() ?></td>
                                <td><?php echo $horaconvenio->getHorasAnual(); ?></td>
                                <td>
                                    <form name="deleteEstado" method="post"
                                          action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                        <button type="submit" name="eliminarHorasConvenio" value="Eliminar"
                                                style="border: none; background: none;"><span
                                                class="glyphicon glyphicon-remove"
                                                style="color:red; font-size: 1.5em"></span></button>
                                        <input type="hidden" name="id" value="<?php echo $horaconvenio->getId(); ?>">
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <form name="deleteEstado" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">

                    <div class="col-sm-4 col-md-3">
                        <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                    </div>
                </form>
                <?php
            }
        require_once __DIR__ . "/../Plantilla/pie.php";

    }

    public static function updateHorasConvenio()
    {
        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $horas = Administracion\Controlador::getAllHorasConvenio();
        if(is_null($horas))
        {
            echo "no hay horas";
        }
        else
        {
            ?>

            <h2 class="page-header">Actualizar horas Convenios:</h2>

            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>NOMBRE</th>
                        <th>HORAS</th>
                        <th>CENTRO</th>
                        <th>NUEVAS HORAS</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach ($horas as $hora)
                    {
                    ?>

                    <tr>
                        <td><?php echo $hora->getDenominacion(); ?></td>
                        <td><?php echo $hora->getHorasAnual(); ?></td>
                        <td><?php echo $hora->getCentro()->getNombre(); ?></td>
                        <form name="updateH_Convenio" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                            <td>
                                    <input type="text" name="nuevo" size="5" placeholder="1200">
                                    <input type="hidden" name="id" value="<?php echo $hora->getId(); ?>">
                            </td>
                            <td>
                                    <button type="submit" name="updateHorasConvenio" value="Editar"
                                        style="border: none; background: none;">
                                        <span
                                        class="glyphicon glyphicon-edit"
                                        style="color:blue; font-size: 1.5em">
                                        </span>
                                    </button>
                                    <input type="hidden" name="id" value="<?php echo $hora->getId(); ?>">
                            </td>
                        </form>
                    </tr>

                    <?php
                    }
                    ?>

                </table>
            </div>

            <form name="deleteEstado" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">

                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>

        <?php
        }
        require_once __DIR__ . "/../Plantilla/pie.php";
    }

/*****************************************************/
/* TIPO FRANJA */
/*****************************************************/

    public static function updateTipoFranja(){

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $tipos = Administracion\Controlador::getAllTiposFranjas();
        if(is_null($tipos)){
            echo "No hay tipos de franja";
        }else {
            ?>
            <h2 class="page-header">Actualizar coste de por Franja horaria:</h2>
            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>TIPO</th>
                        <th>PRECIO</th>
                        <th>NUEVO PRECIO</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach ($tipos as $tipo) {
                        ?>
                        <tr>
                            <td><?php echo $tipo->getTipo(); ?></td>
                            <td><?php echo $tipo->getPrecio(); ?></td>
                            <form name="deleteEstado" method="post"
                                  action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                <td><input type="text" name="nuevo" size="5" placeholder="00.00"></td>
                                <td>
                                    <button type="submit" name="updateTipoFranja" value="Editar"
                                            style="border: none; background: none;"><span
                                            class="glyphicon glyphicon-edit"
                                            style="color:blue; font-size: 1.5em"></span></button>
                                    <input type="hidden" name="id" value="<?php echo $tipo->getId(); ?>">
                                </td>
                            </form>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <form name="deleteEstado" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">

                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>
            <?php
        }
        require_once __DIR__ . "/../Plantilla/pie.php";

    }

    public static function insertTipoFranja(){

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        ?>
        <div class="container">
            <form class="form-horizontal" name="insertTipoFranja" method="post" action="<?php echo self::getUrlRaiz()?>/Controlador/Administracion/Router.php"><br/>
                <fieldset>
                    <legend>Añadir Tipo Horario:</legend>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Tipo de Horario:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="tipo" placeholder="Mañana, tarde, noche...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Precio:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="precio">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-2">
                            <input class="btn btn-primary" type="submit" value="Añadir" name="addTipoFranja">
                        </div>
                            <div class="col-sm-4 col-md-3">
                                <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                            </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <?php
        require_once __DIR__ . "/../Plantilla/pie.php";

    }

    public static function deleteTipoFranja(){

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $tipos = Administracion\Controlador::getAllTiposFranjas();
        if(is_null($tipos)){
            echo "no hay tipos";
        }else {
            ?>
            <h2 class="page-header">Eliminar Tipo Franja</h2>
            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>TIPO</th>
                        <th>PRECIO</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach ($tipos as $tipo) {
                        ?>
                        <tr>
                            <td><?php echo $tipo->getTipo(); ?></td>
                            <td><?php echo $tipo->getPrecio(); ?></td>
                            <td>
                                <form name="deleteTipoFranja" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                    <button class="btn btn-primary" type="submit" name="deleteTipoFranja"
                                            value="Eliminar" style="border: none; background: none;"><span
                                            class="glyphicon glyphicon-remove"
                                            style="color:red; font-size: 1.5em"></span></button>
                                    <input type="hidden" name="id" value="<?php echo $tipo->getId(); ?>">
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <form name="deleteTipoFranja" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">

                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>
            <?php
        }
        require_once __DIR__ . "/../Plantilla/pie.php";

    }

/*****************************************************/
/* PASSWORD */
/*****************************************************/

    public static function updatePassword()
    {

        parent::setOn(true);
        parent::setRoot(true);

        $trabajadores = Administracion\Controlador::getAllTrabajadores();

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        if(is_null($trabajadores))
        {
            echo "no hay trabajadores";
        }
        else
        {
            ?>

            <h2 class="page-header">Modificación Password de Trabajador:</h2>
            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>DNI</th>
                        <th>Nueva contraseña</th>
                        <th>Acción</th>
                    </tr>
                    <form name="updatePassword" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                        <tr>
                            <td>
                                <select class="form-control" name="trabajador">
                                    <?php foreach ($trabajadores as $trabajador) {
                                        echo "<option value='" . $trabajador->getDni() . "'>" . $trabajador->getDni() . "</option>";
                                    } ?>
                                </select>
                            </td>
                            <td><input class="form-control" type="password" name="password"/></td>
                            <td>
                                <button type="submit" name="updatePassword" value="Cambiar"
                                        style="border: none; background: none"><span class="glyphicon glyphicon-edit"
                                                                                     style="color: blue; font-size: 1.5em"></span>
                                </button>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
            <form name="updatePassword" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>

            <?php

            require_once __DIR__ . "/../Plantilla/pie.php";
            require_once __DIR__ . "/../Plantilla/cabecera.php";
            $horas = Administracion\Controlador::getAllHorasConvenio();
            ?>

            <table>
                <tr>
                    <th>NOMBRE</th>
                    <th>HORAS</th>
                    <th>NUEVO PRECIO</th>
                    <th>CENTRO</th>
                    <th>ACCIÓN</th>
                </tr>
                <?php
                foreach ($horas as $hora) {
                    ?>
                    <form name="udtadeConvenio" method="post"
                          action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                        <tr>
                            <td><?php echo $hora->getDenominacion(); ?></td>
                            <td><?php echo $hora->getHorasAnual(); ?></td>
                            <td><?php echo $hora->getCentro()->getNombre(); ?></td>
                            <td><input type="text" name="nuevo" size="5" placeholder="1200"></td>
                            <td><input type="submit" name="updateHorasConvenio" value="Editar"></td>
                        </tr>
                        <input type="hidden" name="id" value="<?php echo $hora->getId(); ?>">
                    </form>
                    <?php
                }
                ?>
            </table>
            <?php
        }
        require_once __DIR__ . "/../Plantilla/pie.php";

    }

/*****************************************************/
/* HORARIO */
/*****************************************************/

        public static function insertarHorario()
        {
            parent::setOn(true);
            parent::setRoot(true);

            require_once __DIR__ . "/../Plantilla/cabecera.php";
            $franjas = Administracion\Controlador::getAllFranjas();

            ?>
            <form class="form-horizontal" name="insertarFranja" method="post"
                  action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                <fieldset>
                    <legend>Añadir Horario:</legend>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Nombre horario:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="horario">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Hora inicio: </label>
                        <div class="col-sm-4 col-md-3">
                            <select class="form-control" name="horaInicio">
                                <?php
                                foreach ($franjas as $valor)
                                {
                                    ?>
                                    <option value="<?php echo $valor->getId() ?>"><?php echo $valor->getHoraInicio() ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Hora fin: </label>
                        <div class="col-sm-4 col-md-3">
                            <select class="form-control" name="horaFin">
                                <?php
                                foreach ($franjas as $valor)
                                {
                                    ?>
                                    <option value="<?php echo $valor->getId() ?>"><?php echo $valor->getHoraFin() ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-2">
                            <input class="btn btn-primary" type="submit" value="Añadir" name="addHorario">
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                        </div>
                    </div>
                </fieldset>
            </form>
            <?php

            require_once __DIR__ . "/../Plantilla/pie.php";
        }

        public static function deleteHorario()
        {
            parent::setOn(true);
            parent::setRoot(true);

            require_once __DIR__ . "/../Plantilla/cabecera.php";

            $horarios = Administracion\Controlador::getAllHorarios();

            if(is_null($horarios))
            {
                echo "No hay horarios";
            }
            else
            {
                ?>
                <h2 class="page-header">Eliminar Horario</h2>
                <div class="table-responsive col-md-offset-1 col-md-10">
                    <table class="table table-bordered">
                        <tr>
                            <th>HORARIO</th>
                            <th>ACCIÓN</th>
                        </tr>
                        <?php
                        foreach ($horarios as $horario) {
                            ?>
                            <form name="deleteHorario" method="post"
                                  action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                <tr>
                                    <td><?php echo $horario->getTipo() ?></td>


                                        <td>
                                            <form name="deleteHorario" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                                <button class="btn btn-primary" type="submit" name="eliminarHorario"
                                                        value="Eliminar" style="border: none; background: none;"><span
                                                        class="glyphicon glyphicon-remove"
                                                        style="color:red; font-size: 1.5em"></span></button>
                                                <input type="hidden" name="id" value="<?php echo $horario->getId(); ?>">
                                            </form>
                                        </td>

                                </tr>
                                <input type="hidden" name="id" value="<?php echo $horario->getId(); ?>">
                            </form>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <form name="deleteHorario" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">

                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>
                <?php
            }
            require_once __DIR__ . "/../Plantilla/pie.php";
        }

        public static function updateHorario(){

        parent::setOn(true);
        parent::setRoot(true);

        $horarios = Administracion\Controlador::getAllHorarios();

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        if(is_null($horarios))
        {
            echo "no hay horarios";
        }
        else
         {
            ?>
            <h2 class="page-header">Actualizar denominación de Tipo de Tarea:</h2>
            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>TIPO</th>
                        <th>NUEVO TIPO</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach ($horarios as $horario) {
                        ?>
                        <tr>
                            <td><?php echo $horario->getId(); ?></td>
                            <td><?php echo $horario->getTipo(); ?></td>
                            <form name="cambiaTipo" method="post"
                                  action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                <td><input type="text" name="nuevo" size="50" placeholder="denominación de tipo"></td>
                                <td>
                                    <button type="submit" name="updateHorario" value="Editar"
                                            style="border: none; background: none;"><span
                                            class="glyphicon glyphicon-edit"
                                            style="color:blue; font-size: 1.5em"></span></button>
                                    <input type="hidden" name="id" value="<?php echo $horario->getId(); ?>">
                                </td>
                            </form>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <form name="deleteHorario" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>
            <?php
        }
            require_once __DIR__ . "/../Plantilla/pie.php";

    }

/*****************************************************/
/* HORARIO TRABAJADOR */
/*****************************************************/

        public static function insertHorarioTrabajador()
        {
            parent::setOn(true);
            parent::setRoot(true);

            require_once __DIR__ . "/../Plantilla/cabecera.php";
            ?>
            <script src="<?php echo parent::getUrlRaiz() ?>/Vista/Administracion/funciones.js"></script>
            <?php
            $trabajadores = Administracion\Controlador::getAllTrabajadores();
            $horarios = Administracion\Controlador::getAllHorarios();
            ?>

            <form class="form-horizontal" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                <fieldset>
                    <legend>Añadir Horario Trabajador:</legend>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Trabajador: </label>
                        <div class="col-sm-4 col-md-3">
                            <select class="form-control" name="trabajador" id="trabajador">
                                <option value="">Selecciona...</option>
                                <?php
                                foreach ($trabajadores as $trabajador)
                                {
                                    ?>
                                    <option value="<?php echo $trabajador->getDni() ?>"><?php echo $trabajador->getDni() . " -- " . $trabajador->getNombre() ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Semana: </label>
                        <div class="col-sm-4 col-md-3">
                            <select class="form-control" name="trabajador" id="trabajador">
                                <option value="">Selecciona...</option>
                                <?php
                                   for($w=1;$w<=52;$w++)
                                   {
                                   ?>
                                       <option value="<?php echo $w ?>"><?php echo $w ?></option>
                                   <?php
                                   }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Horario: </label>
                        <div class="col-sm-4 col-md-3">
                            <select class="form-control" name="horario">
                                <?php
                                foreach ($horarios as $horario) {
                                    ?>
                                    <option value="<?php echo $horario->getId() ?>"><?php echo $horario->getTipo() ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-2">
                            <input class="btn btn-primary" type="submit" value="Añadir" name="añadirHorarioTrabajador">
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                        </div>
                    </div>
                </fieldset>
            </form>

            <?php
            require_once __DIR__ . "/../Plantilla/pie.php";
        }

    public static function deleteHorarioTrabajador()
    {
        parent::setOn(true);
        parent::setRoot(true);

        $horarioTrabajador = Administracion\Controlador::getAllHoraioTrabajador();

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        ?>
        <h2 class="page-header">Eliminar Horario Trabajador:</h2>
        <div class="table-responsive col-md-offset-1 col-md-10">
            <table class="table table-bordered">
                <tr>
                    <th>TRABAJADOR</th>
                    <th>SEMANA</th>
                    <th>HORARIO</th>
                    <th>ACCIÓN</th>
                </tr>
                <?php
                foreach ($horarioTrabajador as $horario) {
                    ?>
                    <form method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                        <tr>
                            <td><?php echo $horario->getTrabajador()?></td>
                            <td><?php echo $horario->getNumeroSemana() ?></td>
                            <td><?php echo $horario->getHorario() ?></td>
<!--                                <td><button type="submit" name="borrarHorarioTrabajador" value="Eliminar" style="border: none; background: none"><span class="glyphicon glyphicon-remove" style="color: red; font-size: 1.5em"></span></button></td>-->
                            <td>
                                <button type="submit" name="borrarHorarioTrabajador" value="Editar" style="border: none; background: none;">
                                    <span class="glyphicon glyphicon-edit" style="color:blue; font-size: 1.5em">
                                    </span>
                                </button>
                                <input type="hidden" name="id" value="<?php echo $horario->getId(); ?>">
                            </td>
                        </tr>
                        <input type="hidden" value="<?php echo $horario->getId() ?>" name="id">
                    </form>
                    <?php
                }
                ?>
            </table>
        </div>
        <form method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
            <div class="col-sm-4 col-md-3">
                <input class="btn btn-danger" type="submit" name="volver" value="Volver">
            </div>
        </form>
        <?php

        require_once __DIR__ . "/../Plantilla/pie.php";
    }

     public static function updateHorarioTrabajador()
    {

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $calendarios = Administracion\Controlador::getAllHoraioTrabajador();
        $horarios = Administracion\Controlador::getAllHorarios();

        if(is_null($calendarios))
        {
            echo "no hay horarios de trabajador";
        }
        else
        {
            ?>

            <h2 class="page-header">Horario Trabajador</h2>

            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>DNI TRABAJADOR</th>
                        <th>NUMERO SEMANA</th>
                        <th>HORARIO</th>
                        <th>NUEVO HORARIO</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach ($calendarios as $calendario)
                    {
                        $horario=BD\HorarioBD::getHorarioById($calendario->getHorario());

                        ?>

                        <tr>
                            <td><?php echo $calendario->getTrabajador(); ?></td>
                            <td><?php echo $calendario->getNumeroSemana(); ?></td>
                            <td><?php echo $horario->getTipo(); ?></td>
                            <form name="cambiaTurno" method="post"
                                  action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                <td>
                                    <select id="nuevo" name="nuevo">
                                        <?php
                                        foreach ($horarios as $h)
                                        {
                                        ?>
                                            <option value="<?php echo $h->getId() ?>"><?php echo $h->getTipo() ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            <td>
                                <button type="submit" name="updateHorarioTrabajador" value="Editar"
                                    style="border: none; background: none;">
                                    <span
                                    class="glyphicon glyphicon-edit"
                                    style="color:blue; font-size: 1.5em">
                                    </span>
                                </button>
                                <input type="hidden" name="id" value="<?php echo $calendario->getId(); ?>">
                            </td>
                        </form>
                    </tr>

                    <?php
                    }
                    ?>

                </table>
            </div>

            <form name="deleteTurno" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>

        <?php
        }
        require_once __DIR__ . "/../Plantilla/pie.php";
    }

/*****************************************************/
/* PARTE LOGISTICA */
/*****************************************************/

        public static function viewParteLog($parte,$viajes)
        {
            parent::setOn(true);
            parent::setRoot(true);
            require_once __DIR__ . "/../Plantilla/cabecera.php";

            echo "<h3 class='text-left'><strong>Trabajador: ".$parte->getTrabajador()->getNombre()." ".$parte->getTrabajador()->getApellido1()." ".$parte->getTrabajador()->getApellido2()."</strong></h3><br/>";

            echo "<div class='table-responsive'>";
                        //Calculo de horas extras

            $numhorasrealizadas = 0;
			foreach($viajes as $viaje){
                $horaInicio = $viaje->getHoraInicio();
				$horaFin = $viaje->getHoraFin();

				$numhorasrealizadas = $numhorasrealizadas + (substr($horaFin,0,2)-substr($horaInicio,0,2)) ;
            }

            $fecha = $parte->getFecha();

            $semana = date('W',strtotime($fecha));

            $trabajador = $parte->getTrabajador();


			$horariosTrabajador = $trabajador->getHorariosTrabajadorBySemana($semana);

            if (!is_array($horariosTrabajador))
            {
                 $horariosTrabajador = array($horariosTrabajador);

            }
            foreach($horariosTrabajador as $horarioTrabajador)
			{
                //$horariofranjas =BD\FranjaBD::getFranjaById($horarioTrabajador->getHorario());

				$horariofranjas = $horarioTrabajador->getHorario()->getHorariosFranja();
				echo "<p class='col-xs-12'><strong>Horario asociado: ";
				echo $horariofranjas[0]->getFranja()->getHoraInicio()." - ".$horariofranjas[sizeof($horariofranjas)-1]->getFranja()->getHoraFin();
				echo "</p>";

			}

			$numhoras = 0;
			foreach($horariosTrabajador as $horarioTrabajador)
			{
				$numhoras = $numhoras + sizeof($horarioTrabajador->getHorario()->getHorariosFranja());
			}

            $extras = $numhorasrealizadas - $numhoras;
            if ($extras > 0)
            {
                echo "<p class='col-xs-12' style='color: red;'><strong>Horas extras: ";
			    echo $extras;
			    echo "</p>";
            }


			//Termina calculo de horas extras

                echo "<table class='table table-striped'><tr><th >ID</th><th >HORA INICIO</th><th >HORA FIN</th><th >VEHICULO</th><th >ALBARAN</th></tr>";
                foreach ($viajes as $viaje) {

                    echo "<tr> <td>" . $viaje->getId() . "</td><td>" . $viaje->getHoraInicio() . "</td><td>" . $viaje->getHoraFin() . "</td><td>" . $viaje->getVehiculo()->getMatricula() . "</td><td>" . $viaje->getAlbaran() . "</td></tr>";
                }
                ?>
                <tr><th colspan="5">OBSERVACIONES</th></tr>
                <tr><td colspan="5"><?php echo $parte->getNota();?></td></tr>
                <?php
                echo "</table>";



            ?>

            <a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/Administracion.php?cod=2">Volver</a>
            </div>
            </div>
            <?php
            //echo '</div> </div><div><button id="close" class="btn-danger btn pull-right col-sm-2 cerrar">Volver</button></div>';

            require_once __DIR__ . "/../Plantilla/pie.php";
        }

        public static function editParteLogistica()
        {
            parent::setOn(true);
            parent::setRoot(true);
            require_once __DIR__ . "/../Plantilla/cabecera.php";

            $parte = unserialize($_SESSION['parte']);

            echo "<h3 class='text-left'><strong>Trabajador: ".$parte->getTrabajador()->getNombre()." ".$parte->getTrabajador()->getApellido1()." ".$parte->getTrabajador()->getApellido2()."</strong></h3><br/>";

            echo "<div class='table-responsive'>";
                        //Calculo de horas extras

            $numhorasrealizadas = 0;
            $viajes = array();

            if (!is_array($parte->getViajes()) && !is_null($parte->getViajes()))
            {
                $viajes[] = $parte->getViajes();
            }
            else{
                $viajes = $parte->getViajes();
            }
			foreach($viajes as $viaje){
                $horaInicio = $viaje->getHoraInicio();
				$horaFin = $viaje->getHoraFin();

				$numhorasrealizadas = $numhorasrealizadas + (substr($horaFin,0,2)-substr($horaInicio,0,2)) ;
            }

            $fecha = $parte->getFecha();

            $semana = date('W',strtotime($fecha));

            $trabajador = $parte->getTrabajador();


			$horariosTrabajador = $trabajador->getHorariosTrabajadorBySemana($semana);

            if (!is_array($horariosTrabajador))
            {
                 $horariosTrabajador = array($horariosTrabajador);

            }
            foreach($horariosTrabajador as $horarioTrabajador)
			{

				$horariofranjas = $horarioTrabajador->getHorario()->getHorariosFranja();
				echo "<p class='col-xs-12'><strong>Horario asociado: ";
				echo $horariofranjas[0]->getFranja()->getHoraInicio()." - ".$horariofranjas[sizeof($horariofranjas)-1]->getFranja()->getHoraFin();
				echo "</p>";

			}

			$numhoras = 0;
			foreach($horariosTrabajador as $horarioTrabajador)
			{
				$numhoras = $numhoras + sizeof($horarioTrabajador->getHorario()->getHorariosFranja());
			}

            $extras = $numhorasrealizadas - $numhoras;
            if ($extras > 0)
            {
                echo "<p class='col-xs-12' style='color: red;'><strong>Horas extras: ";
			    echo $extras;
			    echo "</p>";
            }


			//Termina calculo de horas extras
		    ?>
                <form action="<?php echo parent::getUrlRaiz();?>/Controlador/Administracion/Router.php" method="post">
                <table class='table table-striped'><tr><th >ID</th><th >HORA INICIO</th><th >HORA FIN</th><th >VEHICULO</th><th >ALBARAN</th></tr>
                <input type="hidden" name="idParte" id="idParte" value="<?php echo $parte->getId(); ?>"/>
                <?php
                $x = 1;
                foreach ($viajes as $viaje) {?>

                    <tr> <td><input type="hidden" name="id<?php echo $x; ?>" id="id<?php echo $x;?>" value="<?php echo $viaje->getId();?>"/><?php echo $viaje->getId();?></td><td><input type="time" name="HoraInicio<?php echo $x;?>" id="HoraInicio<?php echo $x;?>" value="<?php echo $viaje->getHoraInicio(); ?>"/></td><td><input type="time" name="HoraFin<?php echo $x;?>" id="HoraFin<?php echo $x;?>" value="<?php echo $viaje->getHoraFin(); ?>"/> </td>
                    <td><select name="Matricula<?php echo $x;?>" id="Matricula<?php echo $x;?>">
                     <?php
                     $vehiculos = BD\VehiculoBD::getAll();
                     foreach ($vehiculos as $vehiculo)
                     {
                        echo "<option value='".$vehiculo->getMatricula()."'";
                        if (strcmp($viaje->getVehiculo()->getMatricula(),$vehiculo->getMatricula()) == 0)
                        {
                            echo "selected='selected'";
                        }
                        echo ">".$vehiculo->getMatricula()."</option>";
                     }
                     ?>

                     </select></td>
                     <td><input type="text" name="Albaran<?php echo $x;?>" id="Albaran<?php echo $x;?>" value="<?php echo $viaje->getAlbaran();?>"/></td></tr>
                <?php
                $x++;
                }
                ?>
                <tr><th colspan="5">OBSERVACIONES</th></tr>
                <tr><td colspan="5"><textarea name="Nota" id="Nota"><?php echo $parte->getNota();?></textarea></td></tr>
                </table>
                <button type="submit" name="guardarParteLogistica"
                   style="border: none; background: none"><span
                   class="glyphicon glyphicon-floppy-saved" style="color:blue; font-size: 1.5em"></span> <span style="color:blue;">Guardar</span>
                </button>
                </form>

            <a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/Administracion.php?cod=2">Volver</a>
            </div>
            </div>
            <?php
            //echo '</div> </div><div><button id="close" class="btn-danger btn pull-right col-sm-2 cerrar">Volver</button></div>';

            require_once __DIR__ . "/../Plantilla/pie.php";
        }

/*****************************************************/
/* PARTE PRODUCCION */
/*****************************************************/

        public static function viewParteProd($parte,$estado)
        {
            parent::setOn(true);
            parent::setRoot(true);
            require_once __DIR__ . "/../Plantilla/cabecera.php";

		echo "<h3 class='text-left'><strong>Trabajador: ".$parte->getTrabajador()->getNombre()." ".$parte->getTrabajador()->getApellido1()." ".$parte->getTrabajador()->getApellido2()."</strong></h3><br/>";

		$parteProduccionTareas = $parte->getParteProduccionTareas();


		if(!is_null($parteProduccionTareas)){
			foreach ($parteProduccionTareas as $parteProduccionTarea)
			{
				echo "<link rel='stylesheet' type='text/css' href='".self::getUrlRaiz()."/Vista/Plantilla/CSS/ProduccionStyle.css'>";
				echo "<input type='hidden' id='contTareas' value='".sizeof($parteProduccionTareas)."'>";

					$tipo = $parteProduccionTarea->getTarea()->getTipo();
					$tarea=BD\TipoTareaBD::getTipoByTarea($parteProduccionTarea->getTarea());

					echo "<div class='panel panel-default' rel='".$parteProduccionTarea->getId()."'>";

                    echo "<div class='panel-heading container-fluid'>
                            <article class='col-xs-6 text-left'>
                                <h4 class='panel-title'>
                                    <strong>".$tarea->getDescripcion().":</strong>
                                    <span class='lead small'>".$parteProduccionTarea->getTarea()->getDescripcion()."</span>
                                </h4>
                            </article>";
					if(strnatcasecmp($estado->getTipo(),"abierto")==0){ echo "<article class='col-xs-6'><a class='tOp eliminar_tarea' rel='".$parteProduccionTarea->getId()."'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a><!--<a class='tOp editar_tarea' rel='".$parteProduccionTarea->getId()."'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>--></article>";}

					echo '</div><div class="panel-body">';

					if(!empty($parteProduccionTarea->getNumeroHoras())){
						echo "<span class='col-sm-4 col-xs-12'>Numero Horas: ".$parteProduccionTarea->getNumeroHoras()."</span>";
					}

					if(!empty($parteProduccionTarea->getPaqueteEntrada())&&!empty($parteProduccionTarea->getPaqueteSalida()))
					{
						echo "<span class='col-sm-4 col-xs-12'>Nº Entrada: ".$parteProduccionTarea->getPaqueteEntrada()."</span>
						      <span class='col-sm-4 col-xs-12'>Nº Salida: ".$parteProduccionTarea->getPaqueteSalida()."</span>
						      <span class='col-sm-4 col-xs-12'>Total: ".($parteProduccionTarea->getPaqueteSalida()-$parteProduccionTarea->getPaqueteEntrada())."</span>";
					}

					echo "</div></div>";

                }
				if(strnatcasecmp($estado->getTipo(),"abierto")==0)
				{
					echo "<button type='button' class='btn btn-primary pCerrar' rel='".$parte->getId()."'>Cerrar Parte</button> ";
					echo "<button type='button' class='btn btn-danger pBorrar' rel='".$parte->getId()."'>Eliminar Parte</button>";
				}
				elseif(strnatcasecmp($estado->getTipo(),"cerrado")==0)
				{
					echo "<div class='panel panel-default'><div class='panel-body' >";

					if(count($parte->getHorariosParte())==1){
						echo "<p class='col-xs-12'><strong>Horario realizado: Continua de ";
					}
					else
					{
						echo "<p class='col-xs-12'><strong>Horario realizado: Partida de ";
					}

					$x = 1;

					foreach($parte->getHorariosParte() as $horarioParte)
					{
						if($x>1){echo " y ";}
						$x++;
						echo $horarioParte->getHoraEntrada()." - ".$horarioParte->getHoraSalida();
					}

					$fecha = $parte->getFecha();

                    $semana = date('W',strtotime($fecha));

					$trabajador = $parte->getTrabajador();

					$horariosTrabajador = $trabajador->getHorariosTrabajadorBySemana($semana);

                    if (!is_array($horariosTrabajador))
                    {
                        $horariosTrabajador = array($horariosTrabajador);

                    }

						foreach($horariosTrabajador as $horarioTrabajador)
						{

						    $horariofranjas = $horarioTrabajador->getHorario()->getHorariosFranja();
						    echo "<p class='col-xs-12'><strong>Horario asociado: ";
						    echo $horariofranjas[0]->getFranja()->getHoraInicio()." - ".$horariofranjas[sizeof($horariofranjas)-1]->getFranja()->getHoraFin();
						    echo "</p>";

						}
						//Calculo de horas extras

                            $numhorasrealizadas = 0;
					        foreach($parte->getHorariosParte() as $horarioParte)
					        {
						        $x++;
						        $horaEntrada = $horarioParte->getHoraEntrada();
						        $horaSalida = $horarioParte->getHoraSalida();

						        $numhorasrealizadas = $numhorasrealizadas + (substr($horaSalida,0,2)-substr($horaEntrada,0,2)) ;
					        }

					        $numhoras = 0;
					        foreach($horariosTrabajador as $horarioTrabajador)
						    {
						        $numhoras = $numhoras + sizeof($horarioTrabajador->getHorario()->getHorariosFranja());
						    }

						    $extras = $numhorasrealizadas - $numhoras;
                            if ($extras > 0)
                            {
                                echo "<p class='col-xs-12' style='color: red;'><strong>Horas extras: ";
			                    echo $extras;
			                    echo "</p>";
                            }

                    //Termina calculo de horas extra

					echo "</strong></p><article>";

					if(!empty($parte->getAutopista()))
					{
						echo "<span class='col-sm-4 col-xs-12'>Autopistas/Peajes: ".$parte->getAutopista()."€</span>";
					}
					else
					{
						echo "<span class='col-sm-4 col-xs-12'>Autopista/Peajes: 0€</span>";
					}

					if(!empty($parte->getDieta()))
					{
						echo "<span class='col-sm-4 col-xs-12'>Dietas: ".$parte->getDieta()."€</span>";
					}
					else
					{
						echo "<span class='col-sm-4 col-xs-12'>Dietas: 0€</span>";
					}

					if(!empty($parte->getOtroGasto()))
					{
						echo "<span class='col-sm-4 col-xs-12'>Otros Gastos: ".$parte->getOtroGasto()."€</span>";
					}
					else
					{
						echo "<span class='col-sm-4 col-xs-12'>Otros Gastos: 0€</span>";
					}

					echo "</article><article class='col-xs-12'>";

					if(!empty($parte->getIncidencia()))
					{
						echo "<p><strong>Incidencia: </strong><br/>".$parte->getIncidencia()."</p>";
					}
					else
					{
						echo "<p><strong>Incidencia: </strong><br/>No hay ninguna incidencia.</p>";
					}

					echo "</div></div>";
			}
		}
		else
		{
			echo "<div class='panel panel-default'><div class='panel-body'>El Parte no tiene ninguna Tarea.</div></div>";
			if(strnatcasecmp($estado->getTipo(),"abierto")==0)
			{
				echo "<button type='button' class='btn btn-danger pBorrar' rel='".$parte->getId()."'>Eliminar Parte</button>";
			}
		}
		?>

<!--        <a href="--><?php //echo self::getUrlRaiz()?><!--/Vista/Administracion/Administracion.php?cod=2">Volver</a>-->


        <form name="botonVolver" method="post" action="<?php echo self::getUrlRaiz() ?>/Vista/Administracion/Administracion.php?cod=2">
                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>
        <?php
        //echo '</div> </div><div><button id="close" class="btn-danger btn pull-right col-sm-2 cerrar">Volver</button></div>';

        require_once __DIR__ . "/../Plantilla/pie.php";
        }

        public static function editParteProduccion()
        {
            parent::setOn(true);
            parent::setRoot(true);
            require_once __DIR__ . "/../Plantilla/cabecera.php";

            $parte = unserialize($_SESSION['parte']);

            echo "<h3 class='text-left'><strong>Trabajador: ".$parte->getTrabajador()->getNombre()." ".$parte->getTrabajador()->getApellido1()." ".$parte->getTrabajador()->getApellido2()."</strong></h3><br/>";

            $parteProduccionTareas = $parte->getParteProduccionTareas();


            if(!is_null($parteProduccionTareas)){
            ?>
            <form action="<?php echo parent::getUrlRaiz();?>/Controlador/Administracion/Router.php" method="post">
            <input type="hidden" name="idParte" id="idParte" value="<?php echo $parte->getId(); ?>"/>

            <?php
                $x = 1;

                foreach ($parteProduccionTareas as $parteProduccionTarea)
                {
                    echo "<link rel='stylesheet' type='text/css' href='".self::getUrlRaiz()."/Vista/Plantilla/CSS/ProduccionStyle.css'>";
                    echo "<input type='hidden' id='contTareas' value='".sizeof($parteProduccionTareas)."'>";

                        $tipo = $parteProduccionTarea->getTarea()->getTipo();
                        $tareas = BD\TareaBD::getTareaByTipo($tipo);

                        echo "<div class='panel panel-default' rel='".$parteProduccionTarea->getId()."'>";
                        ?>
                        <input type="hidden" name="id<?php echo $x; ?>" id="id<?php echo $x;?>" value="<?php echo $parteProduccionTarea->getId();?>"/>
                        <div class='panel-heading container-fluid'><article class='col-xs-6 text-left'><h4 class='panel-title'><strong>
                        <?php echo $parteProduccionTarea->getTarea()->getTipo()->getDescripcion();?>:</strong> <span class='lead small'>
                        <select name="ParteProduccionTarea<?php echo $x;?>" id="ParteProduccionTarea<?php echo $x;?>">
                            <?php
                            foreach ($tareas as $tarea)
                            {?>
                                <option value="<?php echo $tarea->getId();?>"
                                <?php
                                if ($tarea->getId() == $parteProduccionTarea->getTarea()->getId())
                                {
                                    echo "selected='selected'";
                                }
                                 ?>
                                ><?php echo $tarea->getDescripcion();?></option>
                             <?php
                            }
                             ?>

                        </select>
                        </span></h4></article>

                        <?php
                        if(strnatcasecmp($parte->getEstado()->getTipo(),"abierto")==0){ echo "<article class='col-xs-6'><a class='tOp eliminar_tarea' rel='".$parteProduccionTarea->getId()."'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a><!--<a class='tOp editar_tarea' rel='".$parteProduccionTarea->getId()."'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>--></article>";}

                        echo '</div><div class="panel-body">';

                        if(!empty($parteProduccionTarea->getNumeroHoras())){?>

                            <span class='col-sm-4 col-xs-12'>Numero Horas: <input type="number" name="NumeroHoras<?php echo $x;?>" id="NumeroHoras<?php echo $x;?>" min="1" value="<?php echo $parteProduccionTarea->getNumeroHoras();?>"/></span>
                        <?php
                        }

                        if(!empty($parteProduccionTarea->getPaqueteEntrada())&&!empty($parteProduccionTarea->getPaqueteSalida())){
                        ?>
                            <span class='col-sm-4 col-xs-12'>Nº Entrada: <input type="number" name="PaqueteEntrada<?php echo $x;?>" id="PaqueteEntrada<?php echo $x;?>" min="1" value="<?php echo $parteProduccionTarea->getPaqueteEntrada();?>"/></span><span class='col-sm-4 col-xs-12'>Nº Salida: <input type="number" name="PaqueteSalida<?php echo $x;?>" id="PaqueteSalida<?php echo $x;?>" min="1" value="<?php echo $parteProduccionTarea->getPaqueteSalida();?>"/></span><span class='col-sm-4 col-xs-12'>Total: <?php echo $parteProduccionTarea->getPaqueteSalida()-$parteProduccionTarea->getPaqueteEntrada();?></span>
                        <?php
                        }
                        ?>
                        </div></div>
                        <?php
                        $x++;

                    }
                    if(strnatcasecmp($parte->getEstado()->getTipo(),"abierto")==0){
                        echo "<button type='button' class='btn btn-primary pCerrar' rel='".$parte->getId()."'>Cerrar Parte</button> ";
                        echo "<button type='button' class='btn btn-danger pBorrar' rel='".$parte->getId()."'>Eliminar Parte</button>";
                    }elseif(strnatcasecmp($parte->getEstado()->getTipo(),"cerrado")==0){
                        echo "<div class='panel panel-default'><div class='panel-body' >";


                        if(count($parte->getHorariosParte())==1){
                            echo "<p class='col-xs-12'><strong>Horario realizado: Continua de ";
                        }else{
                            echo "<p class='col-xs-12'><strong>Horario realizado: Partida de ";
                        }

                        $x = 0;

                        foreach($parte->getHorariosParte() as $horarioParte){
                            if($x>0){echo " y ";}
                            $x++;
                            ?>
                            <input type="time" name="HoraEntrada<?php echo $x;?>" id="HoraEntrada<?php echo $x;?>" value="<?php echo $horarioParte->getHoraEntrada();?>"/> - <input type="time" name="HoraSalida<?php echo $x;?>" id="HoraSalida<?php echo $x;?>" value="<?php echo $horarioParte->getHoraSalida();?>"/>
                            <?php


                        }

                        $fecha = $parte->getFecha();

                        $semana = date('W',strtotime($fecha));

                        $trabajador = $parte->getTrabajador();

                        $horariosTrabajador = $trabajador->getHorariosTrabajadorBySemana($semana);

                        if (!is_array($horariosTrabajador))
                        {
                            $horariosTrabajador = array($horariosTrabajador);

                        }

                            foreach($horariosTrabajador as $horarioTrabajador)
                            {

                                $horariofranjas = $horarioTrabajador->getHorario()->getHorariosFranja();
                                echo "<p class='col-xs-12'><strong>Horario asociado: ";
                                echo $horariofranjas[0]->getFranja()->getHoraInicio()." - ".$horariofranjas[sizeof($horariofranjas)-1]->getFranja()->getHoraFin();
                                echo "</p>";

                            }
                            //Calculo de horas extras

                                $numhorasrealizadas = 0;
                                foreach($parte->getHorariosParte() as $horarioParte){

                                    $x++;
                                    $horaEntrada = $horarioParte->getHoraEntrada();
                                    $horaSalida = $horarioParte->getHoraSalida();

                                    $numhorasrealizadas = $numhorasrealizadas + (substr($horaSalida,0,2)-substr($horaEntrada,0,2)) ;

                                }

                                $numhoras = 0;
                                foreach($horariosTrabajador as $horarioTrabajador)
                                {
                                    $numhoras = $numhoras + sizeof($horarioTrabajador->getHorario()->getHorariosFranja());
                                }

                                $extras = $numhorasrealizadas - $numhoras;
                                if ($extras > 0)
                                {
                                    echo "<p class='col-xs-12' style='color: red;'><strong>Horas extras: ";
                                    echo $extras;
                                    echo "</p>";
                                }

                        //Termina calculo de horas extra

                        echo "</strong></p><article>";
                        ?>
                        <span class='col-sm-4 col-xs-12'>Autopistas/Peajes: <input type="number" name="Autopista" id="Autopista"
                        <?php
                        if(!empty($parte->getAutopista())){?>
                            value="<?php echo $parte->getAutopista();?>"/>€</span>
                        <?php
                        }else{?>
                            value="0"/>€</span>
                        <?php
                        }
                        ?>
                        <span class='col-sm-4 col-xs-12'>Dietas: <input type="number" name="Dieta" id="Dieta"
                        <?php
                        if(!empty($parte->getDieta())){?>
                            value="<?php echo $parte->getDieta();?>"/>€</span>
                        <?php
                        }else{?>
                            value="0"/>€</span>
                        <?php
                        }
                        ?>
                        <span class='col-sm-4 col-xs-12'>Otros Gastos: <input type="number" name="Otros" id="Otros"
                        <?php
                        if(!empty($parte->getOtroGasto())){?>
                            value="<?php echo $parte->getOtroGasto();?>"/>€</span>
                        <?php
                        }
                        else
                        {?>
                            value="0"/>€</span>
                        <?php
                        }

                        echo "</article><article class='col-xs-12'>";

                        ?>
                        <span class='col-sm-4 col-xs-12'>Incidencia: <br/><textarea name="Incidencia" id="Incidencia">
                        <?php
                        if(!empty($parte->getIncidencia()))
                        {?>
                            <?php echo $parte->getIncidencia();?></textarea></span>
                        <?php
                        }
                        else
                        {?>
                            No hay ninguna incidencia.</span></textarea>
                        <?php
                        }
                        echo "</div></div>";

                }
            }
            else
            {
                echo "<div class='panel panel-default'><div class='panel-body'>El Parte no tiene ninguna Tarea.</div></div>";
                if(strnatcasecmp($parte->getEstado()->getTipo(),"abierto")==0)
                {
                    echo "<button type='button' class='btn btn-danger pBorrar' rel='".$parte->getId()."'>Eliminar Parte</button>";
                }
            }?>
                    <button type="submit" name="guardarParteProduccion"
                       style="border: none; background: none"><span
                       class="glyphicon glyphicon-floppy-saved" style="color:blue; font-size: 1.5em"></span> <span style="color:blue;">Guardar</span>
                    </button>
                    </form>

                <a href="<?php echo self::getUrlRaiz()?>/Vista/Administracion/Administracion.php?cod=2">Volver</a>

                <?php
                //echo '</div> </div><div><button id="close" class="btn-danger btn pull-right col-sm-2 cerrar">Volver</button></div>';

                require_once __DIR__ . "/../Plantilla/pie.php";
        }

/*****************************************************/
/* Tipos de Filtros */
/*****************************************************/
   public static function tiposFiltro()
     {
      ?>
         <div class ="row" id="zona_Filtros">
            <div id="select_Filtro" class="col-xs-12 col-sm-6">
            <h4>Filtros disponibles:</h4>

            <select id="mySelect" name="mySelect">
                <option value="1">Trabajador</option>
                <option value="2">Trabajador y Rango de Fechas</option>
                <option value="3">Rango de Fecha</option>
                <option value="4">Estado de Parte</option>
                <option value="0">Eliminar Filtro</option>
            </select>

            </div>
              <div id="param_Filtro" class="col-xs-12 col-sm-6">
                <form action="<?php echo parent::getUrlRaiz()?>/Vista/Administracion/Administracion.php?cod=6" method="post">
                   <div class="form-group col-xs-12" id="filtro0" style="display:none">
                            <p>Mostrar Todos</p>
                   </div>

                   <div class="form-group col-xs-12" id="filtroDni" style="display:none">
                        <label>DNI: </label><input type="text" name="dni" size="10"></br>
                   </div>

                   <div class="form-group col-xs-12" id="filtroRango" style="display:none">
                        <label>Desde Fecha (yyyy-mm-dd): </label><input type="date" name="fechaIni1" size="10"> </br>
                        <label>Hasta Fecha (yyyy-mm-dd): </label><input type="date" name="fechaFin1" size="10"> </br>
                   </div>

                   <div class="form-group col-xs-12" id="filtroEstado" style="display:none">
                        <label>Estado Parte: </label></br>
                        <input type="radio" name="estado" value="Abierto"> Abierto</br>
                        <input type="radio" name="estado" value="Cerrado"> Cerrado</br>
                    </div>

                   <div class="form-group col-xs-12" id="bFiltro" style="display:none">
                    <button type="submit" id="botonFiltro" style="" name="botonFiltro" class="btn-primary" value="Filtrar"> Filtrar</button>
                   </div>
                </form>
             </div>
            </div>
    <script>

    $().ready(function() {
        $("#mySelect").change(function(event) {
            var valor = event.target.value;
            $("#bFiltro").show();
       switch (valor)
        {
        case "1":
             $("#filtro0").hide();
             $("#filtroRango").hide();
             $("#filtroEstado").hide();
             $("#filtroDni").show();
        break;
        case "2":
             $("#filtro0").hide();
             $("#filtroEstado").hide();
             $("#filtroDni").show();
             $("#filtroRango").show();
        break;
        case "3":
            $("#filtro0").hide();
            $("#filtroEstado").hide();
            $("#filtroDni").hide();
            $("#filtroRango").show();
        break;
        case "4":
             $("#filtro0").hide();
             $("#filtroDni").hide();
             $("#filtroRango").hide();
             $("#filtroEstado").show();
        break;
        case "0":
             $("#filtroDni").hide();
             $("#filtroRango").hide();
             $("#filtroEstado").hide();
             $("#filtro0").show();
        break;
    }
    })
    });
    </script>
      <?php
     }

/*****************************************************/
/* TipoFiltrado */
/*****************************************************/
     public static function tipoFiltro($tipo)
     {

         if(isset($tipo['estado'])&& strlen($tipo['estado'])>0)
         {
            self::findPartesByEstado($tipo);
         }
         elseif (isset($tipo['dni'])&& strlen($tipo['dni'])>0)
         {
            if(isset($tipo['fechaIni1'])&&strlen($tipo['fechaIni1'])>0 && isset($tipo['fechaFin1'])&&strlen($tipo['fechaFin1'])>0)
            {
                self::findPartesByTrabajadorFechas($tipo);
            // caso persona y rango fechas

            }
            else //es el caso persona
            {
                self::findPartesByDni($tipo);
                 echo "************persona+++++++++++++++++";
            }
         }
         elseif(isset($tipo['fechaIni1'])&&strlen($tipo['fechaIni1'])>0 && isset($tipo['fechaFin1'])&&strlen($tipo['fechaFin1'])>0)
        {
        // caso rango fechas
            self::findPartesByRangoFechas($tipo);
        }
        else
        {
        //caso eliminar filtro
            self::allPartesByDni();
        }
     }

/*****************************************************/
/* Rellena Tabla Produccion */
/*****************************************************/
        public static function rellenaTablaPartesProd($prod)
        {
        ?>
            <form method="post"
                  action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                <tr>
                    <td><?php echo $prod->getTrabajador()->getDni(); ?></td>
                    <td><?php echo $prod->getTrabajador()->getNombre()." ".$prod->getTrabajador()->getApellido1()." ".$prod->getTrabajador()->getApellido2(); ?></td>
                    <td><?php echo $prod->getFecha(); ?></td>
                    <td><?php echo $prod->getIncidencia(); ?></td>
                    <td><?php echo $prod->getAutopista(); ?></td>
                    <td><?php echo $prod->getDieta(); ?></td>
                    <td><?php echo $prod->getOtroGasto(); ?></td>
                    <td><?php echo $prod->getEstado()->getTipo(); ?></td>
                    <td>
                        <button type="submit" name="listarParteProd"
                                style="border: none; background: none"><span
                                class="glyphicon glyphicon-list" style="color:blue; font-size: 1.5em">
                        </button>
                        <button type="submit" name="modificarParteProd"
                                style="border: none; background: none"><span
                                class="glyphicon glyphicon-edit" style="color:blue; font-size: 1.5em">
                        </button>
                        <button type="submit" name="validarParteProduccion"
                                style="border: none; background: none"><span
                                class="glyphicon glyphicon-ok"
                                style="color:green; font-size: 1.5em"></span></button>
                        <button type="submit" name="eliminarParteProduccion"
                                style="border: none; background: none"><span
                                class="glyphicon glyphicon-remove" style="color:red; font-size: 1.5em">
                        </button>
                        <button type="submit" name="abrirParteProduccion"
                                style="border: none; background: none"><span
                                class="glyphicon glyphicon-open-file" style="color:blue; font-size: 1.5em">
                        </button>
                    </td>
                </tr>
                <input type="hidden" name="id" value="<?php echo $prod->getId(); ?>">
            </form>
            <?php
        }

/*****************************************************/
/* Rellena Tabla Logistica */
/*****************************************************/
        public static function rellenaTablaPartesLog($log)
        {?>
            <form method="post"
                  action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                <tr>
                    <td><?php echo $log->getTrabajador()->getDni(); ?></td>
                    <td><?php echo $log->getTrabajador()->getNombre()." ".$log->getTrabajador()->getApellido1()." ".$log->getTrabajador()->getApellido2(); ?></td>
                    <td><?php echo $log->getFecha(); ?></td>
                    <td><?php echo $log->getNota(); ?></td>
                    <td><?php echo $log->getAutopista(); ?></td>
                    <td><?php echo $log->getDieta(); ?></td>
                    <td><?php echo $log->getOtroGasto(); ?></td>
                    <td><?php echo $log->getEstado()->getTipo(); ?></td>
                    <td>
                        <button type="submit" name="listarParteLog"
                                style="border: none; background: none"><span
                                class="glyphicon glyphicon-list" style="color:blue; font-size: 1.5em">
                        </button>
                        <button type="submit" name="modificarParteLog"
                                style="border: none; background: none"><span
                                class="glyphicon glyphicon-edit" style="color:blue; font-size: 1.5em">
                        </button>
                        <button type="submit" name="validarParteLogistica"
                                style="border: none; background: none"><span
                                class="glyphicon glyphicon-ok"
                                style="color:green; font-size: 1.5em"></span></button>
                        <button type="submit" name="eliminarParteLogistica"
                                style="border: none; background: none"><span
                                class="glyphicon glyphicon-remove" style="color:red; font-size: 1.5em">
                        </button>
                        <button type="submit" name="abrirParteLogistica"
                                style="border: none; background: none"><span
                                class="glyphicon glyphicon-open-file" style="color:blue; font-size: 1.5em">
                        </button>
                    </td>
                </tr>
                <input type="hidden" name="id" value="<?php echo $log->getId(); ?>">
            </form>
            <?php
        }

/*****************************************************/
/* Cabecera Tabla Partes Producción */
/*****************************************************/
     public static function cabeceraTablaProd()
     {?>
        <h2>PARTES PRODUCCIÓN</h2>
        <tr>
            <th>DNI</th>
            <th>NOMBRE</th>
            <th>FECHA</th>
            <th>INCIDENCIAS</th>
            <th>AUTOPISTAS</th>
            <th>DIETAS</th>
            <th>OTROS GASTOS</th>
            <th>ESTADO</th>
            <th>ACCIÓN</th>
        </tr>
     <?php
     }

/*****************************************************/
/* Cabecera Tabla Partes Logistica */
/*****************************************************/
    public static function cabeceraTablaLog()
     {?>
     <h2>PARTES LOGÍSTICA</h2>
        <tr>
            <th>DNI</th>
            <th>NOMBRE</th>
            <th>FECHA</th>
            <th>NOTA</th>
            <th>AUTOPISTAS</th>
            <th>DIETAS</th>
            <th>OTROS GASTOS</th>
            <th>ESTADO</th>
            <th>ACCIÓN</th>
        </tr>
     <?php
     }

/*****************************************************/
/* Insertar tablas Partes */
/*****************************************************/
    public static function insertarTablas($partesProd,$partesLog)
    {
    ?>
        <span id="respuesta">
           <table class="table table-bordered text-center">

                <?php
                if(count($partesProd)>0){//solo se "pinta" la tabla si hay contenido que nmostrar
                    self::cabeceraTablaProd();
                     foreach ($partesProd as $prod)
                    {
                        if ($prod->getEstado()->getTipo() == "Validado")
                        {
                            self::rellenaTablaPartesProd($prod);
                        }
                    }

                    foreach ($partesProd as $prod)
                    {
                        if ($prod->getEstado()->getTipo() == "Cerrado")
                        {
                            self::rellenaTablaPartesProd($prod);
                        }
                    }
                    foreach ($partesProd as $prod) // se muestren los abiertos tras los cerrados
                    {
                        if ($prod->getEstado()->getTipo() == "Abierto")
                        {
                            self::rellenaTablaPartesProd($prod);
                        }
                     }
                }
                ?>
            </table>

             <table class="table table-bordered text-center">
                <?php
                if(count($partesLog)>0){//solo se "pinta" la tabla si hay contenido que nmostrar
                    self::cabeceraTablaLog();

                    foreach ($partesLog as $log)
                    {
                        //var_dump($log);
                        if ($log->getEstado()->getTipo() == "Cerrado")
                        {
                            self::rellenaTablaPartesLog($log);
                        }
                     }
                     foreach ($partesLog as $log)// mostrar separados los partes no cerrados
                     {
                        if ($log->getEstado()->getTipo() == "Abierto")
                        {
                            self::rellenaTablaPartesLog($log);
                        }
                    }
                }
                ?>
            </table>

    </span>
    <?php
    }

/*****************************************************/
/* PARTES */
/*****************************************************/

        public static function allPartesByDni()
        {
            parent::setOn(true);
            parent::setRoot(true);

            require_once __DIR__ . "/../Plantilla/cabecera.php";

            $partesProd = Administracion\Controlador::getAllPartesProduccion();
            $partesLog = Administracion\Controlador::getAllPartesLogistica();

            ?>

            <div id="filtrado">
            <?php
            self::tiposFiltro();
             ?>
            </div>
            <?php
            self::insertarTablas($partesProd,$partesLog);

            require_once __DIR__ . "/../Plantilla/pie.php";
        }

/*****************************************************/
/* BUSCA PARTES POR DNI */
/*****************************************************/

    public static function findPartesByDni($i)
    {
        $dni=$i["dni"];

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";

        $partesProd = Administracion\Controlador::getPartesProdByDni($dni);
        $partesLog = Administracion\Controlador::getPartesLogByDni($dni);

        self::tiposFiltro();
        self::insertarTablas($partesProd,$partesLog);

        require_once __DIR__ . "/../Plantilla/pie.php";
    }
/*****************************************************/
/* BUSCA PARTES POR TRABAJADOR Y RANGO FECHAS */
/*****************************************************/
    public static function findPartesByTrabajadorFechas($i)
    {
        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";

        $dni=$i["dni"];
        $fechaIni=$i["fechaIni1"];
        $fechaFin=$i["fechaFin1"];

        $partesProd = Administracion\Controlador::getPartesProdByTrabAndRangoFechas($dni,$fechaIni,$fechaFin);
        $partesLog = Administracion\Controlador::getPartesLogByTrabAndRangoFechas($dni,$fechaIni,$fechaFin);

        self::tiposFiltro();
        self::insertarTablas($partesProd,$partesLog);

        require_once __DIR__ . "/../Plantilla/pie.php";
    }

/*****************************************************/
/* BUSCA PARTES POR RANGO FECHAS */
/*****************************************************/
    public static function findPartesByRangoFechas($i)
    {
        parent::setOn(true);
        parent::setRoot(true);
        require_once __DIR__ . "/../Plantilla/cabecera.php";

        $fechaIni=$i["fechaIni1"];
        $fechaFin=$i["fechaFin1"];

        $partesProd = Administracion\Controlador::getPartesVentanaTpoProd($fechaIni,$fechaFin);
        $partesLog = Administracion\Controlador::getPartesVentanaTpoLog($fechaIni,$fechaFin);

        self::tiposFiltro();
        self::insertarTablas($partesProd,$partesLog);

        require_once __DIR__ . "/../Plantilla/pie.php";
    }

/*****************************************************/
/* BUSCA PARTES POR ESTADO  */
/*****************************************************/
    public static function findPartesByEstado($i)
    {
        parent::setOn(true);
        parent::setRoot(true);
        require_once __DIR__ . "/../Plantilla/cabecera.php";

        $estado=$i["estado"];
        $fila=\Modelo\BD\EstadoBD::selectEstdadoByTipo($estado);

        $partesProd = Administracion\Controlador::getPartesProdByEstado($fila);
        $partesLog = Administracion\Controlador::getPartesLogByEstado($fila);

        self::tiposFiltro();
        self::insertarTablas($partesProd,$partesLog);

        require_once __DIR__ . "/../Plantilla/pie.php";
    }

/*****************************************************/
/* FESTIVOS */
/*****************************************************/

        public static function insertarFestivo(){

            parent::setOn(true);
            parent::setRoot(true);

            require_once __DIR__ . "/../Plantilla/cabecera.php";
            $festivos = Administracion\Controlador::getAllFestivos();
            ?>
            <form class="form-horizontal" name="insertarFestivo" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                <div class="form-group">
                    <label class="control-label col-sm-2 col-md-2">Motivo: </label>
                    <div class="col-sm-4 col-md-3">
                        <input class="form-control" type="text" name="motivo" placeholder="Navidad, Semana Santa...">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 col-md-2">Fecha: </label>
                    <div class="col-sm-4 col-md-3">
                        <input class="form-control" type="text" name="fecha" placeholder="aaaa-mm-dd" size="5">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-2">
                        <button class="btn btn-primary" type="submit" name="añadirFestivo">Añadir</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-md-3">
                            <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                    </div>

                </div>

            </form>

            <?php

            require_once __DIR__ . "/../Plantilla/pie.php";
        }

        public static function deleteFestivo(){
            parent::setOn(true);
            parent::setRoot(true);

            require_once __DIR__ . "/../Plantilla/cabecera.php";

            $festivos = Administracion\Controlador::getAllFestivos();

            if(is_null($festivos))
            {
                echo "No hay festivos";
            }
            else
            {
                ?>
                <h2 class="page-header">Horario Trabajador</h2>

                <div class="table-responsive col-md-offset-1 col-md-10">
                    <table class="table table-bordered text-center">
                        <tr>
                            <th>MOTIVO</th>
                            <th>FECHA</th>
                            <th>ACCIÓN</th>
                        </tr>
                        <?php
                        foreach ($festivos as $festivo) {
                            ?>
                            <form name="delFestivo" method="post"
                                  action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                <tr>
                                    <td><?php echo $festivo->getMotivo(); ?></td>
                                    <td><?php echo $festivo->getFecha(); ?></td>
                                    <td>
                                        <button type="submit" name="deleteFestivo" style="border: none; background: none">
                                            <span class="glyphicon glyphicon-remove" style="color:red; font-size: 1.5em"></span>
                                        </button
                                    </td>
                                </tr>
                                <input type="hidden" name="id" value="<?php echo $festivo->getId(); ?>">
                            </form>
                            <form name="deleteFestivo" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                <div class="col-sm-4 col-md-3">
                                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                                </div>
                            </form>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <?php
            }
            require_once __DIR__ . "/../Plantilla/pie.php";
        }

/*****************************************************/
/* FOTO */
/*****************************************************/

    public static function updateFoto(){

        parent::setOn(true);
        parent::setRoot(true);

        $trabajadores = Administracion\Controlador::getAllTrabajadores();

        require_once __DIR__ . "/../Plantilla/cabecera.php";

        ?>

        <h2 class="page-header">Actualizar foto Trabajador:</h2>
        <div class="table-responsive col-md-offset-1 col-md-10">
            <table class="table table-bordered">
                <tr>
                    <th>DNI</th>
                    <th>Nueva foto</th>
                    <th>Acción</th>
                </tr>
                <form name="updatePassword" method="post" enctype="multipart/form-data" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                    <tr>
                        <td>
                            <select class="form-control" name="trabajador">
                                <?php foreach($trabajadores as $trabajador){
                                    echo "<option value='".$trabajador->getDni()."'>".$trabajador->getDni()."</option>";
                                } ?>
                            </select>
                        </td>
                        <td><input class="form-control" type="file" name="foto"/></td>
                        <td><button type="submit" name="updateFoto" value="Cambiar" style="border: none; background: none"><span class="glyphicon glyphicon-edit" style="color: blue; font-size: 1.5em"></span></button></td>
                    </tr>
                </form>
            </table>
        </div>

        <form method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
            <div class="col-sm-4 col-md-3">
                <input class="btn btn-danger" type="submit" name="volver" value="Volver">
            </div>
        </form>

        <?php

        require_once __DIR__ . "/../Plantilla/pie.php";

    }

/*****************************************************/
/* TIPO TAREA */
/*****************************************************/

    public static function updateTipoTarea(){

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $tipos = Administracion\Controlador::getAllTiposTarea();
                if(is_null($tipos)){
            echo "No hay tipos de tarea";
        }
        else
        {
            ?>
            <h2 class="page-header">Actualizar denominación de Tipo de Tarea:</h2>
            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>DESCRIPCIÓN</th>
                        <th>NUEVA DESCRIPCIÓN</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach ($tipos as $tipo) {
                        ?>
                        <tr>
                            <td><?php echo $tipo->getId(); ?></td>
                            <td><?php echo $tipo->getDescripcion(); ?></td>
                            <form name="cambiaDescripcion" method="post"
                                  action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                <td><input type="text" name="nuevo" size="50" placeholder="denominación de tarea"></td>
                                <td>
                                    <button type="submit" name="updateTiposTarea" value="Editar"
                                            style="border: none; background: none;"><span
                                            class="glyphicon glyphicon-edit"
                                            style="color:blue; font-size: 1.5em"></span></button>
                                    <input type="hidden" name="id" value="<?php echo $tipo->getId(); ?>">
                                </td>
                            </form>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <form name="updateTipoTarea" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>
            <?php
        }
        require_once __DIR__ . "/../Plantilla/pie.php";

    }

    public static function insertTipoTarea()
    {
        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        ?>
        <div class="container">
            <form class="form-horizontal" name="insertTipoTarea" method="post" action="<?php echo self::getUrlRaiz()?>/Controlador/Administracion/Router.php"><br/>
                <fieldset>
                    <legend>Añadir Tipo Tarea</legend>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Tipo de Tarea:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="tipo" placeholder="Descripcion tarea">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-2">
                            <input class="btn btn-primary" type="submit" value="Añadir" name="addTipoTarea">
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <?php
        require_once __DIR__ . "/../Plantilla/pie.php";

    }

    public static function deleteTipoTarea(){

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $tareas = Administracion\Controlador::getAllTareas();
        $tiposTareas = Administracion\Controlador::getAllTiposTarea();
        if(is_null($tiposTareas)){
            echo "no hay Tipos Tareas";
        }else {
            ?>
            <h2 class="page-header">Eliminar Tipos Tareas</h2>
            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>DESCRIPCIÓN</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach ($tiposTareas as $tiposTarea) {
                        ?>
                        <tr>
                            <td><?php echo $tiposTarea->getDescripcion(); ?></td>
                            <td>
                                <form name="deleteTipo_Tarea" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                    <button class="btn btn-primary" type="submit" name="deleteTipoTarea"
                                            value="Eliminar" style="border: none; background: none;"><span
                                            class="glyphicon glyphicon-remove"
                                            style="color:red; font-size: 1.5em"></span></button>
                                    <input type="hidden" name="id" value="<?php echo $tiposTarea->getId(); ?>">
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <form name="deleteTipoTarea" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">

                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>
            <?php
        }
        require_once __DIR__ . "/../Plantilla/pie.php";

    }
/*****************************************************/
/* TAREA */
/*****************************************************/

    public static function updateTarea(){

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";
        $tareas = Administracion\Controlador::getAllTareas();
        if(is_null($tareas))
        {
            echo "No hay tareas";
        }
        else
        {
            ?>
            <h2 class="page-header">Modificación descripción de Tarea:</h2>
            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>DESCRIPCIÓN</th>
                        <th>NUEVA DESCRIPCIÓN</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach ($tareas as $tarea) {
                        ?>
                        <tr>
                            <td><?php echo $tarea->getId(); ?></td>
                            <td><?php echo $tarea->getDescripcion(); ?></td>
                            <form name="cambiaDescripcion" method="post"
                                  action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                <td><input type="text" name="nuevo" size="50" placeholder="denominación de tarea"></td>
                                <td>
                                    <button type="submit" name="updateTarea" value="Editar"
                                            style="border: none; background: none;"><span
                                            class="glyphicon glyphicon-edit"
                                            style="color:blue; font-size: 1.5em"></span></button>
                                    <input type="hidden" name="id" value="<?php echo $tarea->getId(); ?>">
                                </td>
                            </form>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <form name="actualizarTareas" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>
            <?php
        }
        require_once __DIR__ . "/../Plantilla/pie.php";

    }

    public static function insertTarea()
    {

        parent::setOn(true);
        parent::setRoot(true);
        $tiposTareas = Administracion\Controlador::getAllTiposTarea();
        require_once __DIR__ . "/../Plantilla/cabecera.php";
        ?>
        <div class="container">
            <form class="form-horizontal" name="insertTipoFranja" method="post" action="<?php echo self::getUrlRaiz()?>/Controlador/Administracion/Router.php"><br/>
                <fieldset>
                    <legend>Añadir Tarea</legend>
                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">Descripción:</label>
                        <div class="col-sm-4 col-md-3">
                            <input class="form-control" type="text" name="descripcion" placeholder="Descripcion de la tarea...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2 col-md-2">TipoTarea: </label>
                        <div class="col-sm-4 col-md-3">
                            <select class="form-control" name="tipoTarea">
                                <?php
                                foreach ($tiposTareas as $tipoTarea) {
                                    ?>
                                    <option value="<?php echo $tipoTarea->getId() ?>"><?php echo $tipoTarea->getDescripcion() ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-2">
                            <input class="btn btn-primary" type="submit" value="Añadir" name="addTarea">
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <?php
        require_once __DIR__ . "/../Plantilla/pie.php";
    }

    public static function deleteTarea(){

        parent::setOn(true);
        parent::setRoot(true);

        require_once __DIR__ . "/../Plantilla/cabecera.php";

        $tareas = Administracion\Controlador::getAllTareas();

        if(is_null($tareas))
        {
            echo "no hay tareas";
        }
        else
        {
            ?>
            <h2 class="page-header">Eliminar Tareas:</h2>
            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-bordered">
                    <tr>
                        <th>DESCRIPCIÓN</th>
                        <th>GRUPO DE TAREAS</th>
                        <th>ACCIÓN</th>
                    </tr>
                    <?php
                    foreach ($tareas as $tarea)
                    {
                        $grupo=BD\TipoTareaBD::getTipoByTarea($tarea);
                        $grupoTareas=$grupo->getDescripcion();
                        ?>
                        <tr>
                            <td><?php echo $tarea->getDescripcion(); ?></td>
                            <td><?php echo $grupoTareas; ?></td>
                            <td>
                                <form name="deleteTarea" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                                    <button class="btn btn-primary" type="submit" name="eliminarTarea" value="Eliminar" style="border: none; background: none;">
                                        <span class="glyphicon glyphicon-remove" style="color:red; font-size: 1.5em">
                                        </span>
                                    </button>
                                    <input type="hidden" name="id" value="<?php echo $tarea->getId(); ?>">
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <form name="deleteTarea" method="post" action="<?php echo self::getUrlRaiz() ?>/Controlador/Administracion/Router.php">
                <div class="col-sm-4 col-md-3">
                    <input class="btn btn-danger" type="submit" name="volver" value="Volver">
                </div>
            </form>
            <?php
        }
        require_once __DIR__ . "/../Plantilla/pie.php";
    }

}

