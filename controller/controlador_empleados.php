<?php

include_once("model/empleado.php");
include_once("conexion.php");

Database::crearInstancia();


class ControladorEmpleados{

    public function inicio(){

        
        $empleados=Empleado::consultar();


        include_once("view/empleados/inicio.php");

    }

    public function crear(){

        if($_POST){
            print_r ($_POST);
            date_default_timezone_set('America/Bogota');
            $nombre=$_POST['nombre'];
            $documento=$_POST['documento'];
            //$foto=$_POST['foto'];
            $fecha=date("Y-m-d");
            $hora=date("H:i:s");
            $actividad=$_POST['actividad'];
            
            Empleado::crear($nombre, $documento, $fecha, $hora, $actividad);
            header("Location:./?controlador=empleados&accion=inicio");
            
            
            


        }

        include_once("view/empleados/crear.php");

    }

    public function editar(){

       

        if($_POST){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $documento=$_POST['documento'];
            $fecha=date("Y-m-d");
            $hora=date("H:i:s");
            $actividad=$_POST['actividad'];
            

            Empleado::editar($id, $nombre, $documento, $fecha, $hora, $actividad);
            header("Location:./?controlador=empleados&accion=inicio");
        }

        $id=$_GET['id'];

        $empleado=Empleado::buscar($id);


        include_once("view/empleados/editar.php");

    }

    public function borrar(){
        print_r($_GET);
        $id=$_GET['id'];
          Empleado::borrar($id);
          header("Location:./?controlador=empleados&accion=inicio");
    }







}







?>