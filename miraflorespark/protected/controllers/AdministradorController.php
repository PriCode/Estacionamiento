<?php

class AdministradorController extends Controller
{

	public $layout='//layouts/column3';

	public function actionIndex()
	{

		$this->render('index');
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
	public function actionGtarifas(){
			$this->render('tarifas');			

	}







}