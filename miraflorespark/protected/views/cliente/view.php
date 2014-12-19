<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id_cliente,
);

$this->menu2=array(
	array('label'=>'Lista Completa', 'url'=>array('index')),
	array('label'=>'Nuevo Cliente', 'url'=>array('create')),
	array('label'=>'Actualizar Cliente', 'url'=>array('update', 'id'=>$model->id_cliente)),
	array('label'=>'Borrar Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Clientes', 'url'=>array('admin')),
);
?>


    <?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '?r=administrador/index'),
	    array('label' => 'Clientes', 'url' => '?r=cliente/admin', 'active' => true),
	    array('label' => 'Tarifa', 'url' => '?r=administrador/tarifa'),	   
	    array('label' => 'Lotes', 'url' => '?r=parking/admin'),


	    array('label' => 'Reportes', 'url' => '?r=administrador/greportes'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
     ?>

<h3>Vista Cliente #<?php echo $model->id_cliente; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cliente',
		'nombre',
		'ape_materno',
		'ape_paterno',
		'tipo_persona',
		'direccion',
	),
)); ?>
