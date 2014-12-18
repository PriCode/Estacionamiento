<?php

class ConsultasDB{
        public $codigo_verificacion;
        
        public function inserta_contratos($fecha, $cantidad_meses,$id_cliente, $id_tarifa, $id_tarjeta){
        
        $conexion = Yii::app()->db;
        
        $consulta = "INSERT INTO contrato(fecha,cantidad_meses,id_cliente,id_tarifa,id_tarjeta)";
        $consulta .= " VALUES";
        $consulta .=" ('$fecha','$cantidad_meses','$id_cliente','$id_tarifa','$id_tarjeta')";
        
        $resultado = $conexion->createCommand($consulta)->execute();
               
        }
}
