<?php

class AdministradorController extends Controller
{

	public $layout='//layouts/column3';

	public function actionIndex()
	{

		$this->render('index');
	}
	

	public function actionGclientes(){


		$model=new Cliente('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cliente']))
			$model->attributes=$_GET['Cliente'];

		$this->render('clientes',array(
			'model'=>$model,
		));
					
		
	}

	public function actionGlotes(){
				$this->render('lotes');			
						

	}

	public function actionGreportes(){
		$this->render('reportes');			
		
				


	}
	public function actionGtarifas(){
			$this->render('tarifas');			

	}







}