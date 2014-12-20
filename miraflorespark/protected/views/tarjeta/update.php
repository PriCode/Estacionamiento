<?php
/* @var $this TarjetaController */
/* @var $model Tarjeta */

$this->breadcrumbs=array(
	'Tarjetas'=>array('index'),
	$model->id_tarjeta=>array('view','id'=>$model->id_tarjeta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tarjeta', 'url'=>array('index')),
	array('label'=>'Create Tarjeta', 'url'=>array('create')),
	array('label'=>'View Tarjeta', 'url'=>array('view', 'id'=>$model->id_tarjeta)),
	array('label'=>'Manage Tarjeta', 'url'=>array('admin')),
);
?>

<h1>Update Tarjeta <?php echo $model->id_tarjeta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>