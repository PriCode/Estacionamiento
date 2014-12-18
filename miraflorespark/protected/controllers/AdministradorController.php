<?php

class AdministradorController extends Controller
{

	public $layout='//layouts/column3';

	public function actionIndex11()
	{

		$valor="textotextotextotextotextotextotextotextotextotextotextotextotexto";


		$this->render('index',array("valor" =>$valor));
	}
	

	public function  actionIndex()
	{
	
	        $model = new RegistraContrato;
	        $msg = '';
	        if(isset($_POST['ajax']) && $_POST['ajax'] == 'form')
	        {
	                echo CActiveForm::validate($model);
	                Yii::app()->end();
	        }
	        
	        
	        if(isset($_POST['RegistraContrato']))
	        {
	                $model->attributes = $_POST['RegistraContrato'];
	                if(!$model->validate())
	                {	                
	                        $model->addError('modelo','Error al enviar el formulario');       
	                }else
	                {	                
	                        $insertar = new ConsultasDB;
	                        $insertar->inserta_contratos($model->nombres,$model->apellidos,$model->placa,$model->marca,$model->modelo);           

                                
	                        $model->nombres = '';
	                        $model->apellidos = '';
	                        $model->placa = '';
	                        $model->marca = '';
	                        $model->modelo = '';	                        
	                        $msg = 'Se generó el contrato';
	                }
	        }
	        
		$this->render('index',array('model'=>$model));
	}

}
