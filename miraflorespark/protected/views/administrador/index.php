
    <?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '#', 'active' => true),
	    array('label' => 'Tarifa', 'url' => '#'),    
	    array('label' => 'Lotes', 'url' => '#'),
	    array('label' => 'Reporte', 'url' => '#'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
     ?>


<legend>Contratos</legend>


<?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_HORIZONTAL); ?>
    <fieldset>
	    <legend>Registro de Suscripcion</legend>

	    <?php echo TbHtml::label('Nro de Contrato', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

	    <?php echo TbHtml::label('Nombre: ', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

	    <?php echo TbHtml::label('Apellido: ', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

	    <?php echo TbHtml::label('Placa: ', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

	    <?php echo TbHtml::label('Marca: ', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

	    <?php echo TbHtml::label('Modelo: ', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

	    <?php // echo TbHtml::checkBox('checkMeOut', false, array('label' => 'Check me out')); ?>
	    <?php echo TbHtml::submitButton('Registrar'); ?>	    

	    
	    <?php /*echo TbHtml::checkBoxControlGroup('rememberMe', false, array(
	    'label' => 'Remember me',
	    'controlOptions' => array('after' => TbHtml::submitButton('Sign in')),
	    )); */?>

    </fieldset>




<legend>Tarifas</legend>

<?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_HORIZONTAL); ?>
    <fieldset>
	    <legend>Tarifa Miembros</legend>
	    
	    <?php echo TbHtml::label('Por Hora', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

	    <?php echo TbHtml::label('Por Mes: ', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
	    
	    

	    <legend>Tarifa No Miembros</legend>


	    <?php echo TbHtml::label('Por Hora', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>


		
		<?php echo TbHtml::submitButton('Registrar'); ?>	    
	    	    
    </fieldset>

<legend>Lotes</legend>


<legend>Reporte</legend>



