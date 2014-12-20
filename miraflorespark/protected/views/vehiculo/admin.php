<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */

$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List Vehiculo', 'url'=>array('index')),
	array('label'=>'Create Vehiculo', 'url'=>array('create')),
);*/

    		$this->menu = array(						    
						        array('label' => 'Panel de Control'),
							    array('label' => 'Ingreso', 'url' => '?r=vehiculo/create'),
							    array('label' => 'Salida', 'url' => '?r=vehiculo/admin', 'active' => true),    
							    array('label' => 'Configuraciones', 'url' => '#'),
							    TbHtml::menuDivider(),
							    array('label' => 'Ayuda', 'url' => '#'),
						    );    	 
	 

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vehiculo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Salida de Vehiculos</h2>

<?php 
	if ( $key==1) {


			//echo $key;
			echo " Pago: ". $pago."<br>";

			echo $time_llegada->format('Y-m-d H:i:s')."<br>";

			echo $time_partida->format('Y-m-d H:i:s')."<br>";	
			echo " Condicion: ".$condicion['condicion']."<br>";
			echo " Parking: ". $parkin['id_parking'];

	}else{

			echo "<div class=\"search-form\" style=\"display:none\">";

			 $this->renderPartial('_search',array(
				'model'=>$model,
			)); 
			echo "</div><!-- search-form -->";


			 $form=$this->beginWidget('CActiveForm', array(
				'action'=>'?r=vehiculo/salida',
				'method'=>'post',
			)); 

			echo "<div class=\"row\">";
					 echo $form->label($model,'placa'); 
					 echo $form->textField($model,'placa',array('size'=>7,'maxlength'=>7)); 
			echo "</div><div class=\"row buttons \">";
					 echo CHtml::submitButton('Calcular'); 
			echo  "</div>";
				 $this->endWidget(); 

	}
?>





<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vehiculo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_vehiculo',
		'placa',
	//	'color',
	//	'modelo',
		'condicion',
   //	'id_tarjeta',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>





