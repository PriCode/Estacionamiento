<?php
class RegistraContrato extends CFormModel
{
        public $fecha;
        public $cantidad_meses;
        public $id_cliente;
        public $id_tarifa;
        public $id_tarjeta;
        
        public function rules(){
                return array(
                        array(
                                'fecha, cantidad_meses, id_cliente, id_tarifa, id_tarjeta',
                                'required',
                                'message'=>'Este campo es requerido',
                        ),
                                                                                                                  
                );        
        }
	
}
