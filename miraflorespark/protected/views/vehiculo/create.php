<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */

$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List Vehiculo', 'url'=>array('index')),
	array('label'=>'Manage Vehiculo', 'url'=>array('admin')),
);*/
?>
    <?php 
    		$this->menu = array(						    
						        array('label' => 'Panel de Control'),
							    array('label' => 'Ingreso', 'url' => '?r=vehiculo/create', 'active' => true),
							    array('label' => 'Salida', 'url' => '?r=vehiculo/admin'),    
							    array('label' => 'Configuraciones', 'url' => '#'),
							    TbHtml::menuDivider(),
							    array('label' => 'Ayuda', 'url' => '#'),
						    );    	 
	 ?>
   

<h2>Ingreso de Vehiculo</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<?php if ($ticket==1){


	//print_r($model);
	print_r($ticket);
	print_r($parametros);

	/*
	 echo TbHtml::button('Imprimir ticket', array(
    'style' => TbHtml::BUTTON_COLOR_PRIMARY,
    //'size' => TbHtml::BUTTON_SIZE_LARGE,
    'data-toggle' => 'modal',
    'data-target' => '#myModal',
    )); 

		$html= "<center><div><h2><em> MirafloresPark S.A</em></h2><br>RUC: 234512345564<br> Playa: LAP1<br> Centro Comercial Larcomar<br> Av. Larcomar 345<br> Miraflores-Miraflores<br><br> CAJA-02<br> Serie= SW45362764</div></center>" ;
		$html.= "<br><center><div>COBRO<br> Hora ingreso:-----<br>";
		$html.="Parking:---<br> ";
		$html.="Base: ------<br>";
		$html.="Impuesto: ------<br>";
		$html.="Tarifa:------ <br>";
		$html.="Efectivo:----- <br></div></center>";

	$this->widget('bootstrap.widgets.TbModal', array(
    'id' => 'myModal',
    'header' => 'Tickect',
    'content' => $html,
    'footer' => array(
    //TbHtml::button('Save Changes', array('data-dismiss' => 'modal', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)),
    //TbHtml::button('Descartar', array('data-dismiss' => 'modal')),
    TbHtml::button('Aceptar', array('data-dismiss' => 'modal', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)),
    ),
    )); 
     
    



		

	// echo CHtml::textArea('detalles',$html);	 

*/
} ?>



