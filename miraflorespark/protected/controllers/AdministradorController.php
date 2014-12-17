<?php

class AdministradorController extends Controller
{

	public $layout='//layouts/column3';

	public function actionIndex()
	{

		$valor="textotextotextotextotextotextotextotextotextotextotextotextotexto";


		$this->render('index',array("valor" =>$valor));
	}

}