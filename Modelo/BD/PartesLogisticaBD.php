<?php
/**
 * Created by PhpStorm.
 * User: alain
 * Date: 28/02/2016
 * Time: 11:54
 */
namespace Modelo\BD;

require_once  __DIR__ .'/GenericoBD.php';

abstract class PartelogisticaBD extends GenericoBD{

    private static $tabla="parteslogistica";

    public static function selectParteLogisticaById($id){

            $conexion=parent::conectar();
            $query="SELECT * FROM ".self::$tabla." WHERE id= '".$id."'";
            $rs=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
            $respuesta=parent::mapear($rs,"Partelogistica");
            parent::desconectar($conexion);
            return $respuesta;
    }

    public static function selectParteLogisticaByViaje($viaje){

            $conexion=parent::conectar();
            $query="SELECT * FROM ".self::$tabla." WHERE id= SELECT idParte FROM viajes WHERE id='".$viaje->getId()."'";
            $rs=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
            $respuesta=parent::mapear($rs,"Partelogistica");
            parent::desconectar($conexion);
            return $respuesta;
    }
    public static function add($parteLogistica){

        $con = parent::conectar();

        $query = "INSERT INTO  " .self::$tabla."(`id`,`fecha`,`idEstado`,`dniTrabajador`) VALUES (null,'".$parteLogistica->getFecha()."','".$parteLogistica->getEstado()->getId()."','".$parteLogistica->getTrabajador()->getDni()."');";

        mysqli_query($con, $query) or die("$query Error addParteLogistica");

        $id=mysqli_insert_id($con);

        parent::desconectar($con);
        return $id;

    }
    public static function getAllByTrabajador($trabajador){

            $conexion=parent::conectar();
            $query="SELECT * FROM ".self::$tabla." WHERE dniTrabajador= '".$trabajador->getDni()."' order by dniTrabajador";
            $rs=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
            $respuesta=parent::mapearArray($rs,"Partelogistica");
            parent::desconectar($conexion);
            return $respuesta;
    }

    public static function getParteByTrabajadorFecha($trabajador,$fecha){

        $conexion=parent::conectar();
        $query="SELECT * FROM ".self::$tabla." WHERE dniTrabajador='".$trabajador->getDni()."' AND fecha= '".$fecha."'";
        $rs=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
        $parte=parent::mapear($rs,"Partelogistica");
        parent::desconectar($conexion);
        return $parte;
    }

    public static function getParteByFecha($trabajador, $fecha){

        $conexion=parent::conectar();
        $query="SELECT * FROM ".self::$tabla." WHERE fecha= '".$fecha."' AND dniTrabajador= '".$trabajador->getDni()."' ";
        $rs=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
        $respuesta=parent::mapear($rs,"Partelogistica");
        parent::desconectar($conexion);
        return $respuesta;
    }
    public static function getEstadoParteByFecha($trabajador, $fecha){

        $conexion=parent::conectar();
        $query="SELECT idEstado FROM ".self::$tabla." WHERE fecha= '".$fecha."' AND dniTrabajador= '".$trabajador->getDni()."' ";
        $rs=mysqli_query($conexion,$query) or die(mysqli_error($conexion));


        if ($fila = mysqli_fetch_assoc($rs))
        {

            parent::desconectar($conexion);
            return$fila['idEstado'];
        }
        else{
            parent::desconectar($conexion);
            return null;
        }
    }
    public static function cerrarEstadoParteByFecha($trabajador, $fecha, $nota){

        $conexion=parent::conectar();

        $query="UPDATE ".self::$tabla." SET idEstado=2, nota='".$nota."' WHERE fecha= '".$fecha."' AND dniTrabajador= '".$trabajador->getDni()."'";


        $rs=mysqli_query($conexion,$query) or die(mysqli_error($conexion));


        echo "Parte cerrado";


    }
    public static function getAll(){
        $conexion=parent::conectar();
        $query="SELECT * FROM ".self::$tabla." order by fecha,dniTrabajador";
        $rs=mysqli_query($conexion,$query) or die("getAllLogistica");
        $respuesta=parent::mapearArray($rs,"Partelogistica");
        parent::desconectar($conexion);
        return $respuesta;
    }

    public static function delete($parteId){
        $con = parent::conectar();

        $query = "DELETE FROM ".self::$tabla." WHERE id = ".$parteId;

        mysqli_query($con, $query) or die("Error addCentro");

        parent::desconectar($con);
    }
    public static function updateValidar($parteId){
        $con = parent::conectar();

        $query = "UPDATE ".self::$tabla." SET idEstado = '3' WHERE id = '".$parteId."';";

        mysqli_query($con, $query) or die("Error validar");

        parent::desconectar($con);

    }

    public static function updateNotaParte($parte){
        $con = parent::conectar();

        $query = "UPDATE ".self::$tabla." SET nota='".$parte->getNota()."' WHERE id=".$parte->getId();

        mysqli_query($con, $query) or die("Error update nota parte");

        parent::desconectar($con);

    }

