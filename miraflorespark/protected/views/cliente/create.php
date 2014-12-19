<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Nuevo Cliente',
);

$this->menu2=array(
	array('label'=>'Listar Clientes', 'url'=>array('index')),
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

<h2>Nuevo Clinete</h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>