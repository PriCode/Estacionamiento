<?php

class ConsultasDB 
/*extends CActiveRecord*/ {
        
        public function inserta_contratos($data){
        
        $conexion = Yii::app()->db;
        /*
        $consulta = "INSERT INTO contrato(fecha,cantidad_meses,id_cliente,id_tarifa,id_tarjeta)";
        $consulta .= " VALUES";
        $consulta .=" ('$fecha','$cantidad_meses','$id_cliente','$id_tarifa','$id_tarjeta')";
        */

        $this->setAttributes($data,false);
        $this->save();
        //$resultado = $conexion->createCommand($consulta)->execute();
               
        }

/*

    public function tableName()
    {
        return 'contrato';
    }


*/

        public function inserta_tarifa($por_minuto,$por_mes,$tipo_cliente){

            $conexion = Yii::app()->db;

            $consulta = "INSERT INTO tarifa(por_minuto,por_mes,tipo_cliente)";
            $consulta .= " VALUES";
            $consulta .=" ('$por_minuto','$por_mes','$tipo_cliente')";

            $resultado = $conexion->createCommand($consulta)->execute();

        } 
/*
        public static function model($className=__CLASS__)
       {
        return parent::model($className);
    }*/




}
