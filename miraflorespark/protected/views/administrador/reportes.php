    <?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '?r=administrador/index'),
	    array('label' => 'Clientes', 'url' => '?r=administrador/gclientes'),
	    array('label' => 'Tarifa', 'url' => '?r=administrador/gtarifa'),    
	    array('label' => 'Lotes', 'url' => '?r=administrador/glotes'),	    
	    array('label' => 'Reportes', 'url' => '?r=administrador/greportes','active' => true),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
     ?>


<legend>Reporte</legend>

	<h5>Mes </h5>
		<?php echo TbHtml::label('Desde:', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

	    <?php echo TbHtml::label('Hasta:', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

