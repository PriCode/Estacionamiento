<?php

class PorteroController extends Controller
{


	public $layout='//layouts/column3';


	public function actionIndex()
	{

		$this->render('index');

	}

	public function actionRegistro()
	{
        	
		$model = new RegistraIngresoAutos;
        $msg = 'pre registro ingreso ';
        print_r($_POST);

        if(isset($_POST['ajax']) && $_POST['ajax'] == 'form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

		
		if ($_POST['yt0']) {	  

		  	 $model->attributes = $_POST;
		  	 	print_r($model->attributes);			
	            if(!$model->validate())
	            {

	                $model->addError('modelo','Error al enviar el formulario');
	            }else
	            {
				
	                $insertar = new ConsultasDB;
	                $insertar->inserta_ingreso($model->placa,$model->color,$model->modelo);                
	                $msg = 'Se generó correctamente el ingreso';
	            }

         }               	
        	$this->render('index',array('model'=>$model,'msg'=>$msg));        
        /*
        	$msg='';
			if () {
				$msg=$_POST['yt0'];
			}
        $this->render('index',array('msgFrontal'=>$msg));

        */

	}

	public function actionSalida()
	{

		$this->render('salida');	
	}


	public function actionIngreso(){

		$this->render('../vehiculo/index');		

	}



	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}