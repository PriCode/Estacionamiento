<?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '?r=administrador/index'),
	    array('label' => 'Clientes', 'url' => '?r=administrador/gclientes'),
	    array('label' => 'Tarifa', 'url' => '?r=administrador/gtarifas','active' => true),    
	    array('label' => 'Lotes', 'url' => '?r=administrador/glotes'),	    
	    array('label' => 'Reportes', 'url' => '?r=administrador/greportes'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
     ?>



<legend>Tarifas</legend>

<?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_HORIZONTAL); ?>
    <fieldset>
	    <h5>Tarifa Miembros</h5>
	    
	    <?php echo TbHtml::label('Por Hora', 'text'); ?>
	    <?php echo TbHtml::textField('txthora_m', '', array('placeholder' => '....')); ?>

	    <?php echo TbHtml::label('Por Mes: ', 'text'); ?>
	    <?php echo TbHtml::textField('txtmes_m', '', array('placeholder' => '....')); ?>
	    
	    

	    <h5>Tarifa No Miembros</h5>


	    <?php echo TbHtml::label('Por Hora', 'text'); ?>
	    <?php echo TbHtml::textField('txthora_nm', '', array('placeholder' => '....')); ?>

	
		<?php echo TbHtml::submitButton('Registrar'); ?>	    
	    	    
    </fieldset>

