<?php

class AdministradorController extends Controller
{

	public $layout='//layouts/column3';

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
	                        $insertar->inserta_contratos($model->fecha, $model->cantidad_meses,$model->id_cliente, $model->id_tarifa, $model->id_tarjeta);           

                                
	                        $model->fecha=''; 
	                        $model->cantidad_meses='';
	                        $model->id_cliente='';
	                        $model->id_tarifa='';
	                        $model->id_tarjeta='';                        
	                        $msg = 'Se generó correctamente el contrato';
	                }
	        }
	        
		$this->render('index',array('model'=>$model,'msg'=>$msg));
	}
	

	public function actionGclientes(){		
		$this->render('clientes');
	}

	public function actionGlotes(){
				$this->render('lotes');			
						

	}

	public function actionGreportes(){
		$this->render('reportes');			
		
				


	}
	public function actionTarifa(){

        $model = new RegistraTarifa;
        $msg = '';
        if(isset($_POST['ajax']) && $_POST['ajax'] == 'form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }


        if(isset($_POST['RegistraTarifa']))
        {
            $model->attributes = $_POST['RegistraTarifa'];
            if(!$model->validate())
            {
                $model->addError('modelo','Error al enviar el formulario');
            }else
            {
                $insertar = new ConsultasDB;
                $insertar->inserta_tarifa($model->por_minuto,$model->por_mes,$model->tipo_cliente);


                $model->por_minuto='';
                $model->por_mes='';
                $model->tipo_cliente='';
                $msg = 'Se generó correctamente el contrato';
            }
        }

        $this->render('tarifa',array('model'=>$model,'msg'=>$msg));

	}







}
