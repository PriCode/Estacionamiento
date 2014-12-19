<?php
/* @var $this ClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clientes'=>array('admin'),
	'Listar Completa'
);

$this->menu2=array(
	array('label'=>'Nuevo Cliente', 'url'=>array('create')),
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


<h3>Lista de Clientes</h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
