<?php

class Empleado{

    public $id;
    public $nombre;
    public $documento;
    
    public $fecha;
    public $hora;
    public $actividad;

    public function __construct($id, $nombre, $documento, $fecha, $hora, $actividad){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->documento=$documento;
        
        $this->fecha=$fecha;
        $this->hora=$hora;
        $this->actividad=$actividad;
    }

    public static function consultar(){
        $listaRegistros=[];
        $conexionBD=Database::crearInstancia();
        $sql = $conexionBD->query("SELECT * FROM registros");

        foreach($sql->fetchAll() as $empleado){

            $listaRegistros[] = new Empleado($empleado['id'], $empleado['nombre'], $empleado['documento'], $empleado['fecha'], $empleado['hora'], $empleado['actividad']);

        }

        return $listaRegistros;




    }

    public static function crear($nombre, $documento, $fecha, $hora, $actividad){

        $conexionBD=Database::crearInstancia();

        date_default_timezone_set('America/Bogota');
        $fecha=date("Y-m-d");
        $hora=date("H:i:s");

        


        $sql=$conexionBD->prepare("INSERT INTO registros(nombre, documento, fecha, hora, actividad)
                                  VALUES(?, ?, ?, ?, ?)");

        $sql ->execute(array($nombre, $documento, $fecha, $hora, $actividad));                        

    }

    public static function borrar($id){
        $conexionBD=Database::crearInstancia();
        $sql=$conexionBD->prepare("DELETE FROM registros WHERE id=?");

        $sql ->execute(array($id));   
    }

    public static function buscar($id){
        $conexionBD=Database::crearInstancia();

        $sql=$conexionBD->prepare("SELECT * FROM registros WHERE id =?");
        $sql->execute(array($id));
        $empleado=$sql->fetch();
        return new Empleado($empleado['id'], $empleado['nombre'], $empleado['documento'], $empleado['fecha'], $empleado['hora'], $empleado['actividad']);

         
    }

    public static function editar($id, $nombre, $documento, $fecha, $hora, $actividad){
        $conexionBD=Database::crearInstancia();


        


        $sql=$conexionBD->prepare("UPDATE registros SET nombre=?, documento=?, fecha=?, hora=?, actividad=?
                                  WHERE id=?");

        $sql ->execute(array($nombre, $documento, $fecha, $hora, $actividad, $id));   
    }

}









?>