<?php
class RegistraTarifa extends CFormModel
{
    public $por_minuto;
    public $por_mes;
    public $tipo_cliente;

    public function rules(){
        return array(
            array(
                'por_minuto,por_mes,tipo_cliente',
                'required',
                'message'=>'Este campo es requerido',
            ),

        );
    }

}