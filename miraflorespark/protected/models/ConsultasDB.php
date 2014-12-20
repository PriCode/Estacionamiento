<?php

class ConsultasDB{
        
        public function inserta_contratos($fecha, $cantidad_meses,$id_cliente, $id_tarifa, $id_tarjeta){
        
        $conexion = Yii::app()->db;
        
        $consulta = "INSERT INTO contrato(fecha,cantidad_meses,id_cliente,id_tarifa,id_tarjeta)";
        $consulta .= " VALUES";
        $consulta .=" ('$fecha','$cantidad_meses','$id_cliente','$id_tarifa','$id_tarjeta')";
        
        $resultado = $conexion->createCommand($consulta)->execute();
               
        }



        public function inserta_tarifa($placa,$color,$modelo){

            $conexion = Yii::app()->db;

            $consulta = "INSERT INTO `miraflorespark`.`vehiculo` (`id_vehiculo`, `placa`, `color`, `modelo`, `condicion`, `id_tarjeta`)";
            $consulta .= " VALUES";
            $consulta .=" (NULL,'$placa','$color','$modelo')";

            $resultado = $conexion->createCommand($consulta)->execute();

        }



        public function inserta_ingreso($placa,$color,$modelo){

            $conexion = Yii::app()->db;
            $consulta = "INSERT INTO tarifa(por_minuto,por_mes,tipo_cliente)";
            $consulta .= " VALUES";
            $consulta .=" ('$por_minuto','$por_mes','$tipo_cliente')";

            $resultado = $conexion->createCommand($consulta)->execute();

        }



}
