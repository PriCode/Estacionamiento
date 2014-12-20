<?php
class RegistraIngresoAutos extends CFormModel
{
    public $placa;
    public $color;
    public $modelo;

    public function rules(){
        return array(
            array(
                'placa, modelo, color',
                'required',
                'message'=>'Este campo es requerido',
            ),

        );
    }



}