    public static function updateAbrir($parteId){
        $con = parent::conectar();

        $query = "UPDATE ".self::$tabla." SET idEstado = '1' WHERE id = '".$parteId."';";

        mysqli_query($con, $query) or die("Error validar");

        parent::desconectar($con);

    }
    public static function updateFinalizar($parteId){
        $con = parent::conectar();

        $query = "UPDATE ".self::$tabla." SET idEstado = '4' WHERE id = '".$parteId."';";

        mysqli_query($con, $query) or die("Error validar");

        parent::desconectar($con);

    }
    public static function saveHorasExtra($parteId,$horas){
        $con = parent::conectar();

        $query = "UPDATE ".self::$tabla." SET horasExtra = ".$horas." WHERE id = '".$parteId."';";

        mysqli_query($con, $query) or die("Error validar");

        parent::desconectar($con);

    }
    public static function updateCerrar($parteId){
        $con = parent::conectar();

        $query = "UPDATE ".self::$tabla." SET idEstado = '2' WHERE id = '".$parteId."';";

        mysqli_query($con, $query) or die("Error validar");

        parent::desconectar($con);

    }

    public static function getPartesByTrabajadorAndFechas($dni,$fechaIni,$fechaFin){

        $con = parent::conectar();

        $query = "SELECT * FROM ".self::$tabla." WHERE dniTrabajador= '".$dni."' AND fecha BETWEEN '".$fechaIni."' AND '".$fechaFin."';";

        $rs = mysqli_query($con, $query) or die("Error getPartesByTrabajadorAndFechas");

        $partes = parent::mapearArray($rs, "Partelogistica");

        parent::desconectar($con);

        return $partes;
    }

    public static function getPartesByRangoFechas($fechaIni,$fechaFin){

        $con = parent::conectar();

        $query = "SELECT * FROM ".self::$tabla." WHERE fecha BETWEEN '".$fechaIni."' AND '".$fechaFin."';";

        $rs = mysqli_query($con, $query) or die("Error getPartesByRangoFechas");

        $partes = parent::mapearArray($rs, "Partelogistica");

        parent::desconectar($con);

        return $partes;
    }

    public static function save($parteLogistica){
        $conexion= parent::conectar();
        $query= "INSERT INTO ".self::$tabla."VALUES (null,'".$parteLogistica->getFecha()."','".$parteLogistica->getFecha()."','".$parteLogistica->getNota()."','".$parteLogistica->getAutopista()."','".$parteLogistica->getDieta()."','".$parteLogistica->getOtrosGastos()."','".$parteLogistica->getEstado()->getId()."','".$parteLogistica->getTrabajador()->getDni()."','".$parteLogistica->getHorasExtra()."')";
        $rs= mysqli_query($conexion,$query) or die(mysqli_error($conexion));
        if($rs){
            parent::desconectar($conexion);
            return "Viaje insertado correctamente";
        }
        parent::desconectar($conexion);
        return "Algo ha ido mal";
    }

    public static function remove($parteLogistica){
        $conexion= parent::conectar();
        $query= "DELETE FROM ".self::$tabla." WHERE id= '".$parteLogistica->getId()."'";
        $rs= mysqli_query($conexion,$query) or die("Error en la BD".mysqli_error($conexion));
        if($rs){
                parent::desconectar($conexion);
                return "El parte ha sido eliminado correctamente";
        }
        parent::desconectar($conexion);
    }

    public static function cerrarParte($parteLogistica){
        $conexion = parent::conectar();
        $query = "UPDATE parteslogistica SET nota='".$parteLogistica->getNota()."', autopista='".$parteLogistica->getAutopista()."', dieta='".$parteLogistica->getDieta()."', otroGasto='".$parteLogistica->getOtroGasto()."', idEstado='".$parteLogistica->getEstado()->getId()."' WHERE id = '".$parteLogistica->getId()."';";
        $rs = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
        if($rs){
            parent::desconectar($conexion);
            return "Parte cerrado";
        }
        parent::desconectar($conexion);
    }


    public static function getPartesByEstado($filaEstado){

        $con = parent::conectar();

        $query = "SELECT * FROM ".self::$tabla." WHERE idEstado='".$filaEstado->getId()."';";

        $rs = mysqli_query($con, $query) or die("Error getPartesByEstado");

        $partes = parent::mapearArray($rs, "Partelogistica");

        parent::desconectar($con);

        return $partes;
    }

    public static function getPartesByDni($dni)
    {
        $con = parent::conectar();

        $query = "SELECT * FROM ".self::$tabla." WHERE dniTrabajador= '".$dni."';";

        $rs = mysqli_query($con, $query) or die("Error getPartesByDni");

        $partes = parent::mapearArray($rs, "Partelogistica");

        parent::desconectar($con);

        return $partes;
    }

}