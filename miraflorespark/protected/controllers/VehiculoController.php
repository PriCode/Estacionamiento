<?php

class VehiculoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column4';

	/**
	 * @return array action filters
	 */
	public $menu2=array();
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('*'),
			),
			/*array('deny',  // deny all users
				'users'=>array('*'),
			),*/
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}






public function actionSalida(){
		
		$model=new Vehiculo;
		$modelT=new Ticket;
			

			$key=0;
			$pago=null;
			$objTime1=null;
			$objTime2=null;
			$condicion=null;
		
	if(isset($_POST['Vehiculo']))
		{
			
		  $placa= $_POST['Vehiculo']['placa'];

		  $condicion=Vehiculo::model()->find(array(
					    'select'=> 'condicion',
					    'condition'=>'placa=:placa',
					    'params'=>array('placa'=>$placa),
					    ));
		
		//calculo de tarifa
		if (strcasecmp(strval($condicion['condicion']),'miembro')) {			
			//busca tarifa
			$tarifaMiembro=Tarifa::model()->find(array(
					    'select'=>'por_minuto',
					    'condition'=>'id_tarifa=:id_tarifa',
					    'params'=>array('id_tarifa'=>1),
					));				
		}else{
			$tarifaMiembro=Tarifa::model()->find(array(
					    'select'=>'por_minuto',
					    'condition'=>'id_tarifa=:id_tarifa',
					    'params'=>array('id_tarifa'=>2),
					));				
		}

		//buscar el ticket
			$idVehiculo=Vehiculo::model()->find(array(
					    'select'=> 'id_vehiculo',
					    'condition'=>'placa=:placa',
					    'params'=>array('placa'=>$placa),
					    ));

			$tiempoI= Ticket::model()->find(array(
					    'select'=> 'hora_llegada',
					    'condition'=>'id_vehiculo=:id_vehiculo',
					    'params'=>array('id_vehiculo'=>$idVehiculo['id_vehiculo']),
					   ));

		//minutos aleatorios	
			$objTime1=new DateTime($tiempoI['hora_llegada']);

			$numMinutes=rand(10,60);			
			$objTime2 = new DateTime('2011-11-17 05:05:4');
			$objTime2->add(new DateInterval('PT' . $numMinutes . 'M'));
			$stamp = $objTime2->format('Y-m-d H:i:s');
				

			$pago= strval($numMinutes*$tarifaMiembro['por_minuto']); 

			//if($modelT->save())
				//$this->render('admin',array('pago'=>$pago));
				//$this->redirect(array('view','id'=>$model->id_ticket));
		
		
		// liberar parking
			//recuperar id_parking

			$idParking= Ticket::model()->find(array(
					    'select'=> 'id_parking',
					    'condition'=>'id_vehiculo=:id_vehiculo',
					    'params'=>array('id_vehiculo'=>$idVehiculo['id_vehiculo']),
					   ));			
		
			$parkin=Parking::model()->findByPk($idParking['id_parking']);
			//$parkin->estado='libre';

			//$parkin->save(); 

			$key=1;
		}

		$this->render('admin',array(					
			'key'=>$key,
			'model'=>$model,
			'pago'=>$pago,
			'time_llegada'=>$objTime1,
			'time_partida'=>$objTime2,
			'condicion'=>$condicion,
			'parkin'=>$parkin['id_parking'],

		));

}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Vehiculo;
		$modelT=new Ticket;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);		

		$ticket=0;
		$parametros[]=null;
		if(isset($_POST['Vehiculo']))
		{
			//print_r($_POST['Vehiculo']['condicion']);
			$parametros=array();

			$model->attributes=$_POST['Vehiculo'];			
			
			$ticket=1;
			//if($model->save())
				//$this->redirect(array('view','id'=>$model->id_vehiculo));

			$parametros[]=$modelT->fecha= date("d-m-Y");
			$parametros[]=$modelT->hora_llegada= date("H:i:s");
			$parametros[]=$modelT->hora_salida= date("H:i:s");

				//asignacion de lote
			$loteAsignado=null;

			$loteAsignado=$modelT->id_parking=Parking::model()->find(array(
	    			'select'=> 'id_parking',
				    'condition'=>'estado=:estado',
				    'params'=>array('estado'=>'Libre'),
			));

			if ($loteAsignado!=null) {
				$loteAsignado='No hay lugar disponible';
			}else{
				$parametros[]=$loteAsignado;
			}
  			$model->save();
			$modelT->save();			

		}

		$this->render('create',array(
			'model'=>$model,
			'ticket'=>$ticket,
			'parametros'=>$parametros,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Vehiculo']))
		{
			$model->attributes=$_POST['Vehiculo'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_vehiculo));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Vehiculo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Vehiculo('search');
	
			$key=0;
			$pago=null;
			$objTime1=null;
			$objTime2=null;
			$condicion=null;
	
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Vehiculo']))
			$model->attributes=$_GET['Vehiculo'];

		$this->render('admin',array(
			'key'=>$key,
			'model'=>$model,
			'pago'=>$pago,
			'objTime1'=>$objTime1,
			'objTime2'=>$objTime2,
			'condicion'=>$condicion,

		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Vehiculo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Vehiculo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Vehiculo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='vehiculo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
