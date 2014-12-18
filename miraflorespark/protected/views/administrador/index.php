
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

            <?php echo CHtml::submitButton('Registrar2',array('class'=>'btn btn-primary'));?>
	    
	    <?php /*echo TbHtml::checkBoxControlGroup('rememberMe', false, array(
	    'label' => 'Remember me',
	    'controlOptions' => array('after' => TbHtml::submitButton('Sign in')),
	    )); */?>

    </fieldset>




<legend>Tarifas</legend>

<?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_HORIZONTAL); ?>
    <fieldset>
	    <h2>Tarifa Miembros</h2>
	    
	    <?php echo TbHtml::label('Por Hora', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

	    <?php echo TbHtml::label('Por Mes: ', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>
	    
	    

	    <h2>Tarifa No Miembros</h2>


	    <?php echo TbHtml::label('Por Hora', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>


		
		<?php echo TbHtml::submitButton('Registrar'); ?>	    
	    	    
    </fieldset>

<legend>Lotes</legend>

	<h2>Para Miembros</h2>

	<h2>Para no Miembros</h2>


<legend>Reporte</legend>

	<h2>Mes </h2>
		<?php echo TbHtml::label('Desde:', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

	    <?php echo TbHtml::label('Hasta:', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

