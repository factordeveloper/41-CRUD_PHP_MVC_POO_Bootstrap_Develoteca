<?php

class Database{

    private static $instancia=NULL;

    public static function crearInstancia(){

        if(!isset(self::$instancia)){

            $opcionesPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;

            self::$instancia= new PDO('mysql:host=localhost;dbname=registros', 'root', '', $opcionesPDO);
            //echo "conexion exitosa";
        }
        return self::$instancia;

    }







}











