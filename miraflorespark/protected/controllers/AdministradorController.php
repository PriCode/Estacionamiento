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
	                        $insertar = new Contrato;
	                        $insertar->fecha=$model->fecha; 
	                        $insertar->cantidad_meses=$model->cantidad_meses;
	                        $insertar->id_cliente=$model->id_cliente;
	                        $insertar->id_tarifa=$model->id_tarifa;
	                        $insertar->id_tarjeta=$model->id_tarjeta;
	                        if($insertar->save()){
		                        $msg = '<strong class="text-info">Se generó correctamente el contrato</strong>'; 
	                        }else{
	                        	$msg ='<strong class="text-error"> Error al cargar los datos</strong>';
	                        }
		                        $model->fecha=''; 
		                        $model->cantidad_meses='';
		                        $model->id_cliente='';
		                        $model->id_tarifa='';
		                        $model->id_tarjeta=''; 
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
        print_r($_POST);
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
	                        $insertar = new Tarifa;
	                        $insertar->por_minuto=$model->por_minuto; 
	                        $insertar->por_mes=$model->por_mes;
	                        $insertar->tipo_cliente=$model->tipo_cliente;
	                        if($insertar->save()){ 
		                        $msg = '<strong class="text-info">Se generó correctamente el contrato</strong>'; 
	                        }else{
	                        	$msg ='<strong class="text-error"> Error al cargar los datos</strong>';
	                        }
		                    $model->por_minuto='';
                			$model->por_mes='';
                			$model->tipo_cliente='';
	                }
        }

        $this->render('tarifa',array('model'=>$model,'msg'=>$msg));

	}

}
