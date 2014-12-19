<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('admin'),
	$model->id_cliente=>array('view','id'=>$model->id_cliente),
	'Actualizar',
);

$this->menu2=array(
	array('label'=>'Lista Completa', 'url'=>array('index')),
	array('label'=>'Nuevo Cliente', 'url'=>array('create')),
	array('label'=>'Vista Cliente', 'url'=>array('view', 'id'=>$model->id_cliente)),
	array('label'=>'Gestionar Clientes', 'url'=>array('admin')),
);
?>

    <?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '?r=administrador/index'),
	    array('label' => 'Clientes', 'url' => '?r=cliente/admin', 'active' => true),

	    array('label' => 'Tarifa', 'url' => '?r=administrador/gtarifas'),    
	    array('label' => 'Lotes', 'url' => '?r=parking/admin'),

	    array('label' => 'Reportes', 'url' => '?r=administrador/greportes'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
     ?>

<h2>Actualizar Cliente <?php echo $model->id_cliente; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>